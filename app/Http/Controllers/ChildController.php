<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Child;
use App\SysParent;


class ChildController extends Controller
{
    	public function register_child(Request $request){


		$fname       =  $request->input('fname');
		$lname       =  $request->input('lname');
		$nik_name    =  $request->input('nik_name');
		$age         =  $request->input('age');
		$gender      =  $request->input('gender');
		$month       =  $request->input('month');
		$year        =  $request->input('year');
		$day         =  $request->input('day');
		$bio         =  $request->input('bio');

		$pid = $_SESSION['USERID'];

		$date_of_birth = $day."/".$month."/".$year;
		$out_put = 0;


		$data = DB::select("select a.c_id from child_Accounts a where a.nik_name = '$nik_name'");
		if(!empty($data)){

     $out_put = 2;
		}
		else{

		$data = DB::statement(DB::raw(
                       "INSERT INTO  child_Accounts(f_name,l_name,nik_name,dat_of_birth,age,gender,user_type,craeted_date,status,parent_id,bio_data)   values ('$fname ','$lname','$nik_name','$date_of_birth','$age','$gender','CHILD',now(),'ACTIVE','$pid','$bio') "));  
			 	
		if($data){
			$out_put = 1;
			}
		}
		echo $out_put;

	}


	public function child_data_save(Request $request){



$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true

$imageFileType = pathinfo($fileName,PATHINFO_EXTENSION);

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
 exit();
    
}
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}




$nik_name =  $request->input('nik_name');
$img_path = "uploads/". $nik_name.$fileName;

if(move_uploaded_file($fileTmpLoc, $img_path)){
    //echo "Image upload is complete";
} else {
    echo "move uploaded file function failed";
}



    $img_data  = $_REQUEST['img_data'];

    $lines = json_decode($img_data, true);

//var_dump($lines);

    //echo  $lines["width"];
			 	


		$fname       =  $request->input('fname');
		$lname       =  $request->input('lname');
		$age         =  $request->input('age');
		$gender      =  $request->input('gender');
		$month       =  $request->input('month');
		$year        =  $request->input('year');
		$day         =  $request->input('day');
		$bio         =  $request->input('bio');
		$password    =  $request->input('password');
		$id          =  $request->input('id');
		

		$pid = $_SESSION['USERID'];

		$date_of_birth = $day."/".$month."/".$year;
		


		


		

		$data = DB::table('child_Accounts')
            ->where('c_id', $id)
            ->update(array('f_name' => $fname,'l_name'=>$lname,'nik_name'=>$nik_name,'bio_data'=>$bio,'age'=>$age,'gender'=>$gender,'kid_password'=>$password,'img_path'=>$img_path));

            
		if($data){
			echo "Account Update successfully!";
			
		}



	}




public function child_data_delete(Request $request){

		
		$id =  $request->input('id');
		
      DB::table('child_Accounts')->where('c_id', '=', $id)->delete();

            echo 1;

	}

		public function test(Request $r){


		echo $r->file('avatar_file');

	}


	public function upload(){

		echo 'Uploaded uda';

		if(Input::hasFile('file')){

			echo 'Uploaded';
			$file = Input::input('file');
			echo $file ;
			//$file->move('uploads', $file->getClientOriginalName());


			
		}

	}

public function upload_prifile_pic_and_account_data(Request $request){


$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true

$imageFileType = pathinfo($fileName,PATHINFO_EXTENSION);

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
 exit();
    
}
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}




$nik_name =  $request->input('nik_name');
$img_path = "uploads/". $nik_name.$fileName;
  
  // DB::statement(DB::raw("INSERT INTO  profile_pic(path)   values ('$img_path')"));  
if(move_uploaded_file($fileTmpLoc,$img_path)){
    //echo "Image upload is complete";
} else {
    echo "move uploaded file function failed";
}



    $img_data  = $_REQUEST['img_data'];

    $lines = json_decode($img_data, true);

//var_dump($lines);

    //echo  $lines["width"];
			 	


		$fname       =  $request->input('fname');
		$lname       =  $request->input('lname');
		
		$age         =  $request->input('age');
		$gender      =  $request->input('gender');
		$month       =  $request->input('month');
		$year        =  $request->input('year');
		$day         =  $request->input('day');
		$bio         =  $request->input('bio');
		$password         =  $request->input('password');
		

		$pid = $_SESSION['USERID'];

		$date_of_birth = $day."/".$month."/".$year;
		


		$data = DB::select("select a.c_id from child_Accounts a where a.nik_name = '$nik_name'");
		if(!empty($data)){

     echo "This User name is already used,try a another!";
		}
else{

		$data = DB::statement(DB::raw(
                       "INSERT INTO  child_Accounts(f_name,l_name,nik_name,dat_of_birth,age,gender,user_type,craeted_date,status,parent_id,bio_data,kid_password,img_path)   values ('$fname ','$lname','$nik_name','$date_of_birth','$age','$gender','CHILD',now(),'ACTIVE','$pid','$bio','$password','$img_path') "));  
			 	
		if($data){
			echo "Account created successfully!";
			
		}
}
		
			
		}


		public function SendDataToEditChildAccount(){

			$id = $_REQUEST['id'];

   			$results =  DB::select("select * from child_Accounts a where a.c_id = '$id '");

    		return view('parent.edit_kid_profile')->with('data',$results);
		}

	public function SendDataToSelectedAccount(){

		  $id = $_REQUEST['id'];

  		  $image = DB::select("select a.img_path from child_Accounts a where a.c_id='$id'");

          return view('parent.kid_profile')->with('data',$image);


	}

	public function SendDataToViewAccountPAge(){

		$id = $_SESSION['USERID'];

   $results =  DB::select("select * from child_Accounts a where a.parent_id = '$id '");

 

    return view('parent.kid_accounts')->with('data',$results);
	}

	public function my(){

		$data = SysParent::find('1');
		var_dump($data);

	}

}
