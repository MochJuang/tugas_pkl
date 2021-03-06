<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntrians extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_daftar')->unsigned();
            $table->bigInteger('id_tgl')->unsigned();
            $table->integer('no_antrian')->unsigned();
            $table->string('tgl_test');

            $table->timestamps();

            $table->foreign('id_daftar')->references('id')->on('pendaftarans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrians');
    }
}
