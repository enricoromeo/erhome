@extends('layouts.default')

@section('content')

@section('title', 'List of Posts')


<div class="container-fluid">
  <div class="row content">
    <div class="col-md-8 col-md-offset-2">
        <h4><small>RECENT POSTS</small></h4>
        <hr>
        <h2>{{ $post->title }}</h2>
        <h5><span class="glyphicon glyphicon-time"></span> Post by eromeo, {{ $post->created_at }}.</h5>
        <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
        <p>{{ $post->text }}</p>
        <br><br>
        <td>
            <form  method="POST" action="{{ action('PostController@update') }}">
                {{ csrf_field() }}
              <div class="form-group">
                  <label for="post_title">Title</label>
                  <input id="post_title" type="text" class="form-control" name="post_title" value="{{ old('post_title') }}" placeholder="Your Title">
              </div>

              <div class="form-group">
                  <label for="post_text">Text Comment</label>
                  <textarea rows="10" id="post_text" class="form-control" name="post_text" placeholder="Your message">{{ old('post_text') }}</textarea>
              </div>
                <button type="submit" class="btn btn-primary btn-lg">Send</button>
              </form>
          </form>
        </td>
    </div>

  </div>
</div>

@stop
