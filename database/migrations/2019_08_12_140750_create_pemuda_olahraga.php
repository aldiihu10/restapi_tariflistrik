<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemudaOlahraga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemuda_olahraga', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->string('jenis_lomba');
            $table->integer('emas')->nullable();
            $table->integer('perak')->nullable();
            $table->integer('perunggu')->nullable();
            $table->integer('piagam')->nullable();
            $table->integer('jumlah_prestasi')->nullable();
            $table->string('ft_kegiatan')->nullable();
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
        Schema::dropIfExists('pemuda_olahraga');
    }
}
