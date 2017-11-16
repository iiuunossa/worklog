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
*/

Route::get('/api/cat/{topic}', function ($topic) {
    return \App\Jobcode::select('cat_id','cat_name')
    ->where('topic_id',$topic)->distinct()->get();
});


Route::get('/loadcsv', function () {
    return view('loadcsv');
});

Route::post('/loadcsv', 'JobcodesController@uploadFile');

Route::get('/navbar', function () {
    return view('navbar');
});


Route::get('/create', function () {
    return view('create');
});


Route::get('/', function () {
    return view('welcome');
});
