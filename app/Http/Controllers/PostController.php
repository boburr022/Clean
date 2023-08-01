<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create');
    }


    public function store(StorePostRequest $request)
    {
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('post-photos');
        }

        $posts = Post::create([
            'title' => $request->title,
            'Content' => $request->Content,
            'short_content' => $request->short_content,
            'photo' => $path ?? null,
        ]);
        return redirect()->route('posts.index');
    }


    public function show(string $id)
    {
        return view('posts.show');
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
