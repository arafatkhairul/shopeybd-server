<?php

namespace App\Http\Core;

use Intervention\Image\Laravel\Facades\Image;

class ImageManager
{
    public static function upload($file)
    {
        $image = Image::read($file);

        return $image;
        // $name = time() . time() . time() . '' . $file->getClientOriginalExtension();
        // $dir = public_path('upload/profile/' . $name);
        // Image::make($file)->save($dir);
        // return $name;
    }
}
