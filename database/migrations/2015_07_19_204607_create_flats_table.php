<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flats', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('type');
            $table->string('area');
            $table->string('bed_room');
            $table->string('bath_room');
            $table->string('floor');
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
		Schema::drop('flats');
	}

}
