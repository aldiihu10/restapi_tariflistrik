<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('dashboard/assets/img/logo.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Indikator Kinerja Daerah</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


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

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{asset('dashboard/assets/img/side-2.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
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


        <div class="content">
            <div class="container-fluid">
                <div class="row">
									<div class="col-md-12">
													<div class="header">
															<div class="col-md-12">
																	<img width="100%" height="100%" src="{{ asset('images/wallpaper.jpg') }}" />
															</div>
													</div>
										</div>

                    <div class="col-md-6">
											<br>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Penonton</h4>
																<!-- © ig:afisaldi_wijanarko -->
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div class="footer">
																	<center>
                                    <div class="content all-icons">
                                        <i class="pe-7s-users text-danger"></i>&nbsp&nbsp
                                        <i class="pe-7s-users text-info"></i>
																				<br>
																				{{$data->sum('p_lokal')}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																				{{$data->sum('p_mancanegara')}}
                                    </div>
																	</center>
																		<br>
																		<div class="stats">
																			<i class="fa fa-circle text-danger"></i><i>pengunjung lokal</i>&nbsp
																			<i class="fa fa-circle text-info"></i><i>pengunjung mancanegara</i>
																		</div>
                                    <hr>
                                    <div class="stats">
                                        <i class="pe-7s-users"></i> Jumlah Seluruh Penonton : {{$data->sum('total_pengunjung')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

										<div class="col-md-6">
											<br>
                        <div class="card">
                            <div class="header">
															<!-- © ig:afisaldi_wijanarko -->
                                <h4 class="title">Prestasi</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div class="footer">
																	<center>
                                    <div class="content all-icons">
                                        <i class="pe-7s-medal text-danger"></i>&nbsp&nbsp
                                        <i class="pe-7s-medal text-warning"></i>&nbsp&nbsp
                                        <i class="pe-7s-medal text-success"></i>&nbsp&nbsp
																				<i class="pe-7s-medal text-info"></i>
																				<br>
																				{{$datas->sum('emas')}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																				{{$datas->sum('perak')}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																				{{$datas->sum('perunggu')}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																				{{$datas->sum('piagam')}}
                                    </div>
																	</center>
																		<br>
																		<div class="stats">
																			<i class="fa fa-circle text-danger"></i><i>emas</i>&nbsp
																			<i class="fa fa-circle text-warning"></i><i>perak</i>&nbsp
																			<i class="fa fa-circle text-success"></i><i>perunggu</i>&nbsp
																			<i class="fa fa-circle text-info"></i><i>piagam</i>
																		</div>
                                    <hr>
                                    <div class="stats">
                                        <i class="pe-7s-medal"></i> Jumlah Seluruh Prestasi : {{$datas->sum('jumlah_prestasi')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

										<div class="col-md-12">
                        <div class="card">
														<div class="header">
															<h4 class="title">Visi Misi</h4>
														</div>
														<br>
														<h5 class="title" style="margin-left: 20px;">Visi</h5>
														<li style="margin-left: 50px;">MEWUJUDKAN KEDIRI SEBAGAI KOTA BUDAYA, TUJUAN WISATA YANG KREATIF, INOVATIF, DAN
															BERPRESTASI OLAHRAGA.
														</li>
														<br>
														<h5 class="title" style="margin-left: 20px;">Misi</h5>
														<li style="margin-left: 50px;">Meningkatkan pengembangan, pemeliharaan, pelestarian dan penggalian kesenian, kesejarahan
															dan kebudayaan Kota Kediri.
														</li>
														<li style="margin-left: 50px;">Meningkatkan pelayanan, pembinaan dan peran serta masyarakat dalam bidang kesenian,
															kesejarahan dan kebudayaan.
														</li>
														<li style="margin-left: 50px;">Membentuk masyarakat sadar wisata untuk mewujudkan destinasi wisata dan ekonomi kerakyatan
															yang handal.
														</li>
														<li style="margin-left: 50px;">Meningkatkan kreatifitas dan pemuda yang berakhlak mulia, sehat tangguh, cerdas, mandiri
															dan profesional.
														</li>
														<li style="margin-left: 50px;">Mewujudkan olahraga prestasi yang mampu bersaing di tingkat regional, nasional dan internasional.
														</li>
														<li style="margin-left: 50px;">Mewujudkan dan meningkatkan olahraga rekreasi di masyarakat.
														</li>
														<br>
														<hr>

														<div class="header">
															<h4 class="title">Gambaran Umum</h4>
														</div>
														<br>
														<li style="margin-left: 20px;">Dinas Kebudayaan, Pariwisata, Kepemudaan dan Olahraga merupakan unsur
															pelaksana urusan pemerintahan dibidang kebudayaan, pariwisata, kepemudaan dan olahraga.
														</li>
														<li style="margin-left: 20px;">Dinas dipimpin oleh seorang Kepala Dinas yang berada di bawah dan bertanggung jawab
															kepada Walikota melalui Sekretaris Daerah.
														</li>
														<br>
														<hr>
													</div>
										</div>

										<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Struktur Organisasi</h4>
                            </div>
														<br>
														<h5 style="margin-left: 20px;">Susunan Organisasi :</h5>
														<div>
															<p style="margin-left: 25px;">a. Kepala Dinas;</p>
															<p style="margin-left: 25px;">b. Sekretariat, membawahi :
																<p style="margin-left: 45px;">1. Sub Bagian Umum;</p>
																<p style="margin-left: 45px;">2. Sub Bagian Keuangan;</p>
																<p style="margin-left: 45px;">3. Sub Bagian Program</p>
															</p>
															<p style="margin-left: 25px;">c. Bidang Kebudayaan, membawahi :
																<p style="margin-left: 45px;">1. Seksi Perencanaan dan Pembinaan Program Kebudayaan;</p>
																<p style="margin-left: 45px;">2. Seksi Pemberdayaan Kesenian Rakyat;</p>
																<p style="margin-left: 45px;">3. Seksi Sejarah dan Kepurbakalaan.</p>
															</p>
															<p style="margin-left: 25px;">d. Bidang Pariwisata, membawahi :
																<p style="margin-left: 45px;">1. Seksi Pengembangan Obyek Wisata;</p>
																<p style="margin-left: 45px;">2. Seksi Pemasaran Pariwisata, Pengembangan Sumber Daya Pariwisata dan Ekonomi Kreatif.</p>
															</p>
															<p style="margin-left: 25px;">e. Bidang Kepemudaan, membawahi :
																<p style="margin-left: 45px;">1. Seksi Pembinaan dan Kerjasama Lembaga Kepemudaan;</p>
																<p style="margin-left: 45px;">2. Seksi Pemberdayaan Pemuda.</p>
															</p>
															<p style="margin-left: 25px;">f. Bidang Olahraga, membawahi :
																<p style="margin-left: 45px;">1. Seksi Infrastruktur dan Kemitraan Keolahragaan;</p>
																<p style="margin-left: 45px;">2. Seksi Pembinaan dan Pemasyarakatan Olahraga;</p>
																<p style="margin-left: 45px;">3. Seksi Peningkatan Prestasi Keolahragaan.</p>
															</p>
															<p style="margin-left: 25px;">g. UPT Dinas; dan</p>
															<p style="margin-left: 25px;">h. Kelompok Jabatan Fungsional.</p>
														</div>
												</div>
										</div>
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

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-user',
            	message: "Selamat Datang Admin - {{Auth::user()->name}}"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
