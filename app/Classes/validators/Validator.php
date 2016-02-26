<?php

namespace App\Classes\validators;


/**
* @author : Jude Niroshan
* @desc : All upload related validate classes must implement this interface
* @created : 22/02/2016
*/

interface Validator {
	
	function validate($request);
}