<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'user_id' => rand(11111111, 99999999),
            'user_name' => Str::slug(Str::lower($request->name)),
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return $this->success(
            [
                'token' => $user->createToken("API TOKEN")->plainTextToken,
                'user' => $user
            ],
            'Registration successfully!'
        );
    }
}
