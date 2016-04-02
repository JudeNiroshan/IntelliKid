<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class Unicode_ArticleController extends Controller{

	public function showArticle( ){

		$resultArticle = DB::table('article')->get();
		return view('unicon_admin.article')->with('article_details',$resultArticle)->with('title','Article');
		
	}
    

    /**
	*@author: fazeel
	*@param: article id
	*@desc:	ajax call to get article details
	*@created: 21/02/16
	*/
	public static function uploadArticle(Request $request){

		print_r("i am here to upload");
		if(Input::hasFile('file')){

				
			$file = Input::file('file');
			$file->move('assets/adminPage_assets/forum_style/pdf/', $file->getClientOriginalName());

			$path_url = 'assets/adminPage_assets/forum_style/pdf/'.$file->getClientOriginalName();

			$result = DB::table('article')->insert(
				array('title' => $request->input('title'), 'publisher_id' => $_SESSION['user_id'],
					  'description' => $request->input('disc'),'pdf_path' => $path_url,
					  'date_published'=>date("Y-m-d"),'time_publish' => date('H:i:s'))
			);

			$resultArticle = DB::table('article')->get();
			return view('unicon_admin.article')->with('article_details',$resultArticle)->with('title','Article');
			
		}
	}

	
	/**
	*@author: fazeel
	*@param: article id
	*@desc:	ajax call to get article details
	*@created: 21/02/16
	*/
	public function getArticle1(Request $request){

		$article_id = $request->input('article_id');
		
		$getArticle = DB::table('article')->where('id','=',$article_id)
											 ->first();
			
		/*$pdf_path = public_path()."\\".$getArticle->pdf_path;

		$pdf_path = str_replace("/","\\",$pdf_path);*/

		$pdf_path = "http://localhost:8000/".$getArticle->pdf_path;

		$embedPath = '<embed  src="'.$pdf_path.'" width="100%" height="500px">';


		return response()->json(['title' => $getArticle->title,'embedPath' => $embedPath,'pdf_path' =>$pdf_path,'description' => $getArticle->description]);
	}
}
