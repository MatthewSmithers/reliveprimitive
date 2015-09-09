<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyllabiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syllabi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('section')->nullable();
            $table->string('title');
            //add the date and time. 
            $table->string('season');
            $table->integer('year');
            $table->string('instructor');
            $table->string('phone');
            $table->string('email');
            $table->string('office_hours')->nullable();
            $table->string('contact_hours')->nullable();
            $table->string('course_length');
            $table->integer('credit_hours')->nullable();
            $table->string('breaks');
            $table->string('prerequisites');
            $table->string('description');
            $table->string('competencies');
            $table->string('textbook')->nullable();
            $table->string('grading')->nullable();
            $table->string('materials');
            $table->string('policies'); // will become a FK
            $table->string('agenda'); //showing a breakdown of each week.
            $table->string('contingency'); // alternate subjects for inclement weather
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
        Schema::drop('syllabi');
    }
}
