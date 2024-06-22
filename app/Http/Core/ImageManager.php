<?php

namespace App\Http\Core;

class ImageManager
{
    public static function  upload($file, $dir)
    {
        $imgName = \Illuminate\Support\Str::random(10) . time() . '.' . $file->getClientOriginalExtension();
        $uploadLocation = public_path('upload/' . $dir . '/' . $imgName);
        \Intervention\Image\Facades\Image::make($file)->save($uploadLocation);
        return $imgName;
    }
    public static function patch()
    {
    }

    public static function delete($dir, $file)
    {
        $path = public_path('upload/' . $dir . '/' . $file);
        if (file_exists($path)) {
            unlink($path);
        }
    }
}
