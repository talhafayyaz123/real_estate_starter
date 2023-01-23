<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Str;
use Carbon\Carbon;

class Condos extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'condos_image', 'description', 'address', 'location', 'developer', 'price', 'one_bed_starting_price', 'two_bed_starting_price', 'category', 'occupency', 'area_size', 'status', 'user_id'];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = Str::uuid()->toString();
        });
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    public static function getCondos($request)
    {

        $condos = self::when($request->location, function ($query, $location) {
            if ($location == 'All Market') {
                return $query->orderBy('id');
            } else {
                return $query->where('location', $location);
            }
        })

            ->when($request->category, function ($query, $category) {
                return $query->where('category', $category);
            })

            ->when($request->new, function ($query) {
                return $query->whereBetween('condos.created_at', [Carbon::now()->subDays(3)->startOfDay(), Carbon::now()->endofDay()])
                    ->orderBy('condos.created_at', 'asc');
            })
            ->when($request->all, function ($query) {
                return $query->orderBy('condos.created_at', 'asc');
            })
            ->when($request->sortBy, function ($query, $sortBy) {
                return $query->orderBy($sortBy, request('sortDesc') == 'true' ? 'asc' : 'desc');
            })
            ->when($request->page, function ($query, $page) {
                return $query->offset($page - 1);
            })
            ->when($request->front, function ($query) {
                return $query->where('status', 1);
            })
            ->paginate($request->perPage);
        return $condos;
    }

    public static function deleteCondo($uuid)
    {
        $condo = self::where('uuid', $uuid)->first();
        $condo->delete();
        return $condo;
    }

    public static function updateCondoStatus($request)
    {
        $condo_status = $request->status;
        if ($condo_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $data['status'] = $status;
        self::where('uuid', $request->condo_uuid)->update($data);
        return true;
    }

    public static function storeCondo($request)
    {
        $condo = new self($request->all());
        $condo->status = $request->boolean('status');
        if ($request->has('condos_image')) {
            $condo->condos_image = self::uploadPropertyMedia($request, 'condos_image');
        }
        $condo->save();
        return $condo;
    }

    public static function uploadPropertyMedia($request, $file_name)
    {
        $destinationPath = 'uploads/condos/';
        if ($request->hasFile($file_name)) {
            $file = $request->file($file_name);
            $name = time() . random_int(1, 1000000000) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($destinationPath), $name);
            return $destinationPath . $name;
        } else {
            return NULL;
        }
    }

    public static function updateCondo($request)
    {
        $condo = self::where('uuid', $request->uuid)->first();
        $data = $request->all();

        if ($request->has('status')) {
            $data['status'] = $request->boolean('status');
        }
        if ($request->has('condos_image')) {
            $data['condos_image'] = self::uploadPropertyMedia($request, 'condos_image');
        }

        $condo->update($data);
        return $condo;
    }
}
