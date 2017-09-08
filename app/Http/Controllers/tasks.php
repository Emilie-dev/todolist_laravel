<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Validator;

class tasks extends Controller
{
    public function createTasks(){

    	return view ('/addTask');
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
}
