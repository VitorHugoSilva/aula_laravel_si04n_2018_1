<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function create()
    {

        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->only(['title', 'content']));

        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));

    }

    public function update(UpdatePostRequest $request, $id)
    {
        $post = Post::find($id);
        $post->fill($request->only(['title','content']));
        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->comments()->delete();
        $post->delete();
        return redirect()->route('posts.index');
    }
}
