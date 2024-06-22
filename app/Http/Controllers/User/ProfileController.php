<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Core\ImageManager;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function avatarUpdate(Request $request)
    {
        return ImageManager::upload($request->file('avatar'));
    }
}
