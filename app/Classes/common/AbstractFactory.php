<?php

namespace App\Classes\common;


/**
* @author : Jude Niroshan
* @desc : This is the base abstract class for any factory in the application
* @created : 22/02/2016
*/

abstract class AbstractFactory{
	
	abstract function getUploader($upload_type);
}