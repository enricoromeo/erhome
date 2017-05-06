@extends('layouts.default')

@section('content')

@section('title', 'Add Post')


<div class="container">
  <div class="row">
      <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
          <div class="page-header">
              <h1>Add a Post <small>write something</small></h1>
          </div>

          <p class="lead">write something</p>

          @include ('layouts.errors')

          @include ('layouts.successmessage')

          <form method="POST" action="{{ action('PostController@store') }}">
            {{ csrf_field() }}
          <div class="form-group">
              <label for="post_title">Title</label>
              <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Your Title">
          </div>

          <div class="form-group">
              <label for="post_text">Text Comment</label>
              <textarea rows="10" id="text" class="form-control" name="text" placeholder="Your message">{{ old('text') }}</textarea>
          </div>
            <button type="submit" class="btn btn-primary btn-lg">Send</button>
          </form>

      </div>
  </div>
</div>


@stop
