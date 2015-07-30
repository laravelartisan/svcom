<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration {


    public function up()
    {
        Schema::create('statuses', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
        Schema::create('product_status', function(Blueprint $table)
        {
            $table->integer('product_common_field_id')->unsigned()->index();
            $table->foreign('product_common_field_id')->references('id')->on('product_common_fields')->onDelete('cascade');

            $table->integer('status_id')->unsigned()->index();
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');

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
        Schema::drop('statuses');
        Schema::drop('product_status');
    }


}
