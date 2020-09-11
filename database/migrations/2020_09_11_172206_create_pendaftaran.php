<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_member')->unsigned();
            $table->bigInteger('id_tempat')->unsigned();
            $table->bigInteger('id_metode')->unsigned();
            $table->bigInteger('id_jenis')->unsigned();
            $table->boolean('is_sudah');
            $table->integer('qty');
            $table->bigInteger('total_bayar');

            $table->foreign('id_member')->references('id')->on('members');
            $table->foreign('id_tempat')->references('id')->on('tempats');
            $table->foreign('id_metode')->references('id')->on('metodes');
            $table->foreign('id_jenis')->references('id')->on('jenis');


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
        Schema::dropIfExists('pendaftarans');
    }
}
