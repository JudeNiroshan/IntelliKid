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

Route::get('unicon_admin_index1', function () {
    return view('unicon_admin.index')->with('title','Dashboard');
});

Route::get('unicon_admin_index', 'Unicode_UserController@trackTotalUsers');


Route::get('unicon_admin_view_users', 'Unicode_UserController@fillUserTable');




/* ////////////////////////  	Admin Routes 	///////////////////////	*/

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



/* ////////////////////////  	Kids Routes 	///////////////////////	*/

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














//Parent Account routes




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




//end of parent Accounts routes









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




