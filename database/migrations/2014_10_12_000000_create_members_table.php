<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('scrolls_id')->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('course');
            $table->integer('year');
            $table->string('student_no')->unique();
            //$table->string('password');
            $table->string('contact_no');
            $table->boolean('accomodation');
            $table->integer('college_id')->unsigned();
            //$table->rememberToken();
            $table->timestamps();

            $table->foreign('college_id')->references('id')->on('colleges');

        });

        //DB::update('ALTER TABLE members AUTO_INCREMENT = 100');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
