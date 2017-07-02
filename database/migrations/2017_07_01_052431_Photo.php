<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Photo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		
		Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('albuns_id')->unsigned();
			$table->string('image');
            $table->string('title');
            $table->timestamps();
        });
		Schema::table('photos', function($table){
			$table->foreign('albuns_id')->references('id')->on('albuns');});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('photos');
    }
}
