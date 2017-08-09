<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Yuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->biginteger('number')->unique();
            $table->biginteger('mphone');
            $table->string('bumen1');
            $table->string('bumen2');
            $table->string('sex');
            $table->text('jianjie');
            $table->text('techang');
            $table->string('class');
            $table->integer('pid');
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
        Schema::drop('yusers');
    }
}
