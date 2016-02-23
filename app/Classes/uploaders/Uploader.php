<?php

namespace App\Classes\uploaders;


/**
* @author : Jude Niroshan
* @desc : All uploading classes will implements this interface. Define the basic functions that must be in any uploader
* @created : 22/02/2016
*/

interface Uploader {
	
	function upload($request);
	
}