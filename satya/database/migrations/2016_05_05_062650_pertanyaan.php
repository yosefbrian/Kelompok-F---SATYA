<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pertanyaan');
            $table->string('jawaban');
            $table->integer('kuis_id')->unsigned()->index();
            $table->foreign('kuis_id')->references('id')->on('daftarkuis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pertanyaan');
    }
}
