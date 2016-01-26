<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App/Http/Controllers/
use DB;

class BaseUploadController extends Controller
{
    public function validator(Request $request){
    	/*print_r($request -> subject);
    	print_r($request -> ageCategory);*/

    	$file = $request->file('videoFile');
    	if ($request->hasFile('videoFile')) {

    		print_r("file uploaded successfully");
            $fileName = $file->getClientOriginalName();
            $fileFormat = $file->getMimeType();
            print_r($fileFormat);



            if(ends_with($fileName, '.mp4')){
                echo "its an mp4 movie";
                $destinationPath = storage_path() . '/uploads';
                print_r($file->getClientOriginalName());  
                $file->move($destinationPath, $file->getClientOriginalName());

                $msg = "File has successfully uploaded";
                $subjects = DB::table('subject')->get();

                $age_groups = DB::table('age_group')->get();
            }

    		

/*            return view('unicon_admin.uploadVideo')
                            ->with('sub',$subjects)
                            ->with('agecat', $age_groups)
                            ->with('title','Dashboard')
                            ->with('msg', $msg);*/
    	}else{
    		//print_r("file is missing");
    		$reason = "File is missing. Please choose a file less than 500MB in size.";
    		
    		$up = new UploadVideoController();
    		return $up->loadWithFailedReason($reason);
    		
    		//return (new UploadVideoController)->loadWithFailedReason($reason);


    		/*$su]bjects = DB::table('subject')->get();

    		$age_groups = DB::table('age_group')->get();

    		return view('unicon_admin.uploadVideo')
    			->with('sub',$subjects)
    			->with('agecat', $age_groups)
    			->with('error', $reason)
    			->with('title','Dashboard');*/

    		
    	}
    	 


    	 
		
    }
}
