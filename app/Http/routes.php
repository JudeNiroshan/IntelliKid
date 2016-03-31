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
Route::get('session',function(){
         
         $id = $_REQUEST['id'];

          $result = DB::select("select * from parent_registration a where a.user_id = '$id'");

          $_SESSION['USERID'] = $id;
          $_SESSION['STATUS'] = $result[0]->status;
          $_SESSION['NAME']   = $result[0]->f_name;
          $_SESSION['EMAIL']  = $result[0]->email;

          return view('parent.home');

});

Route::get('logout', function () {

    session_unset();
    session_destroy();
    return view('login');

});
Route::get('laravel',function(){
    return view('welcome');
});



Route::get('email_verification_notiece', function(){
   

    Mail::send('email_body',['name'=> $_SESSION['NAME'],'id'=> $_SESSION['USERID']], function($message){

        $message->to($_SESSION['EMAIL'],'IntelliKid')->subject('Welcome to IntelliKid!');
    });

    return view('email_verify_notice');
});


Route::get('default_home', function(){

     return view('parent.home');
});


//make visible a email verification message
Route::get('email_verifying_message', function(){

    $id =  $_REQUEST['id'];
   
    $result = DB::select("select a.reset_token from parent_registration a where a.user_id = '$id'");

    DB::table('parent_registration')->where('user_id', $id)->update(array('status' => 'ACTIVE'));

    $result = DB::select("select * from parent_registration a where a.user_id = '$id'");
    $_SESSION['STATUS'] = $result[0]->status;


    return view('parent.home');

});


Route::get('reset_password', function(){

    return view('reset_password_mail');
});

Route::get('reset_password_ajax','RegistrationController@reset_password');

//checking the validity of the reset password URL
Route::get('reset_password_intellikid_2016_encript_version', function(){

     $email = $_SESSION['EMAIL'];
     $token = $_REQUEST['token'];
     //$_SESSION['TOKEN'] = "0";
     $result = DB::select("select a.user_id,a.reset_token from parent_registration a where a.email = '$email' ");

     if($token == $result[0]->reset_token){

        return view('login');
     }else{
        $_SESSION['TOKEN'] = $token;
        return view('reset_password');
     }
}); 

//update new reseted password
Route::get('set_new_password','RegistrationController@set_new_password');


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



Route::get('upload_story', 'UploadStoryController@loadWithDefaultData');

Route::get('upload_story_fileError', 'UploadstoryController@loadWithFailedReason');

Route::post('upload_story123', 'BaseUploadController@uploadContent');

Route::get('upload_story123', 'UploadstoryController@loadWithDefaultData');

Route::get('refresh', 'UploadSongController@loadWithSelectedCrit');




Route::get('upload_question', 'UploadQuestionController@loadWithDefaultData');

Route::post('upload_question123', 'BaseUploadController@uploadContent');

Route::get('upload_remove_question', 'UploadQuestionController@deleteQuestion');

Route::get('upload_load_edit_question', 'UploadQuestionController@loadQuestionForEditing');



Route::get('upload_load_edit_video', 'UploadVideoController@loadVideoForEditing');

Route::post('upload_save_edit_video', 'UploadVideoController@saveVideoEdits');



Route::post('upload_save_edit_question', 'UploadQuestionController@saveQuestionEdits');

Route::get('upload_remove_video', 'UploadVideoController@deleteVideo');

Route::get('upload_remove_story', 'UploadStoryController@deleteStory');

Route::get('upload_load_edit_story', 'UploadStoryController@loadStoryForEditing');

Route::post('upload_save_edit_story', 'UploadStoryController@saveStoryEdits');


Route::get('create_exam', 'CreateExamController@loadWithDefaultData');

Route::get('load_questions', 'CreateExamController@loadQuestionsForUI');

Route::get('put_to_session', 'CreateExamController@addToSession');

Route::post('put_to_session', 'CreateExamController@createExam');

/*Route::get('test', function(){

     return view('unicon_admin.test');
    });*/

Route::get('test', 'Test@testing');
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




