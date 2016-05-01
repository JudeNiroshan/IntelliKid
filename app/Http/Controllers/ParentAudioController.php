<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classes\common\FactoryProducer;
use DB;

class ParentAudioController extends Controller
{


  public function audioFormat($data,$array){

    	 foreach($data as $s)
       {
        $e = array();
        $e['title'] = $s->name;
        $e['artist'] = "ADG3";
        $e['mp3'] = $s->path;
        $e['poster'] = "images/m0.jpg";
     

        array_push($array, $e);
       }
       

       return json_encode($array);


     }


	public function viewAudioCategoryAlbums(){

		$category = $_REQUEST['cat'];

		$data = DB::select("select * from audio where agegroupid = '$category'");


	return view('parent.audio.view_category_albums')
				->with('cat',$category)
				->with('data',$data)
				->with('c','c')
				->with('search',"");
				


	}



  public function getAudios(){

    	$category = $_REQUEST['cat'];

    	$data = DB::select("select * from audio where agegroupid = '$category'");

		$audios = array();

       echo $this->audioFormat($data,$audios);
    }

   public function viewSong(Request $request){

	//$id = $request->input('id');

	$status="no";

	$vedio_items = array();
	$vedio_items = $_SESSION['video_que'];

	foreach($vedio_items as $item){

			if($item == $id){
				$status = "yes";
			}
	}


	//$cat = $request->input('cat');
	$pid = $_SESSION['USERID'];

	$video_record = DB::select("select * from audio a where a.id='1' ");
	$video_records = DB::select("select * from audio a where a.agegroupid = '1'");
	//$check = DB::select("select * from collector a where a.pid = '$pid' and a.item_id = '$id' and type='video' ");

	$comments = DB::select("select a.text,a.comment_date,k.l_name,k.f_name,k.img_path from comment a,parent_registration k where a.parent_id = k.user_id and a.item_id = '1' and a.type_id = 2");
	//$comments  = DB::select("select a.text,a.date,k.l_name,k.f_name,k.img_path from comment a,parent_registration k where a.pid = k.user_id and a.item_id = '1' and a.type = 'audio'");
	//var_dump($comments);
		if($status == "yes"){

			$msg = "has";
		}
		else{

			$msg = "no";
		}



	return view('parent.songs.view_song')
         ->with('selected_video',$video_record )
         ->with('all_videos',$video_records)
         ->with('msg',$msg)
         ->with('comment',$comments);

    }


    public function AddOrRemoveFromQue(){

    	
    	$id        = $_REQUEST['id'];
    	$Factory   = FactoryProducer::getFactory("schedule");
    	$validator = $Factory->getUploader("schedulevalidation");
    	$value     = $validator->audioAddRemoveChecker($id);
    	
    	return $value;



    }

    public function searchCatAudios(){

    	
		$cat = $_REQUEST['cat'];
		$key = $_REQUEST['search'];
 
		$data  = DB::select("select * from audio where name like '%$key%' and agegroupid = '$cat'");

  		return view('parent.audio.view_category_albums')
  				   ->with('data',$data )
  				   ->with('cat',$cat)
  				   ->with('c','s')
  				   ->with('search',$key);
    }


    public function getAudiosSearch(){

    	$cat = $_REQUEST['cat'];
		$key = $_REQUEST['key'];
 
		$data  = DB::select("select * from audio where name like '%$key%' and agegroupid = '$cat'");

		$audios = array();
		

       echo $this->audioFormat($data,$audios);

    }

    public function AllAudiosView(){

    $data = DB::select("select * from audio ");


	      return view('parent.audio.all_audio_albums')
				       ->with('data',$data)
				       ->with('c','c')
				       ->with('search',"");

    }



    public function SingleViewOfSong(){

      $id = $_REQUEST['id'];

    $data = DB::select("select * from audio where id = '$id'");


        return view('parent.audio.single_view_song')
               ->with('data',$data);
               

    }

    public function getSingleAudio(){

      $id = $_REQUEST['id'];

      $data  = DB::select("select * from audio where id = '$id' ");

      $audios = array();
    

       echo $this->audioFormat($data,$audios);

    }



    public function getAllAudios(){

    	$data  = DB::select("select * from audio");

		$audios = array();
		

       echo $this->audioFormat($data,$audios);

		}

    public function getAllAudiosSearch(){


		$key = $_REQUEST['key'];
 
		$data  = DB::select("select * from audio where name like '%$key%'");

		$audios = array();

       echo $this->audioFormat($data,$audios);

    }
    public function searchAllAudios(){

    	$key = $_REQUEST['search'];
 
		$data  = DB::select("select * from audio where name like '%$key%'");

  		return view('parent.audio.all_audio_albums')
  				   ->with('data',$data )
  				   ->with('c','s')
  				   ->with('search',$key);
    }


}
