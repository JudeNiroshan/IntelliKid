<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

session_start();

use Illuminate\Support\Facades\Input;


/* ////////////////////////    Admin Routes    /////////////////////// */

//Redirect to Dashboard page 
Route::get('unicon_admin_index', 'Unicode_UserController@trackTotalUsers');

//Redirect to View user page 
Route::get('unicon_admin_view_users', 'Unicode_UserController@fillUserTable');

/* ////////////////////////    END OF Admin Routes    /////////////////////// */





/* ////////////////////////    Kids Routes    /////////////////////// */

//Redirect to quiz page 
Route::get('kids_quiz', 'Kids_QuizController@createQuiz');

//Save exam results to 'exam_result' table
Route::get('answer', 'Kids_QuizController@answer');

//Redirect to certificate page 
Route::get('kids_certificate', 'Kids_QuizController@certificate');

/* ////////////////////////    END OF Kids Routes    /////////////////////// */





/* ////////////////////////    Parent Routes    /////////////////////// */

Route::get('login',function(){
    return view('login');
});

//Redirect to registration page 
Route::get('register',function(){
    return view('registration');
});

//Redirect to parent home
Route::get('home',function(){
    return view('parent.home');
});

//Registering user detils pass to controller  
Route::get('reg','RegistrationController@registration_user');

//Pass login details
Route::get('login_confirm','RegistrationController@login');

//set sesion values and redirect to the email confirmation page
Route::get('session','RegistrationController@setSession');

Route::get('logout', function () {

    session_unset();
    session_destroy();
    return view('login');

});
Route::get('laravel',function(){
    return view('welcome');
});



Route::get('email_verification_notiece', 'EmailController@email_verification_notiece');

Route::get('default_home', function(){

     return view('parent.home');
});


//make visible a email verification message
Route::get('email_verifying_message','EmailController@email_verifying_message');


Route::get('reset_password', function(){

    return view('reset_password_mail');
});

Route::get('reset_password_ajax','RegistrationController@reset_password');

//checking the validity of the reset password URL
Route::get('reset_password_intellikid_2016_encript_version', 'EmailController@emailReset');
Route::get('set_new_password','RegistrationController@set_new_password');

<<<<<<< HEAD



//end of parent Accounts routes

=======
    $id =  $_REQUEST['id'];
   
    $result = DB::select("select a.reset_token from parent_registration a where a.user_id = '$id'");

    DB::table('parent_registration')->where('user_id', $id)->update(array('status' => 'ACTIVE'));
>>>>>>> origin/Main_Branch

//child Account handing



Route::get('new_child',function(){

    return view('parent.create_new_child');
});
Route::get('profile',function(){

    return view('parent.profile.parent_profile');
});




Route::get('veca','ChildController@SendDataToViewAccountPAge');

Route::get('child_edit','ChildController@SendDataToEditChildAccount');
Route::get('new_child_register','ChildController@register_child');
Route::get('child_data_save','ChildController@child_data_save');
Route::get('child_data_delete','ChildController@child_data_delete');

Route::post('upload123', 'RegistrationController@upload');
Route::post('file_upload_parser', 'ChildController@upload2');

Route::post('file_upload_save', 'ChildController@child_data_save');


Route::get('schedule','scheduleController@ViewAllSelectedItems');
Route::get('kid_profile','ChildController@SendDataToSelectedAccount');
Route::get('videos',function(){
    return view('parent.videos.video_category');
});



<<<<<<< HEAD

=======
     $email = $_SESSION['EMAIL'];
     $token = $_REQUEST['token'];
     //$_SESSION['TOKEN'] = "0";
     $result = DB::select("select a.user_id,a.reset_token from parent_registration a where a.email = '$email' ");
>>>>>>> origin/Main_Branch


<<<<<<< HEAD
=======
        return view('login');
     }else{
        $_SESSION['TOKEN'] = $token;
        return view('reset_password');
     }
}); 
>>>>>>> origin/Main_Branch


Route::get('delete_col_v',function(){
    
 $id = $_REQUEST['id'];

<<<<<<< HEAD
 $pid = $_SESSION['USERID'] ;

 DB::statement(DB::raw(
                       "DELETE FROM  collector where pid = '$pid' and item_id = '$id' and type='video'"));  
    
    echo 1;

    
});
Route::get('delete_col_s',function(){
    
 $id = $_REQUEST['id'];
 
 $pid = $_SESSION['USERID'] ;

 DB::statement(DB::raw(
                       "DELETE FROM  collector where pid = '$pid' and item_id = '$id' and type='story'"));  
    

  echo 1;
    
});


Route::get('story_comment',function(){
    
 $id = $_REQUEST['id'];
 $pid = $_SESSION['USERID'];
 $comment = $_REQUEST['comment'];

  DB::statement(DB::raw(
                       "INSERT INTO  comment12(pid,text,item_id,type,date)   values ('$pid','$comment','$id','story',now()) "));  

    echo 1;
    
});
Route::get('video_comment',function(){
    
 $id = $_REQUEST['id'];
 $pid = $_SESSION['USERID'];
 $comment = $_REQUEST['comment'];

  DB::statement(DB::raw(
                       "INSERT INTO  comment12(pid,text,item_id,type,date)   values ('$pid','$comment','$id','video',now()) "));  

    echo 1;
    
});
Route::get('search','ParentVideosContoller@search');


Route::get('serach_all_videos','ParentVideosContoller@view_all_videos');
Route::get('view_videos','ParentVideosContoller@view_video');
Route::get('view_videos_cat','ParentVideosContoller@view_video_cat');




Route::get('all_stories','ParentStoryContoller@all_stories_display');
Route::get('show_story','ParentStoryContoller@show_story');
Route::get('add_to_collector','ParentStoryContoller@add_to_collector');
Route::get('delete_from_collector','ParentStoryContoller@delete_from_collector');

Route::get('delete_from_collector_video','ParentVideosContoller@delete_from_collector_video');
Route::get('add_to_collector_video','ParentVideosContoller@add_to_collector_video');

//end of the child acoount handing
=======
/* ////////////////////////    END OF Parent Routes    /////////////////////// */




/* ////////////////////////     Upload Routes     /////////////////////// */
Route::get('upload_videos', 'UploadVideoController@loadWithDefaultData');

Route::get('upload_videos_fileError', 'UploadVideoController@loadWithFailedReason');

Route::post('upload_videos123', 'BaseUploadController@uploadContent');

Route::get('upload_videos123', 'UploadVideoController@loadWithDefaultData');




Route::get('upload_songs', 'UploadSongController@loadWithDefaultData');

Route::get('upload_songs_fileError', 'UploadSongController@loadWithFailedReason');

Route::post('upload_songs123', 'BaseUploadController@uploadContent');

Route::get('upload_songs123', 'UploadSongController@loadWithDefaultData');
>>>>>>> origin/Main_Branch



Route::get('upload_story', 'UploadStoryController@loadWithDefaultData');

Route::get('upload_story_fileError', 'UploadstoryController@loadWithFailedReason');

Route::post('upload_story123', 'BaseUploadController@uploadContent');

Route::get('upload_story123', 'UploadstoryController@loadWithDefaultData');

Route::get('refresh', 'UploadSongController@loadWithSelectedCrit');




Route::get('upload_question', 'UploadQuestionController@loadWithDefaultData');

Route::post('upload_question123', 'BaseUploadController@uploadContent');

Route::get('test', 'Test@testing');

Route::post('test', 'Test@testing');
/* ---------------------------------------------------------------------*/







/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});




