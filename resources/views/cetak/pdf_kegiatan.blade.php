<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <link rel="stylesheet" href="">
	<title>Laporan Data Kunjungan</title>
</head>
<body>
@foreach($datas as $d)
<h1><center>Data Kunjungan Tahun {{date('Y', strtotime($d->tanggal))}}</center></h1>

<p>Destinasi / Lokasi
	<span style="padding-left:110px;"> : {{$d->destinasi}} </span>
</p>
<p>Acara / Kegiatan
	<span style="padding-left:117px;"> : {{$d->acara}} </span>
</p>
<p>Penyelenggara
	<span style="padding-left:133px;"> : {{$d->penyelenggara}} </span>
</p>
<p>Tanggal
	<span style="padding-left:176px;"> : {{date('d-m-Y', strtotime($d->tanggal))}} </span>
</p>
<p>Jumlah Pengunjung Lokal
	<span style="padding-left:59px;"> : {{$d->p_lokal}} </span>
</p>
<p>Jumlah Pengunjung Mancanegara
	<span style="padding-left:10px;"> : {{$d->p_mancanegara}} </span>
</p>
<p><b>Jumlah Total
	<span style="padding-left:136px;"> : {{$d->total_pengunjung}} </span>
</b></p>
<h3>SUMBER DATA :</h3>

		<?php if (($d->parkiran)==="on"): ?>
			- Parkiran
		<?php endif; ?>

		<?php if (($d->pengunjung)==="on"): ?>
			<br>- Pengunjung
		<?php endif; ?>

		<?php if (($d->lokasi)==="on"): ?>
			<br>- Lokasi
		<?php endif; ?>

<br>
<h3>KETERANGAN :</h3>
{{$d->keterangan}}
<br>
<h3>FOTO :</h3>
<p><center><img width="300px" src="{{ asset('images/kegiatan/'.$d->foto_k) }}"/></center></p>
<br>
<br>
@endforeach

</body>
</html>
