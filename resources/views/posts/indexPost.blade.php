@extends('layouts.default')

@section('content')

@section('title', 'List of Posts')


<div class="container-fluid">
  <div class="row content">
    <div class="col-md-8 col-md-offset-2">
      @foreach($posts as $post)
        <h4><small>RECENT POSTS</small></h4>
        <hr>
        <h2>{{ $post->title }}</h2>
        <h5><span class="glyphicon glyphicon-time"></span> Post by eromeo, {{ $post->created_at }}.</h5>
        <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
        <p>{{ $post->text }}</p>
        <br><br>
        @endforeach
    </div>

  </div>
</div>

@stop
