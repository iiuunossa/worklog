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


Route::post('/worklog','WorklogsController@store');

// Route::post('/worklog', function(Illuminate\Http\Request $request){
//     return $request->all();
// });



// Route::get('/api/title/{topic}/{cat}/{task}', function ($topic,$cat,$task) {
//     return \App\Jobcode::select('cat_id','cat_name','task_id','task_name','title_id as value','title_name as text')
//     ->where('topic_id',$topic)
//     ->where('cat_id',$cat)
//     ->where('task_id',$task)
//     ->distinct()
//     ->get();
// });
Route::get('/api/title/{topic}/{cat}/{task}', 'JobcodesController@Filtertitle');



// Route::get('/api/task/{topic}/{cat}', function ($topic,$cat) {
//     return \App\Jobcode::select('cat_id','cat_name','task_id as value','task_name as text')
//     ->where('topic_id',$topic)
//     ->where('cat_id',$cat)
//     ->distinct()
//     ->get();
// });
Route::get('/api/task/{topic}/{cat}', 'JobcodesController@Filtertask');



// Route::get('/api/cat/{topic}', function ($topic) {
//     return \App\Jobcode::select('cat_id as value','cat_name as text')
//     ->where('topic_id',$topic)
//     ->distinct()
//     ->get();
// });
Route::get('/api/cat/{topic}', 'JobcodesController@Filtercat');



// Route::get('/api/topic', function () {
//     return \App\Jobcode::select('topic_id as value','topic_name as text')
//     ->where ('topic_id', '<>',0)
//     ->distinct()
//     ->get();
   
// });

Route::get('/api/topic', 'JobcodesController@Filtertopic');



Route::get('/loadcsv', function () {
    return view('loadcsv');
});

Route::post('/loadcsv', 'JobcodesController@uploadFile');

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/create', 'JobcodesController@create');

// Route::get('/create', function () {
//     return view('create');
// });


Route::get('/', function () {
    return view('welcome');
});
