@extends('layouts.default')

@section('title', 'Registration page')

@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <div class="page-header">
            <h1>Sign In <small>Sign In in our site</small></h1>
        </div>

        <p class="lead">this is a great site</p>

        <form method="POST" action="{{ action('SessionsController@store') }}">
          {{csrf_field()}}

          <div class="form-group">
            <label for="email">Email Address:</label>
            <input id="email" type="text" class="form-control" name="email" placeholder="Your Email" required>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Sign In</button>
          </div>

          @include('layouts.errors')

        </form>

      </div>
  </div>
</div>

@stop
