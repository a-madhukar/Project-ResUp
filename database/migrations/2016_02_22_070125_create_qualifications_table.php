<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('resume_id')->unsigned();
            $table->foreign('resume_id')->references('resume_id')->on('resumes')->onDelete('cascade');

            $table->string('name');   
            $table->string('institution_name');
            $table->string('institution_location');
            $table->string('graduation_date');
            $table->string('cgpa');

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
        Schema::drop('qualifications');
    }
}
