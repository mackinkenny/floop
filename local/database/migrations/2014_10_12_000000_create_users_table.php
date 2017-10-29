<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('img_path')->default('default.jpg');
            $table->ipAddress('visitor')->nullable();
            $table->string('password');
            $table->boolean('admin')->default(false);
            $table->boolean('is_boutic')->default(false);
            $table->integer('count_likes')->default(0);
            $table->integer('count_buys')->default(0);
            $table->integer('count_subs')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
