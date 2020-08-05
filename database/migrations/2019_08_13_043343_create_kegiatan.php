<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('destinasi');
            $table->string('acara');
            $table->string('penyelenggara');
            $table->date('tanggal');
            $table->integer('p_lokal')->nullable();
            $table->integer('p_mancanegara')->nullable();
            $table->integer('total_pengunjung')->nullable();
            $table->string('parkiran')->nullable();
            $table->string('pengunjung')->nullable();
            $table->string('lokasi')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('foto_k')->nullable();
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
        Schema::dropIfExists('kegiatan');
    }
}
