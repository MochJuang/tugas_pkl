<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat');
            $table->string('deskripsi');
            $table->bigInteger('id_fasilitas')->unsigned();
            $table->bigInteger('click')->unsigned();
            $table->string('no_telp');
            $table->string('email');
            $table->integer('jum_positif');
            $table->string('alamat');
            $table->integer('limit');
            $table->string('foto');
            $table->string('jadwal_buka');
            $table->boolean('is_konfirmasi');
            $table->boolean('is_block');
            $table->timestamps();

            $table->foreign('id_fasilitas')->references('id')->on('fasilitas_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempats');
    }
}
