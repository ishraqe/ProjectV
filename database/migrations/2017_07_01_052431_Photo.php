<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Photo extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('photos', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('album_id')->unsigned();
			$table->string('image');
			$table->string('title');
			$table->timestamps();
			$table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('photos');
	}
}
