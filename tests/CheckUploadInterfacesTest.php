<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
* @author : Jude Niroshan
* @desc : This class contains the basic page checking test cases
* @created : 22/01/2016
*/
class CheckUploadInterfacesTest extends TestCase
{

    /** @test
     *  @desc this test case will check whether the loading of Upload Videos page is working fine
     */
    public function testUploadVideoPage(){

    	$this->visit('/upload_videos')->see('Upload Videos')->see('Uploaded Videos');
    }

    /** @test
     *  @desc this test case will check whether the loading of Upload Songs page is working fine
     */
    public function testUploadSongPage(){

    	$this->visit('/upload_songs')->see('Upload Songs')->see('Uploaded Songs');
    }


    /** @test 
     *  @desc this test case will check whether the loading of Upload Stories page is working fine
     */
    public function testUploadStoryPage(){

    	$this->visit('/upload_story')->see('Upload Story')->see('Uploaded Stories');
    }

    /** @test
     *  @desc this test case will check whether the loading of Upload Question page is working fine
     */
    public function testUploadQuestionPage(){

    	$this->visit('/upload_question')->see('Upload Question')->see('Question Bank');
    }
}
