<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('dashboard/assets/img/logo.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Disbudparpora Kota Kediri</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

		<style type="text/css">
		.form-search::-moz-placeholder {
		color: #DDDDDD;
		opacity: 1;
		filter: alpha(opacity=100);
		}

		.form-search:-moz-placeholder {
				color: #DDDDDD;
				opacity: 1;
				filter: alpha(opacity=100);
		}

		.form-search::-webkit-input-placeholder {
				color: #DDDDDD;
				opacity: 1;
				filter: alpha(opacity=100);
		}

		.form-search:-ms-input-placeholder {
				color: #DDDDDD;
				opacity: 1;
				filter: alpha(opacity=100);
		}

		.form-search {
				background-color: #FFFFFF;
				border: 1px solid #E3E3E3;
				border-radius: 4px;
				color: #565656;
				padding: 8px 12px;
				height: 40px;
				-webkit-box-shadow: none;
				box-shadow: none;
		}

		.form-search:focus {
				background-color: #FFFFFF;
				border: 1px solid #AAAAAA;
				-webkit-box-shadow: none;
				box-shadow: none;
				outline: 0 !important;
				color: #333333;
		}
		</style>


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('dashboard/assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('dashboard/assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('dashboard/assets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('dashboard/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
</head>
<body>
	<!-- The Modal -->
												<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<form action="{{route('rekappdf.pemuda_olahraga')}}" enctype="multipart/form-data">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<h4 class="modal-title" id="exampleModalLabel">Rekap Data</h4>
																</div>
																<div class="modal-body">

																	<form action="{{route('rekappdf.pemuda_olahraga')}}" target="_blank" enctype="multipart/form-data">
																	{{ csrf_field() }}
																	<table>
																		<tr>
																			<td>
																				<div class="form-group">Dari Tanggal</div>
																			</td>
																			<td align="center" width="5%">
																				<div class="form-group">:</div>
																			</td>
																			<td>
																				<div class="form-group">
																					<input type="date" class="form-control" name="tgl-awal" value="{{ date('Y-m-d') }}" required>
																				</div>
																			</td>
																		</tr>

																		<tr>
																			<td>
																				<div class="form-group">Sampai Tanggal</div>
																			</td>
																			<td align="center">
																				<div class="form-group">:</div>
																			</td>
																			<td>
																				<div class="form-group">
																					<input type="date" class="form-control" name="tgl-akhir" value="{{ date('Y-m-d') }}" required>
																				</div>
																			</td>
																		</tr>

																		<tr>
																			<td></td>
																			<td></td>
																			<td>
																				<input type="submit" class="btn btn-primary" name="rekap-data" value="Cetak">
																			</td>
																		</tr>
																	</table>
																</form>

																</div>
																<div class="modal-footer">
																	<button type="submit" class="btn btn-fill">Cetak Semua Data</button>
																</div>
															</div>
														</form>
													</div>
												</div>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{asset('dashboard/assets/img/side-1.jpg')}}">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

		<nav class="sidebar-wrapper">
		@section('sidebar')
				@include('layouts.sidebar')
		@show
		</nav>
    </div>

    <div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
			@section('header')
					@include('layouts.header')
			@show
			</nav>

				<!-- <div>
					<a href="{{route ('rekappdf.pemuda_olahraga')}}" class="btn btn-fill pull-left" style="margin-top: 20px; margin-bottom: 10px; margin-left: 10px;">
						Rekap
					</a>
				</div> -->

        <div class="content">
            <div class="container-fluid">
                <div class="row">
									<center>
									<style type="text/css">
											.pagination li{
												float: left;
												list-style-type: none;
												margin:5px;
											}
										</style>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header" style="margin-bottom: 50px;">
																<div>
																	<a href="{{route('create.pemuda_olahraga')}}" class="btn btn-info btn-fill pull-left" style="margin-right: 5px; margin-top: 5px;">
																		Tambah Data
																	</a>
																</div>

																<button type="button" class="btn btn-info btn-fill pull-left" data-toggle="modal" data-target="#myModal" style="margin-right: 53%; margin-top: 5px;">
																	Cetak
																</button>

																<div class="pull-left" style="margin-bottom: 20px; margin-top: 5px;">
																	<form action="{{route('cari.pemuda_olahraga')}}" method="GET">
																		<input class="btn btn-info" type="submit" value="Search">
																		<input class="form-search" type="text" name="cari" placeholder="    Cari" value="{{ old('cari') }}">
																	</form>
																</div>
                            </div>
														<div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
	                                    <th><center>Tanggal</center></th>
                                    	<th><center>Jenis Perlombaan</center></th>
                                    	<th><center>Jumlah Total Prestasi</center></th>
                                    </thead>
                                    <tbody>
																			@foreach($datas as $data)
																				<tr>
                                        	<td>
																						<a href="{{route('show.pemuda_olahraga.edit', $data->id)}}">
																							<center>{{date('d-m-Y', strtotime($data->tanggal))}}</center>
																						</a>
																					</td>

                                        	<td>
																						<center>{{$data->jenis_lomba}}</center>
																					</td>

                                        	<td>
																						<center>{{$data->jumlah_prestasi}}</center>
																					</td>

																					<td>
																						<div class="btn-group dropdown">
									                          <button type="button" class="btn btn-success dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									                            Action
									                          </button>

																						<ul class="dropdown-menu">
									                            <li>
									                                <a href="{{route ('cetakpdf.pemuda_olahraga', $data->id) }}" class="pe-7s-print">
									                                    &nbsp&nbsp&nbsp Print
									                                </a>
									                            </li>
									                            <li>
									                                <a href="{{route ('delete.pemuda_olahraga', $data->id) }}" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="pe-7s-trash">
									                                    &nbsp&nbsp&nbsp Delete
									                                </a>
									                            </li>
									                          </ul>

																					</div>
																					</td>

                                        </tr>
																				@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
{{ $datas->links() }}
                </div>
            </div>
        </div>

				<footer class="footer">
				@section('footer')
						@include('layouts.footer')
				@show
				</footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{asset('dashboard/assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('dashboard/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('dashboard/assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('dashboard/assets/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('dashboard/assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('dashboard/assets/js/demo.js')}}"></script>


</html>
