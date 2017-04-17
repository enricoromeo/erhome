<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();
      $posts = Post::orderBy('created_at', 'desc')->get();
      //$customers= Customer::all();
      //dd($posts);
      return view('posts.indexPost', [ 'posts' => $posts ]);
      //return view::make('invoce.invoice')->with('items', $item);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.addPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required|max:255',
        'text' => 'required',
      ]);

        Post::create(request(['title', 'text']));

        //$post = new Post;
        //$post->title = $request->post_title;
        //$post->text = $request->post_text;
        //$post->save();

        $request->session()->flash('success_message', 'Post was successful added!');
        return view('posts.addPost');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)

    {
        //return $post;
        return view('posts.showPost', compact('post'));

        //$post = Post::find($id);
        //return view('posts.showPost', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $id)
    {
        return view('posts.editPost', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $id)
    {
      $this->validate($request, [
        'post_title' => 'required|max:255',
        'post_text' => 'required',
      ]);

        $post = Post::findOrFail($id);
        $post->title = $request->post_title;
        $post->text = $request->post_text;
        $post->save();

        $request->session()->flash('success_message', 'Post was successful added!');
        return view('posts.indexPost');
    }

    /**user->destroy($id);
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $id)
    {
      $post = Post::find($id);
      $post->delete();
    }
}
