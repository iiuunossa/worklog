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


Route::get('/api/title/{topic}/{cat}/{task}', function ($topic,$cat,$task) {
    return \App\Jobcode::select('cat_id','cat_name','task_id','task_name','title_id as value','title_name as text')
    ->where('topic_id',$topic)
    ->where('cat_id',$cat)
    ->where('task_id',$task)
    ->distinct()
    ->get();
});



Route::get('/api/task/{topic}/{cat}', function ($topic,$cat) {
    return \App\Jobcode::select('cat_id','cat_name','task_id as value','task_name as text')
    ->where('topic_id',$topic)
    ->where('cat_id',$cat)
    ->distinct()
    ->get();
});


Route::get('/api/topic', function () {
    return \App\Jobcode::select('topic_id as value','topic_name as text')
    ->where ('topic_id', '<>',0)
    ->distinct()
    ->get();
   
});


Route::get('/api/cat/{topic}', function ($topic) {
    return \App\Jobcode::select('cat_id as value','cat_name as text')
    ->where('topic_id',$topic)
    ->distinct()
    ->get();
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
