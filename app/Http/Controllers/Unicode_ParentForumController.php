<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;


class Unicode_ParentForumController extends Controller{

	protected $url;

    public function __construct(UrlGenerator $url)
    {
        $this->url = $url;
    }

	/**
	*@author: fazeel
	*@param: none
	*@desc:	showParentForum() will triger when first time load the forum page by admin 
	*		and Get the forum details by joining 'forum' and 'user' table 
	*@created: 21/02/16
	*/
	public function showParentForum(Request $request){//id,userid
		
		if($request->id == null){	
			$forumDetails = DB::table('forum')->join('user','forum.postedby_id','=','user.id')
								->select('forum.id as fid','user.id as uid','img_path','lastname','posted_date',
								         'posted_time','title','description')->get();
								

			return Unicode_ParentForumController::getForumDetailsForParent(null,$forumDetails[0]->uid)->with('forumDetails',$forumDetails);					
			//return view('parent.parent_forum')->with('forumDetails',$forumDetails);
		}else{

			$forumDetails = DB::table('forum')->join('user','forum.postedby_id','=','user.id')
								->select('forum.id as fid','user.id as uid','img_path','lastname','posted_date',
								         'posted_time','title','description')->get();

			return Unicode_ParentForumController::getForumDetailsForParent($request->id,$request->userid)->with('forumDetails',$forumDetails);	
		}	
	}

	/**
	*@author: fazeel
	*@desc:	showParentForum() will triger when first time load the forum page by admin 
	*		and Get the forum details by joining 'forum' and 'user' table 
	*@created: 21/02/16
	*/
	public static function getForumDetailsForParent($requestID=null,$uid){

		$isPostAvailable = false;

		if($requestID==null){
			$forumPost = DB::table('forum')->join('user','forum.postedby_id','=','user.id')
										  ->select('forum.id as fid','user.id as uid','img_path','firstname','lastname','posted_date',
							         		'posted_time','title','description')->first();

			if(!isset($forumPost)){
				return view('parent.parent_forum');
											
			}else{

				$forum_comment_Details = DB::table('forum_comment')->join('user','forum_comment.user_id','=','user.id')
															   ->where('forum_id','=',$forumPost->fid)->get();


				//insert forum_details if user has not seen any post yet
				$result = DB::table('forum_details')->where('user_id','=',$uid)->where('forum_id','=',$forumPost->fid)->get();
				if(!isset($result) || !isset($result[0]->view_status)){
					DB::table('forum_details')->insert([
					    ['forum_id' => $forumPost->fid , 'user_id' => $uid , 'view_status' => 1 ]
					]);
				}
				
				$resultAfterInsert = DB::table('forum_details')->where('user_id','=',$uid)->where('forum_id','=',$forumPost->fid)->get();

				$totalViews = DB::table('forum_details')->where('forum_id','=',$forumPost->fid)->where('view_status','=',1)->count();
				$likes = DB::table('forum_details')->where('forum_id','=',$forumPost->fid)->where('islike','=',1)->count();
				$disLikes = DB::table('forum_details')->where('forum_id','=',$forumPost->fid)->where('isdislike','=',1)->count();											   

				$count = 0;
			
				foreach ($forum_comment_Details as $row) {
				 	++$count; 
			    }	

				$resultArticle = DB::table('article')->get();


				return view('parent.parent_forum')
											->with(array('totalViews' => $totalViews , 'disLikes' => $disLikes , 'likes' => $likes ))
											->with('forum_result',$resultAfterInsert)
											->with('countOfComments',$count)
											->with('article_details',$resultArticle)
											->with('forumPost',$forumPost)
											->with('forum_comments',$forum_comment_Details);
			}							  
			
														   							  
		}else{

			$forumPost = DB::table('forum')->join('user','forum.postedby_id','=','user.id')
										  ->where('forum.id','=',$requestID)
										  ->select('forum.id as fid','user.id as uid','img_path','firstname','lastname','posted_date',
							         		'posted_time','title','description')->first();
			
			$forum_comment_Details = DB::table('forum_comment')->join('user','forum_comment.user_id','=','user.id')
														   ->where('forum_id','=',$requestID)->get();

			//insert forum_details if user has not seen any post yet
			$result = DB::table('forum_details')->where('user_id','=',$uid)->where('forum_id','=',$requestID)->get();
			if(!isset($result) || !isset($result[0]->view_status)){
				DB::table('forum_details')->insert([
				    ['forum_id' => $requestID , 'user_id' => $uid , 'view_status' => 1 ]
				]);
			}
			
			$resultAfterInsert = DB::table('forum_details')->where('user_id','=',$uid)->where('forum_id','=',$requestID)->get();

			$totalViews = DB::table('forum_details')->where('forum_id','=',$requestID)->where('view_status','=',1)->count();
			$likes = DB::table('forum_details')->where('forum_id','=',$requestID)->where('islike','=',1)->count();
			$disLikes = DB::table('forum_details')->where('forum_id','=',$requestID)->where('isdislike','=',1)->count();											   
											   

			$resultArticle = DB::table('article')->get();

			$count = 0;
		
			foreach ($forum_comment_Details as $row) {
			 	++$count; 
		    }							  

			return view('parent.parent_forum')
										->with(array('totalViews' => $totalViews , 'disLikes' => $disLikes , 'likes' => $likes ))
										->with('forum_result',$resultAfterInsert)
										->with('countOfComments',$count)
										->with('article_details',$resultArticle)
										->with('forumPost',$forumPost)
										->with('forum_comments',$forum_comment_Details);

		}

	}

