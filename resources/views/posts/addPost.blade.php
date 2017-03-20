@extends('layouts.default')

@section('content')

@section('title', 'Add Post')


<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="page-header">
              <h1>Add a Post <small>write something</small></h1>
          </div>

          <p class="lead">write something</p>

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          @if (session('success_message'))
            <div class="alert alert-success">
              {{ session('success_message') }}
            </div>
          @endif

          <form method="POST" action="{{ action('PostController@store') }}">
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

      </div>
  </div>
</div>


@stop
