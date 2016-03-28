<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home/home');
});

Route::get('/profile', function () {
    return view('profile/profile');
});

Route::get('/visi-misi', function () {
    return view('visi-misi/visi_misi');
});

Route::get('/sejarah', function () {
    return view('sejarah/sejarah');
});

Route::get('/data-statis', function () {
    return view('data-statis/data_statis');
});

Route::get('/data-dinamis', function () {
    return view('data-dinamis/data_dinamis');
});


Route::get('/dashbord', function () {
    return view('admin/dashbord/porto');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
