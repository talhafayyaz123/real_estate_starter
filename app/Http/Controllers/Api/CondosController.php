<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Condos;
use Illuminate\Support\Facades\Validator;

class CondosController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $condos = Condos::getCondos($request);
        return $this->respond([
            'status' => true,
            'message' => 'Condos has been fetched succefully!',
            'data' => [
                'condos' => $condos
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $condo = Condos::storeCondo($request);
        return $this->respond([
            'status' => true,
            'message' => 'Condo has been stored successfully!',
            'data' => [
                'condo' => []
            ],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Condos $id)
    {
        return $this->respond([
            'status' => true,
            'message' => 'Condo Detail has been fetched succefully!',
            'data' => [
                'condo' => $id
            ],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        Condos::deleteCondo($uuid);
        return $this->respond([
            'status' => true,
            'message' => 'Condo has been deleted successfully!',
            'data' => [],
        ]);
    }

    public function updateCondoStatus(Request $request)
    {
        Condos::updateCondoStatus($request);
        return $this->respond([
            'status' => true,
            'message' => 'Condo Status has been updated successfully!',
            'data' => [],
        ]);
    }
}
