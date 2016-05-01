<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Child;
use App\SystemParent;


class ChildController extends Controller
{

		 /*
        * @author : A.H.A.T.Dias
        * @desc :  Regidter child with submitting data and upload the profile pic
        * @created : 22/02/2016
        */		
    	public function registerChild(Request $request){


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


		//$data = DB::select("select a.c_id from child_Accounts a where a.nik_name = '$nik_name'");
		$data = Child::selectRaw('c_id')->where('nik_name',$nik_name)->get();
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

	 /*
   * @author : A.H.A.T.Dias
   * @desc :  Save new child account data submitted by the user
   * @created : 22/02/2016
   */
	public function childDataSave(Request $request){



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
		$img_path = "assets/parent/ChildProfilePictureuploads/". $nik_name.$fileName;

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


		$data1 = DB::table('user')
            ->where('id', $id)
            ->update(array('firstname' => $fname,'lastname'=>$lname,'Age'=>$age,'gender'=>$gender,'password'=>$password,'img_path'=>$img_path));


		$data2 = DB::table('child')
            ->where('id', $id)
            ->update(array('bio' => $bio,'nick_name'=>$nik_name));


   
		if($data1==true && $data2 == true){
			echo "Account Update successfully!";
			
		}

	}

	 /*
   * @author : A.H.A.T.Dias
   * @desc :  Delete chlid data
   * @created : 22/02/2016
   */
    public function childDataDelete(Request $request){

		
	  $id =  $request->input('id');
		
      DB::table('child')->where('id', '=', $id)->delete();
      DB::table('user')->where('id', '=', $id)->delete();

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




 /*
   * @author : A.H.A.T.Dias
   * @desc :  upload user porfile pic and data
   * @created : 22/02/2016
   */
public function uploadPrifilePicAndAccountData(Request $request){


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
$img_path = "assets/parent/ChildProfilePictureuploads/". $nik_name.$fileName;
  
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


  			$dataArray = ['firstname'=>$fname,'lastname'=>$lname,'dateOfBirth'=>$date_of_birth,'age'=>$age,'user_type'=>'CHILD','acc_created'=>'now()','acc_updated'=>'now()','img_path'=>$img_path,'password'=>$password,'status'=>'P','gender'=>$gender ];
		


		//$data = DB::select("select a.c_id from child_Accounts a where a.nik_name = '$nik_name'");
		$data  = DB::select("select * from child where nick_name = '$nik_name'");
		if(!empty($data)){

       echo "This User name is already used,try a another!";
		}
      else{

      	$Iids = DB::table('user')->insertGetId($dataArray);

      	$data = DB::table('child')->insert(['parent_id'=>$pid,'id'=>$Iids,'nick_name'=>$nik_name,'bio'=>$bio]);

	/*	$data = DB::statement(DB::raw(
                       "INSERT INTO  child_Accounts(f_name,l_name,nik_name,dat_of_birth,age,gender,user_type,craeted_date,status,parent_id,bio_data,kid_password,img_path)   values ('$fname ','$lname','$nik_name','$date_of_birth','$age','$gender','CHILD',now(),'ACTIVE','$pid','$bio','$password','$img_path') "));  

		*/
			 	
		if($data){
			echo "Account created successfully!";
			
		}
		else{

			echo "Error!!";
		}
       }
		
			
		}



		 /*
   * @author : A.H.A.T.Dias
   * @desc : Send all data to the edit view of the child account
   * @created : 22/02/2016
   */
		public function SendDataToEditChildAccount(){

			$id = $_REQUEST['id'];
			

   			//$results =  DB::select("select * from child_Accounts a where a.c_id = '$id '");
   			
   			//echo $pid;
   			//$results  = Child::where('c_id',$id)->get();

   			$results =  DB::select("
  select 
  	   u.id as c_id,
	   u.firstname as f_name,
       u.lastname as l_name,
       u.dateOfBirth as date_of_birth,
       u.Age as age,
       u.user_type as user_type,
       u.acc_created as created_date,
       u.img_path as img_path,
       u.password as kid_password,
       u.status as status,
       u.gender as gender
       

      ,c.parent_id as parent_id,
      c.nick_name as nik_name,
      c.bio as bio_data

 from user u,child c where u.id = '$id' and c.id = '$id'");

   		    		return view('parent.edit_kid_profile')->with('data',$results);
		}

		 /*
   * @author : A.H.A.T.Dias
   * @desc : Send data to child profile
   * @created : 22/02/2016
   */

	   public function SendDataToSelectedAccount(){

		  $id  = $_REQUEST['id'];
		  $pid = $_SESSION['USERID'];

		  $points = DB::select("select sum(points) as count,content_id from points where child_id ='$id' group by content_id");

		  $schedule = DB::select("select * from shedule where  fk_child_id = '$id' and fk_parent_id = '$pid' and  STR_TO_DATE(dueTime, '%m/%d/%Y') >= now()  group by dueTime ");

  		 // $image = DB::select("select * from child_Accounts a where a.c_id='$id'");

		  $image = DB::select("
 select 
  	   u.id as c_id,
	   u.firstname as f_name,
       u.lastname as l_name,
       u.dateOfBirth as date_of_birth,
       u.Age as age,
       u.user_type as user_type,
       u.acc_created as created_date,
       u.img_path as img_path,
       u.password as kid_password,
       u.status as status,
       u.gender as gender
       

      ,c.parent_id as parent_id,
      c.nick_name as nik_name,
      c.bio as bio_data

 from user u,child c where u.id = '$id' and c.id = '$id'");

          return view('parent.kid_profile')
          			 ->with('data',$image)
          			 ->with('schedule' ,$schedule )
          			 ->with('points' ,$points);


	   }
	    /*
   * @author : A.H.A.T.Dias
   * @desc :  Load all child account details and send it the all child account view page
   * @created : 22/02/2016
   */

	   public function SendDataToViewAccountPAge(){

		$id = $_SESSION['USERID'];

       // $results =  DB::select("select * from child_Accounts a where a.parent_id = '$id '");
       $results =  DB::select("
     select 
       u.id as c_id,
	   u.firstname as f_name,
       u.lastname as l_name,
       u.dateOfBirth as date_of_birth,
       u.Age as age,
       u.user_type as user_type,
       u.acc_created as created_date,
       u.img_path as img_path,
       u.password as kid_password,
       u.status as status,
       u.gender as gender
       

      ,c.parent_id as parent_id,
      c.nick_name as nik_name,
      c.bio as bio_data

 from user u,child c where u.id in (select id from child where parent_id = '$id') and c.id in (select id from child where parent_id = '$id') and u.id = c.id
 ");
 

        return view('parent.kid_accounts')->with('data',$results);
	   }



	   public function my(){

		$data = SysParent::find('1');
		var_dump($data);

	   }
	 /*
   * @author : A.H.A.T.Dias
   * @desc :  validate login of the child
   * @created : 22/02/2016
   */

	  public function loginChild(){

		$un = $_REQUEST['un'];
		$pw = $_REQUEST['pw'];

		//$data = DB::select("select c_id from child_Accounts where nik_name = '$un' and kid_password = '$pw' ");

		$data = DB::select(" select u.id as c_id from user u,child c where u.id = c.id and u.password = '$pws' and c.nick_name = '$un' ");

		if(empty($data)){
			return 0;
		}
		else{
		return 1;
	}
	}


}
