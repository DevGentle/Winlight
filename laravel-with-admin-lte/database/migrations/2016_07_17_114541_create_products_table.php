<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_main_id')->unsigned();
            $table->foreign('category_main_id')->references('id')->on('product_main_categories');
            $table->integer('category_sub_id')->unsigned()->nullable();
            $table->foreign('category_sub_id')->references('id')->on('product_sub_categories')->nullable();
            $table->string('code');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('photo_id')->unsigned()->nullable();
            $table->foreign('photo_id')->references('id')->on('photos');
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
        Schema::drop('products');
    }
}
