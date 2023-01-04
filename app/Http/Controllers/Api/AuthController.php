<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends ApiController
{
    // public function getAuthResponseData($user)
    // {
    //     // $detail = $this->getUserAttribute($user);
    //     $token = $user->createToken('twilio-chat-app')->plainTextToken;
    //     $data['userData'] = $detail;
    //     $data['accessToken'] = $token;
    //     $data['refreshToken'] = $token;
    //     $data['isVerified2fa'] = false;
    //     return $data;
    // }

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
        // $data = $this->getAuthResponseData($user);
        // VerificationCode::generatedVerificationCode($user->id);
        else {
            return $this->respond([
            'status' => true,
            'message' => 'User has been login successfully!',
            'data' => $user
            ]);
        }
    }
}
