<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('teams', function(Blueprint $table){
            $table->increments('team_id')->unsigned();
            $table->string('team_name');
            $table->integer('leader_id')->unsigned();
            $table->string('synopsis');
            $table->string('password');
            $table->rememberToken();
            $table->integer('topic_id')->unsigned();

            $table->integer('member1_id')->unsigned();
            $table->integer('member2_id')->unsigned();
            $table->integer('member3_id')->unsigned();

            $table->foreign('member1_id')->references('scrolls_id')->on('members');
            $table->foreign('member2_id')->references('scrolls_id')->on('members');
            $table->foreign('member3_id')->references('scrolls_id')->on('members');

            $table->foreign('topic_id')->references('id')->on('topics');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
