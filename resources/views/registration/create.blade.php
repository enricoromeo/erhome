@extends('layouts.default')

@section('title', 'Registration page')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="page-header">
              <h1>Register <small>Register in our site</small></h1>
          </div>

          <p class="lead">this is a great site</p>

           <!-- <form method="POST" action="register"> -->
           <form method="POST" action="{{ action('RegistrationController@store') }}">

            {{csrf_field()}}

            <div class="form-group">
              <label for="name">Name:</label>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Your Name" required>
              <!--<input type="text" class="form-control" id="name" name="name"> -->
            </div>

            <div class="form-group">
              <label for="email">E-Mail:</label>
              <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
              <!--<input type="email" class="form-control" id="email" name="email">-->
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input id="password" type="password" class="form-control" name="password" placeholder="Your Password" required>
              <!--<input type="password" class="form-control" id="password" name="password">-->
            </div>

            <div class="form-group">
              <label for="password_confirmation">Password Confirmation:</label>
              <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Your Password Confirmation" required>
              <!--<input type="password" class="form-control" id="password" name="password">-->
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>

            @include ('layouts.errors')

          </form>

      </div>
  </div>
</div>
@stop
