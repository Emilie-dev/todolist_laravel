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



// Route for display all tasks
/*
Route::get('/addTask', function(){
	return view('addTask');
});
*/
Route::get('/addTask', 'Tasks@getAllTasks');


// Route for add a task
Route::post('/addTask', 'Tasks@addTasks');