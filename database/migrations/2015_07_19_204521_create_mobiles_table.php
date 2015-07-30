<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mobiles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('company');
            $table->string('model');
            $table->string('os');
            $table->string('warrenty');
            $table->string('number_of_sim');
            $table->string('ram');
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
		Schema::drop('mobiles');
	}

}
