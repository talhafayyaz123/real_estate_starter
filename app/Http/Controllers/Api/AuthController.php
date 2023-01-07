<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
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
                'status' => false,
                'message' => 'The provided credentials are incorrect.',
                'data' => []
            ]);
        }
        if($request->rememberMe) {
            $user->update([$user->setRememberToken(Str::random(60))]);
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

    public function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $status = Password::sendResetLink(
            $request->only('email')
        );
        $statusType = $status === Password::RESET_LINK_SENT ? true : false;

        return $this->respond([
            'status' => $statusType,
            'message' => __($status),
            'data' => []
        ]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'c_password', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return response()->json(['status' => true, 'message' => __($status), 'data' => []]);
        } else {
            return response()->json(['status' => false, 'message' => __($status), 'data' => []]);
        }
    }
}
