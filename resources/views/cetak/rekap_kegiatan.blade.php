<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <style type="text/css">
	.table1 {
 font-family: sans-serif;
 color: #232323;
 border-collapse: collapse;

}

.table1, th{
 border: 1px solid #999;
 padding: 6px;
 text-align: center;
}

td {
 border: 1px solid #999;
 padding: 8px;
 text-align: center;
}
.center {
	text-align: center;
}
	</style>
  <link rel="stylesheet" href="">
	<title>Rekap Data Kunjungan</title>
</head>
<body>

<h1 class="center">Rekap Data Kunjungan</h1>
 <table class="table1">
                      <thead>
                        <tr>
                          <th style="padding : 6px 20px;">
                            Tanggal
                          </th>
                          <th>
                            Destinasi
                          </th>
                          <th>
                            Acara
                          </th>
                          <th>
                            Penyelenggara
                          </th>
													<th>
                            Sumber Data
                          </th>
                          <th>
                            Jumlah Pengunjung
                          </th>

                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                       <tr>
                         <td class="py-1">
                          {{date('d-m-Y', strtotime($data->tanggal))}}
                         </td>
                          <td>
                            {{$data->destinasi}}
                          </td>
                          <td>
                            {{$data->acara}}
                          </td>
                          <td>
                            {{$data->penyelenggara}}
                          </td>
													<td>
                            <?php if (($data->parkiran)==="on"): ?>
                        			Parkiran
                        		<?php endif; ?>

                        		<?php if (($data->pengunjung)==="on"): ?>
                        			Pengunjung
                        		<?php endif; ?>

                        		<?php if (($data->lokasi)==="on"): ?>
                        			Lokasi
                        		<?php endif; ?>
                          </td>
                          <td>
                            {{$data->total_pengunjung}}
                          </td>

                        </tr>
                      @endforeach
											<tfoot>
												<tr>
													<th colspan="5">Total</th>
													<td>{{$datas->sum('total_pengunjung')}}</td>
												</tr>
											</tfoot>
                      </tbody>
                    </table>
</body>
</html>
