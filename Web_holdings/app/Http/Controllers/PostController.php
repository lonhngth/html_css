<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.list', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = Str::random(4) . $file->getClientOriginalName();
            $path = 'uploads/posts/';
            $file->move($path, $fileName);
        }

        $insert = [
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $path . $fileName
        ];

        Post::create($insert);
        return redirect()->route('admin.post.index')->with('message', 'Create post successfully');
    }

    public function edit($id)
    {
        $posts = Post::find($id);
        return view('admin.posts.edit', compact('posts'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = Str::random(4) . $file->getClientOriginalName();
            $path = 'uploads/posts/';
            $file->move($path, $fileName);
            $post->image = $path . $fileName;
        }

        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->description = $request->description;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('admin.post.index')->with('message', 'Update post successfully');
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        return back()->with('message', 'Delete post successfully');
    }
}
