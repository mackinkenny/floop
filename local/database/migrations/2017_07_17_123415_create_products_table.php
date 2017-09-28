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
            $table->string('img_path')->nullable();
            $table->integer('price');
            $table->integer('brand_id');
            $table->integer('discount_id')->nullable();
            $table->integer('cat_id');
            $table->integer('season_id');
            $table->integer('type_id');
            $table->integer('size_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->integer('boutic_id')->nullable();
            $table->integer('count_likes')->default(0);
            $table->integer('count_buys')->default(0);

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
