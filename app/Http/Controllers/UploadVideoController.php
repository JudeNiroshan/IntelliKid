<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;



class UploadVideoController extends Controller
{


    public function loadWithDefaultData(){
    	$subjects = DB::table('subject')->get();

    	$age_groups = DB::table('age_group')->get();

    	return view('unicon_admin.uploadVideo')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('title','Dashboard');
    }

    public function loadWithFailedReason($fail_reason){


    	$subjects = DB::table('subject')->get();

    	$age_groups = DB::table('age_group')->get();


		return view('unicon_admin.uploadVideo')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('error', $fail_reason)
    			->with('title','Dashboard');	
    	/*return view('unicon_admin.uploadVideo')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('error', $fail_reason)
    			->with('title','Dashboard');*/

    			/*return view('unicon_admin.uploadVideo')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('error', $reason)
    			->with('title','Dashboard');*/
    }
}