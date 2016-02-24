<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_infos', function (Blueprint $table) {
            $table->increments('id'); 

            $table->integer('resume_id')->unsigned();
            $table->foreign('resume_id')->references('resume_id')->on('resumes')->onDelete('cascade');

            $table->string('full_name');   
            $table->string('phone_number');
            $table->string('twitter_handle');
            $table->string('personal_website');
            $table->string('email_address');
            $table->string('linkedin_url');
            $table->string('skype_username');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('basic_infos');
    }
}
