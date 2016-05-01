<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;



class todolist_Controller extends Controller
{

/**
*	@author: Nibras
*	@param: none
*
*	desc: fetch the date from todo_list table and display it in page with sorted order
*
*	created : 30/01/2016
*/

	public function viewTodoList()     //load the todolist page with child name and existing todo's
	{
		
		$child_results = DB::table('user')->join('child','user.id','=','child.id')
										  ->where('user.id','=',$_SESSION['child_id'])->first();   //child details
		
		$todoLists = DB::table('todo_list')->where('child_id','=',$_SESSION['child_id'])->orderBy('created_date', 'desc')->get();    //existing todo's of child

		return view('kids_views.todoList')->with('title','To Do List')
										  ->with('todo_create_status',false)
										 ->with('todo_detete_status',false)
										  ->with('child',$child_results)
										  ->with('todoLists',$todoLists);

	}


/**
*	@author: Nibras
*	@param: post request
*
*	desc: add the newly created todo to todo_list table and load the todolist page
*
*	created : 30/01/2016
*/

	public function addTodoList(Request $request)
	{
		
		$child_results = DB::table('user')->join('child','user.id','=','child.id')
										  ->where('user.id','=',$_SESSION['child_id'])->first();   //child details

		$todo = $request->input('textArea_content');   //get the contents of textArea

		$todo_date = $request->input('date');

		$newformat = date('Y-m-d',strtotime($todo_date));

//		$validate = Validator::make(input :: all(), array('date' => 'required | date | after | today' ));
			
		$id = DB::table('todo_list')->insertGetId(array('child_id' => $_SESSION['child_id'], 'created_date'=>date("Y/m/d h:i:s"), 'todo_date'=>$newformat, 'content'=>$todo)); //add new todo

		$todoLists = DB::table('todo_list')->where('child_id','=',$_SESSION['child_id'])->orderBy('todo_date', 'asc')->get();    //existing todo's of child

		return view('kids_views.todoList')->with('title','To Do List')
										 ->with('todo_create_status',true)
										 ->with('todo_detete_status',false)
										 ->with('child',$child_results)
										 ->with('todoLists',$todoLists);


	}

/**
*	@author: Nibras
*	@param: post request
*
*	desc: delete the selected todo and load the todolist page
*
*	created : 31/01/2016
*/

	public function deleteTodoList(Request $request)
	{
		

		$id = $request->input('id');

		DB::table('todo_list')->where('id', '=', $id)->delete();

		$child_results = DB::table('user')->join('child','user.id','=','child.id')
										  ->where('user.id','=',$_SESSION['child_id'])->first();   //child details

		$todoLists = DB::table('todo_list')->where('child_id','=',$_SESSION['child_id'])->orderBy('todo_date', 'asc')->get();    //existing todo's of child

		return view('kids_views.todoList')->with('title','To Do List')
										  ->with('todo_create_status',false)
										  ->with('todo_detete_status',true)
										 ->with('child',$child_results)
										 ->with('todoLists',$todoLists);
	}



	


}