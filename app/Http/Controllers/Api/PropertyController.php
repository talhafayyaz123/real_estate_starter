<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PropertyResource;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PropertyController extends ApiController
{
    public function getProperties(Request $request)
    {
        $properties = Property::getProperties($request);
        return $this->respond([
            'status' => true,
            'message' => 'Properties has been fetched succefully!',
            'data' => [
                'properties' => $properties
            ],
        ]);
    }

    public function storeProperty(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $property = Property::storeProperty($request);
        return $this->respond([
            'status' => true,
            'message' => 'Property has been stored successfully!',
            'data' => [
                'property' => new PropertyResource($property)
            ],
        ]);
    }

    public function updateProperty(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $property = Property::updateProperty($request);
        return $this->respond([
            'status' => true,
            'message' => 'Property has been updated successfully!',
            'data' => [
                'property' => new PropertyResource($property)
            ],
        ]);
    }

    public function deleteProperty(Request $request)
    {
        Property::deleteProperty($request);
        return $this->respond([
            'status' => true,
            'message' => 'Property has been deleted successfully!',
            'data' => [],
        ]);
    }

    public function updatePropertyStatus(Request $request)
    {
        Property::updatePropertyStatus($request);
        return $this->respond([
            'status' => true,
            'message' => 'Property has been deleted successfully!',
            'data' => [],
        ]);
    }
}
