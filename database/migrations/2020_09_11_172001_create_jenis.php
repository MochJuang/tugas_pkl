<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_tempat')->unsigned();
            $table->bigInteger('id_jenis')->unsigned();
            $table->integer('harga')->unsigned();
            $table->integer('limit')->unsigned();
            $table->timestamps();

            $table->foreign('id_tempat')->references('id')->on('tempats');
            $table->foreign('id_jenis')->references('id')->on('jenis_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis');
    }
}
