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



use Illuminate\Support\Facades\Input;



session_start();
/* ////////////////////////    Admin Routes    /////////////////////// */

// redirect tp admin login form 
Route::get('admin_login',function(){
    return view('unicon_admin.login')->with('title','Admin | Login')->with('status',false);
});

// login authentication
Route::post('admin_login_auth', 'Unicode_Login@loginAuthentication');

// logout and redeirect to the login page 
Route::get('admin_logout', 'Unicode_Login@adminLogout');

//Redirect to Dashboard page 
Route::get('unicon_admin_index', 'Unicode_UserController@trackTotalUsers');

//Redirect to View user page 
Route::get('unicon_admin_view_users', 'Unicode_UserController@fillUserTable');

//Redirect to Statistics page 
Route::get('statistics', 'Unicode_StaticController@showStatistics');

//Ajax call to update the Points system
Route::get('updatePoints', 'Unicode_PointsController@updatePointsTable');

//Redirect to article page
Route::get('article', 'Unicode_ArticleController@showArticle');

//Generaate a pdf document
Route::get('pdfConvert', 'Unicode_PdfController@dispalyPdf');

//Redirect to forum page
Route::get('forum', 'Unicode_ForumController@dispalyForum');

//Redirect to forum1 page
Route::get('forum1', 'Unicode_ForumController@dispalyForum1');

//call addcoment from forum1 page to forum controller
Route::post('add_comment', 'Unicode_ForumController@addComment');

//call add post from forum page to forum table
Route::post('add_post', 'Unicode_ForumController@addPost');

//Redirect to forum1 page
Route::get('parent_forum', 'Unicode_ParentForumController@showParentForum');

//ajax call to get article
Route::get('getArticleParent', 'Unicode_ParentForumController@getArticleParent');

//ajax call to get article for admin
Route::get('getArticle1', 'Unicode_ArticleController@getArticle1');

//ajax call to get article for admin
Route::get('deleteArticle', 'Unicode_ArticleController@deleteArticle');

//call addcoment for parent from forum1 page to forum controller
Route::post('add_comment_parent', 'Unicode_ParentForumController@addComment');

//call add parent post from forum1 page to forum controller
Route::post('add_post_parent', 'Unicode_ParentForumController@addParentPost');

//like Admin like a post
Route::get('isAdminLikePost', 'Unicode_ForumController@isAdminLikePost');

//like Admin dislike a post
Route::get('isAdminDisLikePost', 'Unicode_ForumController@isAdminDisLikePost');

//like user dislike a post
Route::get('isUserLikePost', 'Unicode_ParentForumController@isUserLikePost');

//like user dislike a post
Route::get('isUserDisLikePost', 'Unicode_ParentForumController@isUserDisLikePost');

//upload a pdf file
Route::post('upload_article', 'Unicode_ArticleController@uploadArticle');

/* ////////////////////////    END OF Admin Routes    /////////////////////// */





/* ////////////////////////    Kids Routes    /////////////////////// */


/*---------------------------------- Fazeel -------------------------------*/

//Redirect to quiz page 
Route::get('kids_quiz', 'Kids_QuizController@createQuiz');

//Save exam results to 'exam_result' table
Route::get('answer', 'Kids_QuizController@answer');

//get question image
Route::get('getImage', 'Kids_QuizController@getImage');

//Redirect to certificate page 
Route::get('kids_certificate', 'Kids_QuizController@certificate');

//redirect to child login
Route::get('child_login',  function () {
    return view('kids_views.login');
});

//check the authendication
Route::get('login_child', 'ChildController@login_child');

//logout and redirect to child login 
Route::get('child_logout',  function () {
    session_unset();
    session_destroy();
    return view('kids_views.login');
});

Route::get('quiz_page',  'Kids_QuizController@getQuiz');


/*---------------------------------- Fazeel -------------------------------*/

/*---------------------------------- Nibras -------------------------------*/

Route::get('child_login',function(){
    return view('kids_views.login');
});



