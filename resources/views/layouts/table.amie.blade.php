<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmiesTable extends Migration
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
            $table->integer('id_utilisateur')->unsigned();
            $table->foreign('id_utilisateur')
                  ->references('id')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
             $table->integer('id_amie');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('amies', function(Blueprint $table) {
            $table->dropForeign('amies_id_utilisateur_foreign');
        });
        Schema::dropIfExists('amies');
    }
}