	/**
	*@author: fazeel
	*@param: post request
	*@desc:	Parent add a comment
	*@created: 21/02/16
	*/
	public function addComment(Request $request){

		
		$result = DB::table('forum_comment')->insert(
				array('forum_id' => $request->input('fid'), 'user_id' => $request->input('userID'),
					  'comments' => $request->input('comment_textArea'),'comment_date'=>date("Y-m-d"),'comment_time' => date('H:i:s'))
		);

		$forumDetails = DB::table('forum')->join('user','forum.postedby_id','=','user.id')
								->select('forum.id as fid','user.id as uid','img_path','lastname','posted_date',
								         'posted_time','title','description')->get();

		return Unicode_ParentForumController::getForumDetailsForParent($request->input('fid'),$request->input('userID'))->with('forumDetails',$forumDetails);
		
		
	}

	/**
	*@author: fazeel
	*@param: post request
	*@desc:	Parent add a post
	*@created: 21/02/16
	*/
	public function addParentPost(Request $request){


		$result = DB::table('forum')->insert(
				array('title' => $request->input('fTitle'), 'postedby_id' => $request->input('userID')	,
					  'description' => $request->input('fTextareaComment'),'posted_date'=>date("Y-m-d"),'posted_time' => date('H:i:s'))
		);
		
		$forumDetails = DB::table('forum')->join('user','forum.postedby_id','=','user.id')
								->select('forum.id as fid','user.id as uid','img_path','lastname','posted_date',
								         'posted_time','title','description')->get();

		return Unicode_ParentForumController::getForumDetailsForParent(null,$request->input('userID'))->with('forumDetails',$forumDetails);
	}


	/**
	*@author: fazeel
	*@param: post request
	*@desc:	ajax call when parent like the post
	*@created: 21/02/16
	*/
	public function isUserLikePost(Request $request){
		$user_id = $request->input('user_id');
		$forum_id = $request->input('forum_id');

		$result = DB::table('forum_details')->where('forum_id','=',$forum_id)
											 ->where('user_id','=',$user_id)
											 ->first();

		$likes = DB::table('forum_details')->where('forum_id','=',$forum_id)->where('islike','=',1)->count();
		$disLikes = DB::table('forum_details')->where('forum_id','=',$forum_id)->where('isdislike','=',1)->count();

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


		$likeStatus = true;
		$dislikeStatus = false;

		return response()->json(['likeStatus' => $likeStatus,'dislikeStatus' => $dislikeStatus, 
								 'totalLikes' => $likes,'totalDisLikes' => $disLikes]);
	}


	
	/**
	*@author: fazeel
	*@param: article id
	*@desc:	ajax call to get article details
	*@created: 21/02/16
	*/
	public function getArticleParent(Request $request){
		$article_id = $request->input('article_id');
		
		$getArticle = DB::table('article')->where('id','=',$article_id)
											 ->first();
			
		/*$pdf_path = public_path()."\\".$getArticle->pdf_path;

		$pdf_path = str_replace("/","\\",$pdf_path);*/

		$pdf_path = $this->url->to('/')."/".$getArticle->pdf_path;

		

		$embedPath = '<embed  src="'.$pdf_path.'" width="100%" height="500px">';
		
		
		return response()->json(['title' => $getArticle->title,'embedPath' => $embedPath,'pdf_path' =>$pdf_path,'description' => $getArticle->description]);
	}
    

	/**
	*@author: fazeel
	*@param: post request
	*@desc:	ajax call when parent dislike the post
	*@created: 21/02/16
	*/
	public function isUserDisLikePost(Request $request){
		$user_id = $request->input('user_id');
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
	