<?php

namespace App\Classes\schedule;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\UploadVideoController;
use App\Classes\validators\ContentValidator;
use App\Classes\validators\VideoValidator;
use App\Classes\common\UploadConstants;
use DB;

/**
* @author : Achala Dias
* @desc : Implementations for uploading videos to the system
* @created : 22/02/2016
*/

class ScheduleValidations {
	
	

    public function audioAddRemoveChecker($id){


          $audio_item_que = array();
          $audio_item_que = $_SESSION['audio_que'];

          if(in_array($id, $audio_item_que)){

           if (($key = array_search($id, $audio_item_que)) != false) {
                  unset($audio_item_que[$key]);
                  }

            
            $_SESSION['audio_que'] = $audio_item_que;
            return 2001;

          }
          else{

                array_push($audio_item_que , $id);
                $_SESSION['audio_que'] = $audio_item_que;
                return 200;   

          }
    }


 }