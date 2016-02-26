<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChildAccount extends Migration
{
    
    public function up()
    {
         Schema::create('child_Accounts', function (Blueprint $table) {
                  

                   
                    $table->increments('c_id');
                    $table->string('f_name');
                    $table->string('l_name');
                    $table->string('nik_name');
                    $table->string('dat_of_birth');
                    $table->string('age');
                    $table->string('user_type');
                    $table->timestamp('craeted_date');
                    $table->string('status');
                  

                   
 
        });  
    }

   
    public function down()
    {
        //Schema::drop('child_Accounts');
    }
}
