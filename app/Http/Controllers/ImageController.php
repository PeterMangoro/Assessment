<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function update(Image $image, Request $request)
    {
        $validated_request = $request->validate([
            'image' => 'required',

        ]);

        $path = $request->file('image')->store('public/images');

        $image->path = str_replace("public", "storage", $path);
        $image->save();
        return redirect()->route('dashboard');
    }
}
