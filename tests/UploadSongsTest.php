<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UploadSongsTest extends TestCase
{

    /** @test */
    public function testUploadSong(){

    	   	$this->visit('/upload_songs')
    		->select('4', 'subject')
    		->select('3', 'ageCategory')
    		->type('Test Song 1', 'filename')
    		->attach('Take Me Home.mp3', 'songFile')
    		->attach('Capture2.JPG', 'songImageFile')
    		->press('Save')
    		->see('Upload');
    }
}
