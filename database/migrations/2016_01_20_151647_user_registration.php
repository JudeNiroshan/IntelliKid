<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRegistration extends Migration
{
   
    public function up()
    {
         Schema::create('user_registration', function (Blueprint $table) {
                  

                   
                    $table->increments('user_id');
                    $table->string('f_name');
                    $table->string('l_name');
                    $table->string('email');
                    $table->string('dat_of_birth');
                    $table->string('age');
                    $table->string('user_type');
                    $table->timestamp('craeted_date');
                    $table->string('status');

                   
 
        });  
    }

  
    public function down()
    {
        //Schema::drop('user_registration');
    }
}
