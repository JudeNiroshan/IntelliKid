<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use File;

class Unicode_ArticleController extends Controller{

	protected $url;

    public function __construct(UrlGenerator $url)
    {
        $this->url = $url;
    }


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
			
		//$pdf_path = public_path()."\\".$getArticle->pdf_path;

		//$pdf_path = str_replace("/","\\",$pdf_path);


		$pdf_path = $this->url->to('/')."/".$getArticle->pdf_path;


		$embedPath = '<embed  src="'.$pdf_path.'" width="100%" height="500px">';


		return response()->json(['title' => $getArticle->title,'embedPath' => $embedPath,'pdf_path' =>$pdf_path,'description' => $getArticle->description]);
	}

	public function showArticleToJSON( ){

		$resultArticle = DB::table('article')->get();
		return $resultArticle;
		
	}

	

	public function deleteArticle(Request $request){
		
		$article_id = $request->input('did');


		$getArticle = DB::table('article')->where('id','=',$article_id)
											 ->first();


		$filename = $this->url->to('/')."/".$getArticle->pdf_path;


		// Delete a single file
		File::delete($filename);
		DB::table('article')->where('id', '=', $article_id)->delete();

		$resultArticle = DB::table('article')->get();       
		return view('unicon_admin.article')->with('article_details',$resultArticle)->with('title','Article');
		
	}
}
