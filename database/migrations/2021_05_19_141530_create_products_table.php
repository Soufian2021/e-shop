<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('title');
            $table->double('price');
            $table->string('category');
            $table->string('file_path');
            $table->text('description');
            $table->unsignedBigInteger('id_promo');
            $table->timestamps();
        });
        Schema:: table('products', function (Blueprint $table) {
            $table->foreign('category')->references('name')->on('categories')->onDelete('cascade');
            $table->foreign('id_promo')->references('id')->on('users')->onDelete('cascade');
    });}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
