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
            $table->integer('floor_num')->nullable();
            $table->tinyInteger('if_female')->default(0);
            $table->tinyInteger('if_male')->default(0);
            $table->tinyInteger('if_child')->default(0);
            $table->integer('subs')->default(0);
            $table->integer('user_id');
            $table->integer('center_id');
            $table->integer('stage')->default(random_int(1, 3));
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
