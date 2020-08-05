<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemuda_Olahraga_Model extends Model
{
  protected $table = 'pemuda_olahraga';
  protected $fillable = ['tanggal', 'jenis_lomba', 'emas', 'perak', 'perunggu', 'piagam', 'jumlah_prestasi', 'ft_kegiatan'];
}
