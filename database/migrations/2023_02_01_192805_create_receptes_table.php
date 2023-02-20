<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receptes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titol');
            $table->integer('temps_cocció');
            $table->string('fotografia');
            $table->text('ingredients');
            $table->text('passos');
            $table->unsignedInteger('category_id');
            $table->foreign('id')->references('id')->on('categories');
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
        Schema::dropIfExists('receptes');
    }
};