Route::get('login_child', 'ChildController@login_child');  

Route::get('child_logout',function(){
	session_unset();
	session_destroy();
    return view('kids_views.login');
});


Route::get('events', 'child_controller@viewChildEvents');  



    
Route::get('profile','child_controller@viewChildProfileDetails');   

 


Route::get('playground','child_controller@viewChildHome');




Route::get('todoList', 'todolist_Controller@viewTodoList');

Route::post('addTodoList','todoList_controller@addTodoList');  

Route::get('deleteTodoList','todoList_controller@deleteTodoList'); 

Route::get('findTodoList','todoList_controller@findTodoList');




Route::get('achievment','achievment_controller@loadPoints');

Route::post('points','achievment_controller@viewPoints');




Route::get('videos','videos_controller@loadVideoPage'); 

Route::get('play_btn_update_db_onPlay','videos_controller@updateDb_onPlay'); 

Route::get('play_btn_update_db_onEnd','videos_controller@updateDb_onEnd');

Route::get('like_video','videos_controller@likeVideo');



Route::get('audio','audio_controller@loadAudioPage');

Route::get('audio_play_btn_update_db_onPlay','audio_controller@updateDb_onPlay'); 

Route::get('audio_play_btn_update_db_onEnd','audio_controller@updateDb_onEnd');  

Route::get('like_audio','audio_controller@likeAudio');





Route::get('story','story_controller@loadStoryPage');

Route::get('readStory','story_controller@readStory');

Route::get('like_story','story_controller@likeStory');


/*---------------------------------- Nibras -------------------------------*/




/* ////////////////////////    END OF Kids Routes    /////////////////////// */








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
Route::get('reg','RegistrationController@registrationUser');

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


//////////////////////////// Welcome Page Intellikid\\\\\\\\\\\\\\\\\\\\\\
Route::get('WelcomeIntellikid',function(){
    return view('IntelliKidWelcome');
});
////////////////////////////END\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\



Route::get('email_verification_notiece', 'EmailController@emailVerificationNotiece');
Route::get('default_home', 'RegistrationController@defaultHome');

     


//make visible a email verification message
Route::get('email_verifying_message','EmailController@emailVerifyingMessage');
Route::get('reset_password', function(){

    return view('reset_password_mail');
});

Route::get('reset_password_ajax','RegistrationController@resetPassword');

//checking the validity of the reset password URL
Route::get('reset_password_intellikid_2016_encript_version', 'EmailController@emailReset');
Route::get('set_new_password','RegistrationController@setNewPassword');
Route::get('profile',function(){

    return view('parent.profile.parent_profile');
});

////////////////////////////Parent Accout\\\\\\\\\\\\\\\\\\\\\\
Route::get('veca','ChildController@SendDataToViewAccountPAge');

////////////////////////////END\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::get('Edit_Parent','RegistrationController@EditParent');

//////////////////Parent Child Account\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('new_child',function(){

    return view('parent.create_new_child');
});
Route::get('veca','ChildController@SendDataToViewAccountPAge');
Route::get('child_edit','ChildController@SendDataToEditChildAccount');
Route::get('new_child_register','ChildController@registerChild');
Route::get('child_data_save','ChildController@childDataSave');
Route::get('child_data_delete','ChildController@childDataDelete');
Route::post('upload123', 'RegistrationController@upload');
Route::post('file_upload_parser', 'ChildController@uploadPrifilePicAndAccountData');
Route::post('file_upload_save', 'ChildController@childDataSave');
Route::get('kid_profile','ChildController@SendDataToSelectedAccount');

//test model call

Route::get('test','ChildController@my');

//end of test model call


