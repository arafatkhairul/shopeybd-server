<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'exists:users,email'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return $this->error([], "Invalid credentials");
        }

        $user = User::where('email', $request->email)->first();

        return $this->success([
            'token' => $user->createToken("API TOKEN")->plainTextToken,
            'user' => $user
        ], "Login successfully!");
    }
}
