<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('images.index');
    }

    public function show()
    {
        // return all images
    }

    public function store(Request $request)
    {
        if (!$request->hasFile('image')) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        $request->validate([
            'image' => 'required|file|image',
        ]);

        $path = $request->file('image')->store('public/images');

        if (!$path) {
            return response()->json(['error' => 'Failed to upload image'], 500);
        }

        $uploadedFile = $request->file('image');

        $image = Image::create([
            'name' => basename($path),
            'extension' => $uploadedFile->extension(),
            'size' => $uploadedFile->getSize(),
        ]);

        return $image;
    }
}
