<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class AuthController extends ApiController
{
    public function getUserAttribute($user)
    {
        $data =  collect($user)->only('name', 'email');
        $role = $user->getRoleNames()[0];
        // $role = 'admin';
        if ($role == 'admin') {
            $data['ability'] = [
                [
                    "action" => "manage",
                    "subject" => 'all'
                ]
            ];
        } else {
            $data['ability'] = [
                [
                    "action" => "all",
                    "subject" => $role
                ]
            ];
        }
        $data['role'] = $role;
        $data['is_verified_email'] = $user->hasVerifiedEmail();
        return $data;
    }
    public function getAuthResponseData($user)
    {
        $detail = $this->getUserAttribute($user);
        $token = $user->createToken('Personal Access Token')->plainTextToken;
 
        $data['userData'] = $detail;
        $data['accessToken'] = $token;
        return $data;
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->respond([
                'status' => true,
                'message' => 'The provided credentials are incorrect.',
                'data' => []
            ]);
        }
        $data = $this->getAuthResponseData($user);
        // VerificationCode::generatedVerificationCode($user->id);
        return $this->respond([
        'status' => true,
        'message' => 'User has been login successfully!',
        'data' => $data
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return $this->respond([
            'status' => true,
            'message' => 'user has been logout successfully!',
            'data' => []
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email'=>'required|string|unique:users',
            'password'=>'required|string',
            'c_password' => 'required|same:password',
            'role' => [
                'required',
                Rule::in(['admin', 'owner', 'dealer'])
            ],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = new User([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->assignRole($request->role);

        if($user->save()){
            $data = $this->getAuthResponseData($user);
            return $this->respond([
            'message' => 'User has been registered successfully!',
            'data'=> $data,
            ]);
        }
        else{
            return $this->respond([
                'status' => false,
                'message' => 'Provide proper details!',
                'data'=> [],
            ]);
        }
    }
}
