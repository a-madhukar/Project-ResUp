<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('resume_id')->unsigned();
            $table->foreign('resume_id')->references('resume_id')->on('resumes')->onDelete('cascade');

            $table->string('company_name');   
            $table->string('company_location');
            $table->string('duration');
            $table->string('role');
            $table->string('responsibilities');
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
        Schema::drop('experiences');
    }
}
