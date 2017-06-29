@extends('layouts.default')

@section('content')

@section('title', 'List of Posts')

<article>
  <div class="container-fluid">
      <div class="row content">
         <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            @foreach($posts as $post)

            @include('posts.partials.post')

            @endforeach
        </div>
    </div>
  </div>
</article>

@stop
