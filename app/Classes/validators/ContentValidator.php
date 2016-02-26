<?php

namespace App\Classes\validators;


/**
* @author : Jude Niroshan
* @desc : This is the context class for upload validations
* @created : 22/02/2016
*/

class ContentValidator {
	
	private $validator;

	function __construct($validator_impl) {

        $this->validator = $validator_impl;
        
    }

    function doValidate($request){

    	return $this->validator->validate($request);
    }

}