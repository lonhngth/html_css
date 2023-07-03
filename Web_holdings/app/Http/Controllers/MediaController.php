<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::all();
        return view('admin.medias.list', compact('medias'));
    }

    public function create()
    {
        return view('admin.medias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = Str::random(4) . $file->getClientOriginalName();
            $path = 'uploads/medias/';
            $file->move($path, $fileName);
        }

        $insert = [
            'name' => $request->name,
            'image' => $path . $fileName
        ];

        Media::create($insert);
        return redirect()->route('admin.media.index');
    }

    public function edit($id)
    {
        $medias = Media::find($id);
        return view('admin.medias.edit', compact('medias'));
    }

    public function update(Request $request, $id)
    {
        $media = Media::find($id);

        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = Str::random(4) . $file->getClientOriginalName();
            $path = 'uploads/posts/';
            $file->move($path, $fileName);
            $media->image = $path . $fileName;
        }

        $media->name = $request->name;
        $media->save();

        return redirect()->route('admin.media.index')->with('message', 'Update successfully!');
    }

    public function delete($id)
    {
        Media::find($id)->delete();
        return back()->with('message', 'Delete successfully!');
    }
}
