<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unicode_UserModel extends Model{

    public static function selectUserDetails(){

    	$users = DB::table('user')->get();

    	if(isset($users)){
    		return $users;
    	}else{
    		echo "DB error while selecting the details from User Table";
    	}
    }
}
