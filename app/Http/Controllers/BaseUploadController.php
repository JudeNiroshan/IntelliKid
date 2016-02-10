<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classes\UploadVideoUtils;

use DB;

class BaseUploadController extends Controller
{
    public function validator(Request $request){


        $selected_subject = $request->input('subject');
        $selected_age = $request->input('ageCategory');
        $valid_img_extensions = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
        $valid_video_extensions = array("mp4", "MP4", "ogg", "OGG", "webm", "WEBM");
        $valid_audio_extensions = array("mp3", "MP3", "wav", "WAV", "ogg", "OGG");
    	
    	if ($request->hasFile('videoFile')) {

            $file = $request->file('videoFile');
            $img_file = $request->file('videoImageFile');

            //print_r($img_file);
            $ext_video = explode('.', $file->getClientOriginalName());//explode file name from dot(.)
            $video_extension = end($ext_video); //store extensions in the variable

            if(in_array($video_extension, $valid_video_extensions)){
             $user_id = 100;
             $name = $request->filename;
             try{

             }catch(Exception $e){

             }

             $path_list_for_name = DB::table('video')->select('path')->where('name', '=', $name)->get();

             foreach ($path_list_for_name as $row) {
                $path_for_name = $row->path;
                print_r($path_for_name);
                    $destinationPath = public_path() . "\assets\uploads\\video\\";// 
                    print_r($file->getClientOriginalName());
                    if($destinationPath. $file->getClientOriginalName() == $path_for_name){

                        $reason = "File already exists";
                        return UploadVideoController::loadWithFailedReason($reason);

                    }
                }

                
                $ext = explode('.', $img_file->getClientOriginalName());//explode file name from dot(.) 
                $img_extension = end($ext); //store extensions in the variable
                $img_file_path = '';
                
                

                if(in_array($img_extension, $valid_img_extensions)){
                    $img_file_path = public_path() . "\assets\uploads\\video\img\\";
                    $img_file->move($img_file_path, $img_file->getClientOriginalName());
                }else{
                    $reason = "Invalid image format. Please use only .jpeg/.jpg/.png";
                    return UploadVideoController::loadWithFailedReason($reason);
                }

                        $destinationPath = public_path() . "\assets\uploads\\video\\";

                        $temp_id = DB::table('content_type')->select('id')->where('type', '=', 'video')->get();
                        $content_type_id = $temp_id[0]->id;
                        $timestamp = date('y-m-d H:i:s');
                        $content_id = DB::table('content')->insertGetId(array('contenttypeid' => $content_type_id, 'creator' => $user_id, 'datetime' => $timestamp)); 
                        $file->move($destinationPath, $file->getClientOriginalName());

                        DB::table('video')->insert(
                            array(
                                'contentid' => $content_id, 
                                'name' => $name,
                                'path' => $destinationPath. $file->getClientOriginalName(),
                                'img_path' => $img_file_path. $img_file->getClientOriginalName(),
                                'format' => $video_extension,
                                'subjectid' => $selected_subject,
                                'agegroupid' => $selected_age,
                                'length' => '15:03',
                                'size' => 2546.25,
                                'likes' => 1,
                                'totalviews' => 1,
                                'active' => 1
                                ));              

                        $msg = "File has successfully uploaded";

                        $subjects = DB::table('subject')->get();
                        $age_groups = DB::table('age_group')->get();
                        $path_list_for_name = DB::table('video')->where('active', '=', '1')->get();
                        $videos = array();
                        foreach ($path_list_for_name as $row) {
                            $video_tile_obj = array('name' => $row->name,
                                'path' => strstr($row->path, 'assets'),
                                'img_path' => strstr($row->img_path, 'assets'),
                                'length' => $row->length );

                            array_push($videos, $video_tile_obj);
                        }

                        return view('unicon_admin.uploadVideo')
                        ->with('sub',$subjects)
                        ->with('agecat', $age_groups)
                        ->with('title','Dashboard')
                        ->with('msg', $msg)
                        ->with('gallery_data', $videos);

                    }else{               
                        $reason = "Invalid video file format. Please use only .mp4/.ogg/.webm";
                        return UploadVideoController::loadWithFailedReason($reason);
                    }

        }else if($request->hasFile('songFile')){

            $file = $request->file('songFile');
            $img_file = $request->file('songImageFile');

            $ext_song = explode('.', $file->getClientOriginalName());//explode file name from dot(.)
            $song_extension = end($ext_song); //store extensions in the variable


            $fileName = $file->getClientOriginalName();
            $fileFormat = $file->getMimeType();
           // print_r($fileFormat);

            if(!$request->file('songImageFile')){
                $reason = "Please choose an image file";
                return UploadSongController::loadWithFailedReason($reason);
            }

            if(in_array($song_extension, $valid_audio_extensions)){
             $user_id = 100;
             $name = $request->filename;
             try{

             }catch(Exception $e){

             }

             $path_list_for_name = DB::table('audio')->select('path')->where('name', '=', $name)->get();

             foreach ($path_list_for_name as $row) {
                $path_for_name = $row->path;
                print_r($path_for_name);
                    $destinationPath = public_path() . "\assets\uploads\audio\\";// 

                    if($destinationPath. str_replace(' ', '_', $file->getClientOriginalName()) == $path_for_name){

                        $reason = "File already exists";
                        return UploadSongController::loadWithFailedReason($reason);

                    }
                }

             $ext = explode('.', $img_file->getClientOriginalName());//explode file name from dot(.) 
             $img_extension = end($ext); //store extensions in the variable
             $img_file_path = '';

             if(in_array($img_extension, $valid_img_extensions)){
                    $img_file_path = public_path() . "\assets\uploads\\audio\img\\";
                    $img_file->move($img_file_path, str_replace(' ', '_', $img_file->getClientOriginalName()));
             }else{
                    $reason = "Invalid image format. Please use only .jpeg/.jpg/.png";
                    return UploadVideoController::loadWithFailedReason($reason);
             }

                        $destinationPath = public_path() . "\assets\uploads\audio\\";
                        $temp_id = DB::table('content_type')->select('id')->where('type', '=', 'audio')->get();
                        $content_type_id = $temp_id[0]->id;
                        $timestamp = date('y-m-d H:i:s');
                        $content_id = DB::table('content')->insertGetId(array('contenttypeid' => $content_type_id, 'creator' => $user_id, 'datetime' => $timestamp));
  
                        $file->move($destinationPath, str_replace(' ', '_', $file->getClientOriginalName()));

                        DB::table('audio')->insert(
                            array(
                                'contentid' => $content_id, 
                                'name' => $name,
                                'path' => $destinationPath. str_replace(' ', '_', $file->getClientOriginalName()),
                                'img_path' => $img_file_path. str_replace(' ', '_', $img_file->getClientOriginalName()),
                                'format' => $song_extension,
                                'subjectid' => $selected_subject,
                                'agegroupid' => $selected_age,
                                'length' => '15:03',
                                'size' => 2546.25,
                                'likes' => 1,
                                'totalviews' => 1,
                                'active' => 1
                                ));              

                        $msg = "File has successfully uploaded";

                        $subjects = DB::table('subject')->get();

                        $age_groups = DB::table('age_group')->get();

                        $path_list_for_name = DB::table('audio')->where('active', '=', '1')->get();
                        $songs = array();
                        foreach ($path_list_for_name as $row) {
                            $song_tile_obj = array('name' => $row->name,
                                'path' => strstr($row->path, 'assets'),
                                'img_path' => strstr($row->img_path, 'assets'),
                                'length' => $row->length );

                            array_push($songs, $song_tile_obj);
                        }


                        return view('unicon_admin.uploadAudio')
                        ->with('sub',$subjects)
                        ->with('agecat', $age_groups)
                        ->with('title','Dashboard')
                        ->with('msg', $msg)
                        ->with('gallery_data', $songs);

                    }else{
               

                $reason = "Invalid file format. Please use only .mp3/.ogg/.wav";
                return UploadSongController::loadWithFailedReason($reason);

            }
        }else if($request->has('story')){

            /************ STORIES ************/

            echo count($_FILES['file']['name']);
            $target_path = public_path() . "\assets\uploads\stry\Img\\"; //Declaring Path for uploaded images
            $j = 0; //Variable for indexing uploaded image 
            $user_id = 100;
            $name = $request->input('fileName');
            $story = $request->input('story');
            $unique_img_path_arr = array();

            for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
                $validextensions = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
                $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
                $file_extension = end($ext); //store extensions in the variable

                print_r($ext[0]);
                $new_img_name = $target_path . $name . md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
                $j = $j + 1;//increment the number of uploaded images according to the files in array       

                if (($_FILES["file"]["size"][$i] < 10000000) //Approx. 10MB files can be uploaded.
                    && in_array($file_extension, $validextensions)) {
                    if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $new_img_name)) {//if file moved to uploads folder

                        echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
                       
                        
                        array_push($unique_img_path_arr, $new_img_name);

                    } else {//if file was not moved.




                        echo $j. ').<span id="error">please try again!.</span><br/><br/>';
                    }
                } else {//if file size and file type was incorrect.



                    echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
                }

            }// End of for loop for multiple images

            if(count($unique_img_path_arr) > 0){

                    $path_list_for_name = DB::table('story')->select('path')->where('name', '=', $name)->get();
                    $destinationPath = public_path() . "\assets\uploads\stry\\";

                    foreach ($path_list_for_name as $row) {
                        $path_for_name = $row->path;
                        print_r($path_for_name);
                        $destinationPath = public_path() . "\assets\uploads\stry\\";// 

                        if($destinationPath.$name.'.txt' == $path_for_name){

                            $reason = "File already exists";
                            // CHANGE TO STORY CONTROLLER
                            return UploadSongController::loadWithFailedReason($reason);

                        }
                    }

                    $outWriteFile = UploadStoryController::writeToFile($name, $story);

                    $temp_id = DB::table('content_type')->select('id')->where('type', '=', 'story')->get();
                    $content_type_id = $temp_id[0]->id;
                    $timestamp = date('y-m-d H:i:s');                 
                    $content_id = DB::table('content')->insertGetId(array('contenttypeid' => $content_type_id, 'creator' => $user_id, 'datetime' => $timestamp));

                    $story_id = DB::table('story')->insertGetId(
                        array(
                            'contentid' => $content_id, 
                            'name' => $name,
                            'path' => $destinationPath. $name.'.txt',
                            'subjectid' => $selected_subject,
                            'agegroupid' => $selected_age,
                            'likes' => 0,
                            'totalviews' => 0,
                            'active' => 1
                            )); 

                    foreach ($unique_img_path_arr as $value) {

                        DB::table('story_image')->insert(
                        array(
                            'storyid' => $story_id, 
                            'path' => $value,

                            )); 
                    }
                    
                }



            /*$file = $request->file('storyImgFile');
            
            echo("story ==== ".$request->input('story'));
            $fileName = $file->getClientOriginalName();
            $fileFormat = $file->getMimeType();
           // print_r($fileFormat);

            if(!$request->file('storyImgFile')){
                $reason = "Please choose an image file";
                return UploadSongController::loadWithFailedReason($reason);
            }

            if(ends_with($fileName, '.jpg') || ends_with($fileName, '.JPG') || ends_with($fileName, '.jpeg') || ends_with($fileName, '.JPEG') || ends_with($fileName, '.png')){
             $user_id = 100;
             
             try{

             }catch(Exception $e){

             }

             

             
                        

                        $temp_id = DB::table('content_type')->select('id')->where('type', '=', 'audio')->get();

                        $content_type_id = $temp_id[0]->id;

                        $timestamp = date('y-m-d H:i:s');
                        
                        $content_id = DB::table('content')->insertGetId(array('contenttypeid' => $content_type_id, 'creator' => $user_id, 'datetime' => $timestamp));

                        

                        print_r($outWriteFile);
                        //print_r($file->getClientOriginalName());  
                        $file->move($destinationPath, $file->getClientOriginalName());


                        $story_id = DB::table('story')->insertGetId(
                            array(
                                'contentid' => $content_id, 
                                'name' => $name,
                                'path' => $destinationPath. $name.'.txt',
                                'subjectid' => '1',
                                'agegroupid' => '1',
                                'likes' => 1,
                                'totalviews' => 1,
                                'active' => 1
                                ));              

                        DB::table('story_image')->insert(
                            array(
                                'storyid' => $story_id, 
                                'path' => $destinationPath. $file->getClientOriginalName(),
                                
                                ));   




                        $msg = "Story has successfully added";

                        $subjects = DB::table('subject')->get();

                        $age_groups = DB::table('age_group')->get();

                        $path_list_for_name = DB::table('story')->where('active', '=', '1')->get();
                        $songs = array();
                        foreach ($path_list_for_name as $row) {
                            $song_tile_obj = array('name' => $row->name,
                                'path' => strstr($row->path, 'assets')
                                );

                            array_push($songs, $song_tile_obj);
                        }


                        return view('unicon_admin.uploadStory')
                        ->with('sub',$subjects)
                        ->with('agecat', $age_groups)
                        ->with('title','Dashboard')
                        ->with('msg', $msg)
                        ->with('gallery_data', $songs);

                    }else{
                /*$reason = UploadVideoUtils::$G_FAIL_INVL_FORMAT;
                return UploadVideoController::loadWithFailedReason($reason);

                $reason = "Invalid file format. Please use only .jpg/.jpeg/.png image files";
                return UploadSongController::loadWithFailedReason($reason);
*/
            //}


        }else{

    		/*$reason1 = new UploadVideoUtils();
            $reason = $reason1->G_FAIL_FILE_NOT_FOUND;*/

            $reason = "File is missing. Please choose a file less than 500MB in size.";
            return UploadVideoController::loadWithFailedReason($reason);

        }





    }
}
