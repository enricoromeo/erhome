@extends('layouts.default')

@section('content')

@section('title', 'List of Posts')

  <div class="container">
      <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            @foreach($posts as $post)

            @include('posts.partials.post')

            @endforeach
        </div>

    </div>
  </div>

@stop
