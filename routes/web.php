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

Route::get('/', function () {

    $tasks = DB::table('tasks')->latest()->get();

    return view('welcome', compact('tasks'));
});

Route::get('/show', function() {
    return view('show');
});

Route::get('/tasks/{id}', function ($id) {

    $task = DB::table('tasks')->find($id);
    dd($task);
    return view('welcome', compact('tasks'));
});

Route::get('/about', function () {

    return view('about');

});

Route::get('/cars', function() {

    $carList = DB::table('cars')->get();

    //return $carList;

    return view('show', compact('carList'));

});

Route::get('/countries_cc', function() {

    $results = DB::select('select * from countries where currency_code = :cc', ['cc' => 'EUR']);

    return view('countries.cc', compact('results'));

});

Route::get('/tasks', function() {

    //$tasks = DB::table('tasks')->latest()->get();
    $tasks = App\Task::all();    // Eloquent method

    return view('tasks.index', compact('tasks'));

    //return view('welcome');

});

// Country_info table manipulation
Route::get('/countries', function() {

    $countries = DB::table('countries')->distinct()->get(['country', 'iso3']);

    return view('countries.show', compact('countries'));

});
