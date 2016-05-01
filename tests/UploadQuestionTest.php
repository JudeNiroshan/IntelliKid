<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
* @author : Jude Niroshan
* @desc : This class will use to mock the upload questions interface functionalities
* @created : 28/02/2016
*/
class UploadQuestionTest extends TestCase
{

    /** @test
    *   @desc : This test case is to mock the upload process of the questions to the system.
    */
    public function testUploadQuestion(){

/*
   	    $this->visit('/upload_question')
    		->select('4', 'subject')
    		->select('3', 'ageCategory')
    		->type('Test Case Test Question 1', 'question')
    		->attach('C:\\xampp\\htdocs\\IntelliKid\\public\\test_resources\\Capture2.JPG', 'file[]')
    		->type('Test Case Test Answer 1', 'ans1')
    		->type('Test Case Test Answer 2', 'ans2')
    		->type('Test Case Test Answer 3', 'ans3')
    		->type('Test Case Test Answer 4', 'ans4')
    		->press('login')
    		->see('Upload');
*/
            
/*
    	$this->visit('/test')
    	->type('Test Case Test Question 1', 'fname')
    	->press('login')
    	->see('Upload Videos');

*/        
    }
}
