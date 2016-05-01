<?php

namespace App\Http\Controllers;


use DB;

class child_controller extends Controller
{

/**
*	@author: Nibras
*	@param: none
*
*	desc: fetch the data from user and child table, display child details in profile page
*
*	@created : 20/01/2016
*/	

	public function viewChildProfileDetails()
	{


		$child_results = DB::table('user')->join('child','user.id','=','child.id')->where('child.id','=',$_SESSION['child_id'])->first();

		$get_pid = DB::table('child')->where('id','=',$_SESSION['child_id'])->pluck('parent_id');
		
		$parent_results = DB::table('user')->where('id','=',$get_pid)->first();

		return view('kids_views.profile')->with('title','My Profile')
										 ->with('child',$child_results)
										 ->with('parent',$parent_results);


	}

	public function viewChildHome()
	{
		

		$child_results = DB::table('user')->join('child','user.id','=','child.id')
										  ->where('child.id','=',$_SESSION['child_id'])->first();
		
		

		return view('kids_views.playground')->with('title','Playground')
										 ->with('child',$child_results);
										 


	}

	public function viewChildEvents()
	{


		$child_results = DB::table('user')->join('child','user.id','=','child.id')->where('child.id','=',$_SESSION['child_id'])->first();
		
		

		return view('kids_views.Events')->with('title','Events')
										 ->with('child',$child_results);
										 


	}


}
