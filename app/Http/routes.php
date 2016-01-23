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
