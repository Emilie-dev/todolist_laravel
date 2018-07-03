<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Validator;

class Tasks extends Controller
{
    public function createTasks(){

    	// $tasks = Task::all();
    	return view ('/addTask');
    }

    public function getAllTasks() {

    	$tasks = Task::all();

    	return view('/addTask', [
    		'tasks'=>$tasks
    	]);
    }



    public function addTasks (Request $request) {

  //   	$validator = Validator::make($request->all(), [
  //   		'quantity' => 'required',
  //   		'desciption' => 'required|max:255',
		// ]);

  //   	if($validator->fails()) {
  //   		return redirect('/addTask')
  //   		->withInput()
  //   		->withErrors($validator);
  //   	}

    	$task = new Task;
    	$task->quantity = $request->addQuantity;
    	$task->desciption = $request->addDesciption;
    	$task->save();

    	return redirect('/addTask');

    }

    public function updateTask ( Request $request, $id) {

    	$task = Task::find($id);
    	$task->quantity = $request->quantity;
    	$task->desciption = $request->desciption;
    	$task->created_at = $request->created_at;
    	$task->updated_at = $request->updated_at;
    	$task->save();
    	return view('/addTask');
    }

    public function deleteTask ( Request $request, $id) {

      $task = Task::find($id);
      $task->quantity = $request->quantity;
      $task->desciption = $request->desciption;
      $task->created_at = $request->created_at;
      $task->updated_at = $request->updated_at;
      $task->delete();
      return redirect('/addTask');
    }
}