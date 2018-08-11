<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class Gallery extends Model
{
    const LOCATION = '/img/gallery/';

    static function saveImage($uploadedImage)
    {
        $userId = Auth::user()->id;
        $image = Image::make($uploadedImage);

        $hash = md5($image->dirname . $userId);
        // $image->mime has a string like "image/extension", so extract string after "/".
        preg_match('/\/(\w+)/', $image->mime, $match);
        $extension = $match[1];

        // save a original version
        $filePath = public_path() . Gallery::LOCATION;
        $image->save($filePath . $hash . '.' . $extension);

        // save a small version
        $image->resize(100, 100)->save($filePath . $hash . '_small.' . $extension);

        $gallery = new Gallery();
        $gallery->user_id = $userId;
        $gallery->file_name = $hash;
        $gallery->extension = $extension;
        $gallery->save();

        return true;
    }
}
