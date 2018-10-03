<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	return "O id é {$id}";
    }
}
