<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classes\common\FactoryProducer;

//use App\Http\Controllers\com\intellikid\upload\common\UploadUtils;

use DB;

class BaseUploadController extends Controller
{




    public function uploadContent(Request $request){

        //Get the AbstractFactory
        $Factory = FactoryProducer::getFactory("upload");

        
        if ($request->hasFile('videoFile')) {
             
            //Get the Uploader
            $uploader = $Factory->getUploader("video");

            //Dynamic Uploader; uploading...
            return $uploader->upload($request);


        }else if($request->hasFile('songFile')){

            //Get the Uploader
            $uploader = $Factory->getUploader("song");

            //Dynamic Uploader; uploading...
            return $uploader->upload($request);

            
        }else if($request->has('story')){

            //Get the Uploader
            $uploader = $Factory->getUploader("story");

            //Dynamic Uploader; uploading...
            return $uploader->upload($request);

        }else if($request->has('question')){

            //Get the Uploader
            $uploader = $Factory->getUploader("question");

            //Dynamic Uploader; uploading...
            return $uploader->upload($request);


        }else{

            		/*$reason1 = new UploadVideoUtils();
                    $reason = $reason1->G_FAIL_FILE_NOT_FOUND;*/

                    $reason = "File is missing. Please choose a file less than 500MB in size.";
                    return UploadVideoController::loadWithFailedReason($reason);

        }





    }
}
