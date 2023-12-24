<?php

namespace App\Http\Controllers;

use App\Models\ImageCrud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Resources\ImageResource;
use App\Http\Resources\ImageGetById;

class ImageCrudController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:255',
            'category' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);

        $results = [];
        foreach ($request->file('images') as $file) {
            $filename = $file->store('posts', 'public');
            $filename = str_replace('posts/', '', $filename);

            $images = new ImageCrud();
            $images->category = $request->category;
            $images->title = $request->title;
            $images->description = $request->description;
            $images->image = $filename;
            $result = $images->save();
            $results[] = $result;
        }

        if (in_array(false, $results, true)) {
            return response()->json(['success' => false,
                'message' => 'Images not uploaded failed'
            ]);
        }

        return response()->json(['success' => true,
            'message' => 'Images uploaded successfully'

        ]);
    }

    public function getById($id)
    {
        $image = ImageCrud::findOrFail($id);
        if (!$image) {
            abort(404);
        }
        return new ImageGetById($image);
    }

    public function get(Request $request)
    {
        
        $query = ImageCrud::orderBy('created_at', 'DESC');

        

        if ($request->has('category')) {
            $category = $request->input('category');
            $query->where('category', $category);
        }

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('description', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('category', 'LIKE', '%' . $searchTerm . '%');
            });
        }
        
        $perPage = $request->has('per_page') ? (int) $request->input('per_page') : 9;

        if ($request->has('recommended') && $request->input('recommended') === 'random') {
            $images = $query->inRandomOrder()->paginate($perPage);
        } 
        
        $images = $query->paginate($perPage);


        // $images = $query->get();

        if ($images->isEmpty()) {
            return response()->json([
                'message' => 'No images found based on the provided criteria.'
            ], 404);
        }

        return ImageResource::collection($images);
    }

    public function edit($id)
    {
        $images = ImageCrud::findOrFail($id);
        return response()->json($images);
    }

    public function update(Request $request, $id)
    {
        $images = ImageCrud::findOrFail($id);

        $oldFilename = $images->image;
        $destination = storage_path('app/public/posts/' . $oldFilename);

        $filename = $oldFilename; 

        if ($request->hasFile('new_image')) {
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $filename = $request->file('new_image')->store('posts', 'public');
            $filename = str_replace('posts/', '', $filename);
        }

        $images->category = $request->category;
        $images->title = $request->title;
        $images->description = $request->description;
        $images->image = $filename;

        $result = $images->save();

        if ($result) {
            return response()->json([
                'success' => true,
                'message' => 'Image updated successfully'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Image not updated'
            ]);
        }
    }

    public function delete($id)
    {
        $image = ImageCrud::findOrFail($id);

        $filename = $image->image;
        $result = $image->delete();

        if ($result) {
            $destination = storage_path('app/public/posts/' . $filename);

            if (File::exists($destination)) {
                File::delete($destination);
            }

            return response()->json(['success' => true,
                'message' => 'Image deleted successfully']);
        } else {
            return response()->json(['success' => false,
                'message' => 'Image not deleted'
            ]);
        }
    }


    public function getImage($filename)
    {
        $path = storage_path('app/public/posts/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }

    public function downloadImage($filename)
    {
        $path = storage_path('app/public/posts/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        $image = ImageCrud::where('image', $filename)->first();
        $image->increment('downloads');

        return response()->download($path);
    }


}