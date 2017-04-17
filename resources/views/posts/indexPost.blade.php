@extends('layouts.default')

@section('content')

@section('title', 'List of Posts')


<div class="container-fluid">
  <div class="row content">
    <div class="col-md-8 col-md-offset-2">
      @foreach($posts as $post)

      @include('posts.partials.post')

      @endforeach
    </div>

  </div>
</div>

@stop
