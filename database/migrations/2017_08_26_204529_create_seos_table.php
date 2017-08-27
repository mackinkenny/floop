<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->integer('word_id');
            $table->integer('typepage_id'); // 0 - main; 1 - centers; 2 - boutics; 3 - products; 4 - users
            $table->integer('page_id'); // 1 - which center; 2 which boutic; 3 -which product; 4 which user
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
        Schema::dropIfExists('seos');
    }
}
