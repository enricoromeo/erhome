<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

    public function __construct()
    {

      $this->middleware('guest',['except' => 'destroy' ]);

    }
    public function create()
    {
      return view('sessions.create');
    }
    public function store(Request $request)
    {
      $email = $request->email;
      $password = $request->password;
      if (! Auth::attempt(['email' => $email, 'password' => $password])) {
           // Authentication passed...

          return back()->withErrors([

           'message' => 'Please check your credential and try again.'

          ]);
      //if( ! auth()->attempt(request(['email','password'])))
      //{
        //return dd(Auth::user());
      //  return back()->withErrors([

      //    'message' => 'Please check your credential and try again.'

      //  ]);

      }
      return redirect()->home();

    }
    public function destroy()
    {
      auth()->logout();

      return redirect()->home();

    }
}
