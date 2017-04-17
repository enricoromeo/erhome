<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function store(Post $post)
    {

      $this->validate(request(), ['text' => 'required|min:2']);
      $post->addComment(request('text'));


      //add a comment to a post
      //Comment::create([
      //  'text' => request('text'),
      //  'post_id' => $post->id

      //]);
      return back();
    }
}
