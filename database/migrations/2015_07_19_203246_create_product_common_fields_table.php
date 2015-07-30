<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCommonFieldsTable extends Migration {

    public function up()
    {
        Schema::create('product_common_fields', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('sub_category_id')->unsigned();

            $table->foreign('sub_category_id')
                ->references('id')
                ->on('sub_categories')
                ->onDelete('cascade');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->string('title')->index();;
            $table->text('description');
            $table->double('price');
            $table->string('location');
            $table->timestamp('published_at');
            $table->morphs('common');
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
        Schema::drop('product_common_fields');
    }

}
