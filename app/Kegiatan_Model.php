<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan_Model extends Model
{
  protected $table = 'kegiatan';
  protected $fillable = ['destinasi', 'acara', 'penyelenggara', 'tanggal', 'p_lokal', 'p_mancanegara', 'total_pengunjung', 'parkiran', 'pengunjung', 'lokasi', 'keterangan', 'foto_k', 'video_k'];
}
