<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlaceProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('place_profile', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('place_id')->unsigned()->index();
			$table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
			$table->integer('profile_id')->unsigned()->index();
			$table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
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
		Schema::drop('place_profile');
	}

}
