<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(3);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'created post');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post = Post::find($post->id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $post = Post::find($post->id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // $post = Post::find($post->id);
        
        Post::findOrFail($post->id)->update($request->all());
        return redirect()->route('posts.index')->with('success', 'update post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        
        // $post->delete();
        Post::findOrFail($post->id)->delete();
        return redirect()->route('posts.index')->with('success', 'delete post');
    }
}
