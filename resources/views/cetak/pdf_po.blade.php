<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style type="text/css">
		    table {
    border-spacing: 0;
    width: 100%;
    }
    th {
			border-top: 1px solid #000000;
			border-right: 1px solid #000000;
			border-bottom: 1px solid #000000;
	    padding: 8px;
	    text-align: center;
	    text-transform: capitalize;
    }
    th:first-child {
    border-top-left-radius: 0px;
    border-left: 1.2px solid #000000;
    }
    th:last-child {
    border-top-right-radius: 0px;
    border-right: 1px solid #000000;
    }
    td {
    border-right: 1px solid #000000;
    border-bottom: 1px solid #000000;
    padding: 8px;
		text-align: center;
    }
    td:first-child {
    border-left: 1px solid #000000;
    }
    tr:first-child td {
    border-top: 1px #000000;
    }
    tr:nth-child(even) td {
    background: #e8eae9;
    }
    tr:last-child td:first-child {
    border-bottom-left-radius: 0px;
    }
    tr:last-child td:last-child {
    border-bottom-right-radius: 0px;
    }

    .center {
    	text-align: center;
    }
    .badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem; }
  .badge-warning {
  color: #212529;
  background-color: #ffaf00; }
  .badge-warning[href]:hover, .preview-list .preview-item .preview-thumbnail [href].badge.badge-busy:hover, .badge-warning[href]:focus, .preview-list .preview-item .preview-thumbnail [href].badge.badge-busy:focus {
    color: #212529;
    text-decoration: none;
    background-color: #cc8c00; }

.badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
  color: #fff;
  background-color: #00ce68; }
  .badge-success[href]:hover, .preview-list .preview-item .preview-thumbnail [href].badge.badge-online:hover, .badge-success[href]:focus, .preview-list .preview-item .preview-thumbnail [href].badge.badge-online:focus {
    color: #fff;
    text-decoration: none;
    background-color: #009b4e; }
	</style>
  <link rel="stylesheet" href="">
	<title>Laporan Data pemuda olahraga</title>
</head>
<body>
	@foreach($datas as $d)
	<h1><center>Data Prestasi Tahun {{date('Y', strtotime($d->tanggal))}}</center></h1>
<br>
	<p>Jenis Lomba
		<span style="padding-left:76px;"> : {{$d->jenis_lomba}} </span>
	</p>
	<p>Tanggal
		<span style="padding-left:104px;"> : {{date('d-m-Y', strtotime($d->tanggal))}} </span>
	</p>
	<p>Emas
		<span style="padding-left:121px;"> : {{$d->emas}} </span>
	</p>
	<p>Perak
		<span style="padding-left:121px;"> : {{$d->perak}} </span>
	</p>
	<p>Perunggu
		<span style="padding-left:96px;"> : {{$d->perunggu}} </span>
	</p>
	<p>Piagam / Penghargaan
		<span style="padding-left:14px;"> : {{$d->piagam}} </span>
	</p>
	<p><b>Jumlah Prestasi
		<span style="padding-left:47px;"> : {{$d->jumlah_prestasi}} </span>
	</b></p>

	<h4>Foto Kegiatan :</h4>
	<p>
		<center>
			<img width="400px" src="{{ asset('images/pemuda_olahraga/'.$d->ft_kegiatan) }}"/>
		</center>
	</p>
	<br>
@endforeach

</body>
</html>
