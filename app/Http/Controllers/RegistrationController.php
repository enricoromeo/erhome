<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
      return view('registration.create');
    }

    public function store(Request $request)
    {
      //Validate the form
      $this->validate(request(), [

        'name' => 'required',

        'email' => 'required|email',

        'password' => 'required|confirmed'

      ]);



      //Create and Save the Users
      $name = $request->name;
      $email = $request->email;
      $password = $request->password;
      $user = User::create([
        'name' => $name,
        'email' => $email,
        'password' => bcrypt($password),
      ]);


      //Sign them in
      // \Auth::login();
      auth()->login($user);

      //Redirect to the home page
      return redirect()->home();

    }
}
