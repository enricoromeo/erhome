@extends('layouts.default')

@section('content')

@section('title', 'List of Posts')


<div class="container-fluid">
  <div class="row content">
    <div class="col-md-8 col-md-offset-2">

        <!--render post-->
        @include('posts.partials.post')

        <!-- Delete Button -->
        <td>
            <form action="{{ $post->id }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i> Delete
                </button>
            </form>
        </td>
    </div>

  </div>
</div>

@stop
