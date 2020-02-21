<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Smartphone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('name');
            $table->integer('year');
            $table->string('chipset');
            $table->integer('mem_ram');
            $table->integer('mem_int');
            $table->integer('mem_exp');
            $table->boolean('mem_exp_boolean');
            $table->double('display');
            $table->double('main_cam');
            $table->integer('main_cam_amount');
            $table->double('selfie_cam');
            $table->integer('battery');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('smartphones');
    }
}
