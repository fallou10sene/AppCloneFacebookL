<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmiesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('amies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned(); 
            $table->foreign('users_id')->references('id')->on('users'); 
            $table->integer('amie_id');
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
        Schema::dropIfExists('amies');
    }
}
