<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostContent;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('blog.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('blog.show', ['post' => $post]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'title'      => 'required',
           'content'    => 'required'
        ]);

        $post = new Post;
        $postContent = new PostContent;

        $post->title = $request->title;
        $postContent->post_content = $request->post_content;

        //$post->save();
    }

    public function edit($id)
    {

    }
}
