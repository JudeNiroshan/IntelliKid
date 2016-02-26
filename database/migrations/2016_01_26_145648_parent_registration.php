<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParentRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_registration', function (Blueprint $table) {
                  

                   
                    $table->increments('user_id');
                    $table->string('f_name');
                    $table->string('l_name');
                    $table->string('email');
                    $table->string('dat_of_birth');
                    $table->string('age');
                    $table->string('user_type');
                    $table->timestamp('craeted_date');
                    $table->string('status');
                    $table->string('reset_token');

                   
 
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('parent_registration');
    }
}
