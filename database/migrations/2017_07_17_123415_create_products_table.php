<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->integer('price');
            $table->string('img_path')->default('default.jpg');
            $table->integer('brand_id');
            $table->integer('discount_id')->nullable();
            $table->integer('cat_id');
            $table->integer('size_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->integer('boutic_id')->nullable();
            $table->integer('count_likes')->nullable();
            $table->integer('count_buys')->nullable();

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
        Schema::dropIfExists('products');
    }
}
