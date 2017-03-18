<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
use App\class;

use Illuminate\Http\Request;                (Facades)

Route::get('/customer','CustomerController@index')

*/
Route::get('/posts', 'PostController@index');


Route::get('/', function () {
    return view('home');
});


Route::get('about', function() {
    return view('about');
});

Route::get('contact', function() {
    return view('contact');
});

use Illuminate\Http\Request;
use App\Mail\FeedbackReceived;
use Illuminate\Support\Facades\Mail;

Route::post('contact', function(Request $request) {

    \Validator::make($request->all(), [
      'name' => 'required|string',
      'email' => 'required|email',
      'comment' => 'required|string'
    ])->validate();


    Mail::to($request->get('email'))
      ->send(new FeedbackReceived($request->get('name'), $request->get('comment')));

    return redirect('/contact')->with([
    'success_message' => 'Your message has been sent!'
  ]);

});
