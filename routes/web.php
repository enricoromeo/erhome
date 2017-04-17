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

use Illuminate\Http\Request;
use App\Mail\FeedbackReceived;
use Illuminate\Support\Facades\Mail;


Route::get('/posts', 'PostController@index');
Route::get('posts/{post}', 'PostController@show');

Route::get('addPost','PostController@create');
Route::post('post','PostController@store');

//Ruote::get('post/{id}/edit','PostController@edit');
//Ruote::post('post/{id}', 'PostController@update');
//Ruote::post('post', 'PostController@destroy');
//Route::resource('posts', 'PostController');


Route::get('/', function () {
    return view('home');
});

Route::get('about', function() {
    return view('about');
});

Route::get('contact', function() {
    return view('contact');
});

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

Auth::routes();

Route::get('/home', 'HomeController@index');
