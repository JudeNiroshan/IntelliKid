<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Session;
use Illuminate\Http\Request;

class Unicode_ForumController extends Controller{
	 

	/**
	*@author: fazeel
	*@desc:	dispalyForum() will triger when first time load the forum page by admin.
	*		Get the forum details by joining 'forum' and 'user' table 
	*@created: 14/02/16
	*/
	public static function dispalyForum( ){
		$forumDetails = DB::table('forum')->join('user','forum.postedby_id','=','user.id')
							->select('forum.id as fid','user.id as uid','img_path','lastname','posted_date',
							         'posted_time','title','description')->get();
		return view('unicon_admin.forum')->with('title','Forum')->with('forumDetails',$forumDetails);
											 			
	}

	/**
	*@author: fazeel
	*@param: $request <-- titel,comments will be send as post method  
	*@desc:	insert 'forum post', 'content' into the forum table
	*@created: 16/02/16
	*/
	public function addPost(Request $request){

		$result = DB::table('forum')->insert(
				array('title' => $request->input('title'), 'postedby_id' => $_SESSION['user_id'],
					  'description' => $request->input('textareaComment'),'posted_date'=>date("Y-m-d"),'posted_time' => date('H:i:s'))
		);
		
		return Unicode_ForumController::dispalyForum();
	}

	/**
	*@author: fazeel
	*@param: $request <-- titel,comments will be send as post methode  
	*@desc:	insert 'forum post', 'content' into the forum table
	*@created: 16/02/16
	*/
	public function dispalyForum1(Request $request){
		
		return Unicode_ForumController::getForumDetails($request->id,$request->uid);		
	}

	/**
	*@author: fazeel
	*@param: request <-- comments details, fid, userID
	*@desc: The comments details for a post will be insert into the 	forum_comment table	   	
	*@created: 18/02/16
	*/
	public function addComment(Request $request){
		
		$result = DB::table('forum_comment')->insert(
				array('forum_id' => $request->input('fid'), 'user_id' => $request->input('userID'),
					  'comments' => $request->input('comment_textArea'),'comment_date'=>date("Y-m-d"),'comment_time' => date('H:i:s'))
		);

		//to get a particular post details pass post id and user id
		return Unicode_ForumController::getForumDetails($request->input('fid'),$request->input('userID'));
	}

	/**
	*@author: fazeel
	*@param: request_id(post id) ,  userID
	*@desc: Get the forum post details with comments and likes/dislikes
	*@created: 17/02/16
	*/
	public static function getForumDetails($requestID,$uid){

		$result = DB::table('forum_details')->where('user_id','=',$uid)->where('forum_id','=',$requestID)->get();
		//to check whether the user already viewed the post or not
		if(!isset($result) || !isset($result[0]->view_status)){
			//insert forum_details if user has not seen any post yet
			DB::table('forum_details')->insert([
			    ['forum_id' => $requestID , 'user_id' => $uid , 'view_status' => 1 ]
			]);
		}
		
		//get forum deatils after inserting		
		$resultAfterInsert = DB::table('forum_details')->where('user_id','=',$uid)->where('forum_id','=',$requestID)->get();

		$totalViews = DB::table('forum_details')->where('forum_id','=',$requestID)->where('view_status','=',1)->count();
		$likes = DB::table('forum_details')->where('forum_id','=',$requestID)->where('islike','=',1)->count();
		$disLikes = DB::table('forum_details')->where('forum_id','=',$requestID)->where('isdislike','=',1)->count();

		$forumDetails = DB::table('forum')->join('user','forum.postedby_id','=','user.id')
										  ->where('forum.id','=',$requestID)
										  ->select('forum.id as fid','user.id as uid','img_path','firstname','lastname','posted_date',
							         		'posted_time','title','description')->get();

		$forum_comment_Details = DB::table('forum_comment')->join('user','forum_comment.user_id','=','user.id')
														   ->where('forum_id','=',$requestID)->get();	
		$count = 0;

		
		foreach ($forum_comment_Details as $row) {
		 	++$count; 
	    }	

			return view('unicon_admin.forum1')->with('title','Forum')
									->with(array('totalViews' => $totalViews , 'disLikes' => $disLikes , 'likes' => $likes ))
									->with('forum_result',$resultAfterInsert)
									->with('countOfComments',$count)
									->with('forumDetails',$forumDetails)
									->with('forum_comments',$forum_comment_Details);
		
	}

	/**
	*@author: fazeel
	*@param: request <-- admin id, forum id
	*@desc: Ajax call when admin click like button in the post, so it's return
	*	   the likes/dislikes information
	*@created: 24/02/16
	*/
	public function isAdminLikePost(Request $request){
		$user_id = $request->input('admin_id');
		$forum_id = $request->input('forum_id');

		//get islike/dislike status
		$result = DB::table('forum_details')->where('forum_id','=',$forum_id)
											 ->where('user_id','=',$user_id)
											 ->first();

		//to get the total like for	the $forum_id								 
		$likes = DB::table('forum_details')->where('forum_id','=',$forum_id)->where('islike','=',1)->count();
		$disLikes = DB::table('forum_details')->where('forum_id','=',$forum_id)->where('isdislike','=',1)->count();

		//when user click like button 
		if($result->islike==0 && $result->isdislike==1){
			DB::table('forum_details')->where('forum_id' , $forum_id)
				->where('user_id' , $user_id)->update(['islike' => 1,'isdislike' => 0]);
			$likes = $likes + 1;
			$disLikes = $disLikes - 1;
		}else if($result->islike==0 && $result->isdislike==0){
			DB::table('forum_details')->where('forum_id' , $forum_id)
				->where('user_id' , $user_id)->update(['isLike' => 1]);
			$likes = $likes + 1;
		}

		$likeStatus = true;// like button should be active
		$dislikeStatus = false;// dis like button should be deactive

		return response()->json(['likeStatus' => $likeStatus,'dislikeStatus' => $dislikeStatus, 
								 'totalLikes' => $likes,'totalDisLikes' => $disLikes]);
	}

	
	/**
	*@author: fazeel
	*@param: request <-- admin id, forum id
	*
	*desc: Ajax call when admin click dis like button in the post, so it's return
	*	   the likes/dislikes information
	*
	*@created: 24/02/16
	*/
	public function isAdminDisLikePost(Request $request){
		$user_id = $request->input('admin_id');
		$forum_id = $request->input('forum_id');

		$result = DB::table('forum_details')->where('forum_id','=',$forum_id)
											 ->where('user_id','=',$user_id)
											 ->first();

		$likes = DB::table('forum_details')->where('forum_id','=',$forum_id)->where('islike','=',1)->count();
		$disLikes = DB::table('forum_details')->where('forum_id','=',$forum_id)->where('isdislike','=',1)->count();

		if($result->islike==1 && $result->isdislike==0){
			DB::table('forum_details')->where('forum_id' , $forum_id)
				->where('user_id' , $user_id)->update(['islike' => 0,'isdislike' => 1]);
			$likes = $likes - 1;
			$disLikes = $disLikes + 1;
		}else if($result->islike==0 && $result->isdislike==0){
			DB::table('forum_details')->where('forum_id' , $forum_id)
				->where('user_id' , $user_id)->update(['isdislike' => 1]);
			$disLikes = $disLikes + 1;
		}

		$likeStatus = false;
		$dislikeStatus = true;

		return response()->json(['likeStatus' => $likeStatus,'dislikeStatus' => $dislikeStatus, 
								 'totalLikes' => $likes,'totalDisLikes' => $disLikes]);
	}
	
	
    
}
