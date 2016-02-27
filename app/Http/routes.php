<?php


session_start();

use Illuminate\Support\Facades\Input;
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
/* ////////////////////////     unicon_Admin Routes    /////////////////////// */
//admin login
Route::get('admin_login',function(){
    return view('unicon_admin.login')->with('title','Admin | Login');
});

Route::get('unicon_admin_index1', function () {
    return view('unicon_admin.index')->with('title','Dashboard');
});

Route::get('unicon_admin_index', 'Unicode_UserController@trackTotalUsers');


Route::get('unicon_admin_view_users', 'Unicode_UserController@fillUserTable');




/* ////////////////////////     Admin Routes    /////////////////////// */

Route::get('/', function () {
    return view('welcome');
});

Route::get('uni_index', function () {
    return view('adminPage.uni_index');
});

Route::get('tables', function () {
    return view('adminPanel.tables');
});

Route::get('forms', function () {
    return view('adminPanel.forms');
});

Route::get('charts', function () {
    return view('adminPanel.charts');
});

Route::get('grid', function () {
    return view('adminPanel.bootstrap-grid');
});

Route::get('elements', function () {
    return view('adminPanel.bootstrap-elements');
});

Route::get('blank', function () {
    return view('adminPanel.blank-page');
});

Route::get('index-rtl', function () {
    return view('adminPanel.index-rtl');
});

/* ---------------------------------------------------------------------*/

/* ////////////////////////     Unicon Admin Routes    /////////////////////// */

Route::get('unicon_index', function () {
    return view('adminPage.index');
});

Route::get('unicon_index_2', function () {
    return view('adminPage.index-2');
});

Route::get('unicon_button', function () {
    return view('adminPage.buttons');
});

Route::get('unicon_charts', function () {
    return view('adminPage.charts');
});

Route::get('unicon_calendar', function () {
    return view('adminPage.calendar');
});

Route::get('unicon_chat', function () {
    return view('adminPage.chat');
});

Route::get('unicon_form_common', function () {
    return view('adminPage.form-common');
});

Route::get('unicon_validation', function () {
    return view('adminPage.form-validation');
});

Route::get('unicon_wizard', function () {
    return view('adminPage.form-wizard');
});

Route::get('unicon_gallery', function () {
    return view('adminPage.gallery');
});

Route::get('unicon_grid', function () {
    return view('adminPage.grid');
});

Route::get('unicon_interface', function () {
    return view('adminPage.interface');
});

Route::get('unicon_invoice', function () {
    return view('adminPage.invoice');
});

Route::get('unicon_jquery_ui', function () {
    return view('adminPage.jquery-ui');
});

Route::get('unicon_login', function () {
    return view('adminPage.login');
});

Route::get('unicon_message', function () {
    return view('adminPage.message');
});

Route::get('unicon_tables', function () {
    return view('adminPage.tables');
});

Route::get('unicon_widgets', function () {
    return view('adminPage.widgets');
});

/* ---------------------------------------------------------------------*/



/* ////////////////////////     Kids Routes     /////////////////////// */

Route::get('kids_index', function () {
    return view('kidsPages.index');
});

Route::get('kids_about', function () {
    return view('kidsPages.about');
});

Route::get('kids_events', function () {
    return view('kidsPages.events');
});

Route::get('kids_gallery', function () {
    return view('kidsPages.gallery');
});
/* ---------------------------------------------------------------------*/



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

Route::get('child_login',  function () {
    return view('kids_views.login');
});
Route::get('login_child', 'ChildController@login_child');



////////////////end\\\\\\\\\\\\\\\\\\\\\\\\\\\\







//////////////Parent Accounts\\\\\\\\\\\\\\\\\\\

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
Route::get('profile',function(){

    return view('parent.profile.parent_profile');
});



//////////////////Parent Child Account\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('new_child',function(){

    return view('parent.create_new_child');
});
Route::get('veca','ChildController@SendDataToViewAccountPAge');
Route::get('child_edit','ChildController@SendDataToEditChildAccount');
Route::get('new_child_register','ChildController@register_child');
Route::get('child_data_save','ChildController@child_data_save');
Route::get('child_data_delete','ChildController@child_data_delete');
Route::post('upload123', 'RegistrationController@upload');
Route::post('file_upload_parser', 'ChildController@upload_prifile_pic_and_account_data');
Route::post('file_upload_save', 'ChildController@child_data_save');
Route::get('kid_profile','ChildController@SendDataToSelectedAccount');

//test model call

Route::get('test','ChildController@my');

//end of test model call


////////////////////////////Parent schedule\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('schedule','scheduleController@ViewAllSelectedItems');
Route::get('delete_col_v','scheduleController@delete_col_v');
Route::get('delete_col_s','scheduleController@delete_col_s');
Route::get('make_schedule','scheduleController@make_schedule');
Route::get('set_schedule','scheduleController@set_schedule');
Route::get('submit_shedule','scheduleController@submit_shedule');
Route::get('past_schedule','scheduleController@past_schedule');
Route::get('delete_schedule','scheduleController@delete_schedule');
Route::get('calander_process','scheduleController@calander_process');
Route::get('edit_clander_data','scheduleController@edit_clander_data');
Route::get('set_past_content_as_new','scheduleController@set_past_content_as_new');


/////////////////////////comments\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('story_comment','CommentController@story_comment');
Route::get('video_comment','CommentController@video_comment');


////////////////////////////Parent Videos\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('videos',function(){
    return view('parent.videos.video_category');
});
Route::get('serach_all_videos','ParentVideosContoller@view_all_videos');
Route::get('view_videos','ParentVideosContoller@view_video');
Route::get('view_videos_cat','ParentVideosContoller@view_video_cat');
Route::get('search','ParentVideosContoller@search');
Route::get('search_cat_videos','ParentVideosContoller@search_cat_videos');
Route::get('delete_from_collector_video','ParentVideosContoller@delete_from_collector_video');
Route::get('add_to_collector_video','ParentVideosContoller@add_to_collector_video');

//////////////////////Parent Story\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('stories',function(){
    return view('parent.story.story_category');
});

Route::get('all_stories','ParentStoryContoller@all_stories_display');
Route::get('show_story','ParentStoryContoller@show_story');
Route::get('add_to_collector','ParentStoryContoller@add_to_collector');
Route::get('delete_from_collector','ParentStoryContoller@delete_from_collector');
Route::get('search_story','ParentStoryContoller@search_story');
Route::get('view_story_cat','ParentStoryContoller@view_story_cat');
Route::get('serach_all_stories','ParentStoryContoller@serach_all_videos');
Route::get('search_all_story_box','ParentStoryContoller@search_all_story_box');

///////////////////////////////END\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\




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
Route::get('test', 'Test@testing');
Route::post('test', 'Test@testing');
/* ---------------------------------------------------------------------*/


Route::get('ah', 'Test@r1');
Route::get('ah1', 'Test@r2');



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




