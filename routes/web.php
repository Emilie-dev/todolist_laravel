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



// Display all tasks
/*
Route::get('/addTask', function(){
	return view('addTask');
});
*/

// Display all tasks
Route::get('/addTask', 'Tasks@getAllTasks');


// Add a task
Route::post('/addTask', 'Tasks@addTasks');

// Delete a task
Route::delete('/deleteTask/{id}', 'Tasks@deleteTask');

// Edit a task
Route::post('/updateTask', 'Tasks@updateTask');