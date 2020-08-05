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
	<title>Rekap Data Pemuda Olahraga</title>
</head>
<body>
<h1 class="center">Rekap Data Pemuda Olahraga</h1>

 <table class="table1">
                      <thead>
                        <tr>
                          <th style="padding : 6px 20px;">
                            Tanggal
                          </th>
                          <th>
                            Jenis Lomba
                          </th>
                          <th>
                            Emas
                          </th>
                          <th>
                            Perak
                          </th>
													<th>
                            Perunggu
                          </th>
													<th>
                            Piagam / Penghargaan
                          </th>
													<th>
                            Jumlah Prestasi
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
                            {{$data->jenis_lomba}}
                          </td>
                          <td>
                            {{$data->emas}}
                          </td>
													<td>
                            {{$data->perak}}
                          </td>
													<td>
                            {{$data->perunggu}}
                          </td>
													<td>
                            {{$data->piagam}}
                          </td>
													<td>
                            {{$data->jumlah_prestasi}}
                          </td>
                        </tr>
                      @endforeach
											<tfoot>
												<tr>
													<th colspan="6">Total</th>
													<td>{{$datas->sum('jumlah_prestasi')}}</td>
												</tr>
											</tfoot>
                      </tbody>
                    </table>
</body>
</html>
