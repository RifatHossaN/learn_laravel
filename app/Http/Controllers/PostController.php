<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(6);

        return view('post', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $fields = $request->validate([
            'title' => ['required', 'max:150'],
            'body' => ['required', 'max:255']
        ]);

        //create post
        Auth::user()->posts()->create($fields);

        //return back
        return back()->with(["success"=> "Post created successfully.", "bgColor"=>"bg-green-400"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('user.showPost', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('user.editPost',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //validation
        $fields = $request->validate([
            'title' => ['required', 'max:150'],
            'body' => ['required', 'max:255']
        ]);


        //update post
        $post->update($fields);


        //return back
        return redirect()->route('dashboard')->with(["success"=> "Post edited successfully.", "bgColor"=>"bg-yellow-500"]);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with(['success'=>'The post was deleted successfully',"bgColor"=>"bg-red-700"]);
    }
}
