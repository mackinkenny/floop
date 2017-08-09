<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('boutic_id')->default(0);
            $table->integer('product_id')->default(0);
            $table->boolean('status')->default(0);
            $table->integer('text_id');
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
        Schema::dropIfExists('notices');
    }
}
