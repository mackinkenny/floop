<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBouticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boutics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('img_path');
            $table->tinyInteger('if_female');
            $table->tinyInteger('if_male');
            $table->tinyInteger('if_child');
            $table->integer('subs')->default(0);
            $table->integer('user_id');
            $table->integer('center_id');
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
        Schema::dropIfExists('boutics');
    }
}
