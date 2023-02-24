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
        return Image::latest()->pluck('name')->toArray();
    }

    public function store(Request $request)
    {
        return response()->json(['error' => 'This is a test.'], 500);

        if (!$request->hasFile('image')) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        $request->validate([
            'image' => 'required|file|image|mimes:jpeg,png,jpg',
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

        return $image->name;
    }
}