////////////////////////////Parent schedule\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('schedule','scheduleController@ViewAllSelectedItems');
Route::get('delete_col_v','scheduleController@deleteColV');
Route::get('delete_col_s','scheduleController@deleteColS');
Route::get('delete_col_audio','scheduleController@deleteColAudio');
Route::get('delete_col_quiz','scheduleController@deleteColQuiz');
Route::get('make_schedule','scheduleController@makeSchedule');
Route::get('set_schedule','scheduleController@setSchedule');
Route::get('submit_shedule','scheduleController@submitShedule');
Route::get('past_schedule','scheduleController@pastSchedule');
Route::get('delete_schedule','scheduleController@deleteSchedule');
Route::get('calander_process','scheduleController@calanderProcess');
Route::get('edit_clander_data','scheduleController@editClanderData');
Route::get('set_past_content_as_new','scheduleController@setPastContentAsNew');
Route::get('delete_schedule','scheduleController@deleteSchedule');
Route::get('get_date','scheduleController@getDate');




/////////////////////////comments\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('story_comment','CommentController@storyComment');
Route::get('video_comment','CommentController@videoComment');


////////////////////////////Parent Videos\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('videos',function(){
    return view('parent.videos.video_category');
});
Route::get('serach_all_videos','ParentVideosContoller@viewAllVideos');
Route::get('view_videos','ParentVideosContoller@viewVideo');
Route::get('view_videos_cat','ParentVideosContoller@viewVideoCat');
Route::get('search','ParentVideosContoller@search');
Route::get('search_cat_videos','ParentVideosContoller@searchCatVideos');
Route::get('delete_from_collector_video','ParentVideosContoller@deleteFromCollectorVideo');
Route::get('add_to_collector_video','ParentVideosContoller@addToCollectorVideo');

//////////////////////Parent Story\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('stories',function(){
    return view('parent.story.story_category');
});

Route::get('all_stories','ParentStoryContoller@allStoriesDisplay');
Route::get('show_story','ParentStoryContoller@showStory');
Route::get('add_to_collector','ParentStoryContoller@addToCollector');
Route::get('delete_from_collector','ParentStoryContoller@deleteFromCollector');
Route::get('search_story','ParentStoryContoller@searchStory');
Route::get('view_story_cat','ParentStoryContoller@viewStoryCat');
Route::get('serach_all_stories','ParentStoryContoller@serachAllVideos');
Route::get('search_all_story_box','ParentStoryContoller@searchAllStoryBox');



//////////////////////Parent Songs\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('audio',function(){
    return view('parent.audio.audio_category');
});
Route::get('view_audio_category_albums','ParentAudioController@viewAudioCategoryAlbums');
Route::get('getAudios','ParentAudioController@getAudios');
Route::get('add_or_remove_from_que','ParentAudioController@AddOrRemoveFromQue');
Route::get('search_cat_audios','ParentAudioController@searchCatAudios');
Route::get('getAudiosSearch','ParentAudioController@getAudiosSearch');
Route::get('AllAudiosView','ParentAudioController@AllAudiosView');
Route::get('getAllAudios','ParentAudioController@getAllAudios');
Route::get('getAllAudiosSearch','ParentAudioController@getAllAudiosSearch');
Route::get('search_All_audios','ParentAudioController@searchAllAudios');
Route::get('single_view_song','ParentAudioController@SingleViewOfSong');
Route::get('getSingleAudio','ParentAudioController@getSingleAudio');
///////////////////////////////END\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\



//////////////////////////////Quiz\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('quiz',function(){
    return view('parent.quiz.quiz_category');
});
Route::get('AllQuizView','ParentQuizController@AllQuizView');
Route::get('show_question','ParentQuizController@showQuestion');
Route::get('add_to_collector_quiz','ParentQuizController@addToCollectorQuiz');
Route::get('delete_from_collector_quiz','ParentQuizController@DeleteFromCollectorQuiz');
Route::get('view_quiz_category_albums','ParentQuizController@viewQuizCategoryAlbums');
Route::get('search_quetion_box','ParentQuizController@searchQuetionBox');
Route::get('search_all_quetion_box','ParentQuizController@searchAllQuetionBox');



//////////////////////////////END\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\


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



