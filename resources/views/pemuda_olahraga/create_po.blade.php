<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('dashboard/assets/img/logo.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Disbudparpora Kota Kediri</title>

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
		<script src="{{asset('public/js/jquery.js')}}"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{asset('dashboard/assets/img/sidebar-5.jpg')}}">

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


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">DATA KEPEMUDAAN dan OLAHRAGA</h4>
                            </div>
                            <div class="content">

															<form class="" id="form_create" action="{{route('store.pemuda_olahraga')}}" method="post" enctype="multipart/form-data">
																{{ csrf_field() }}



																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
																							<label for="tanggal"><b>Tanggal</b></label>
																							<input id="tanggal" type="date" class="form-control" placeholder="Tanggal" name="tanggal" value="{{ date('Y-m-d') }}" required="">
																							@if ($errors->has('tanggal'))
							                                    <span class="help-block">
							                                        <strong>{{ $errors->first('tanggal') }}</strong>
							                                    </span>
							                                @endif
																					</div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group {{ $errors->has('jenis_lomba') ? ' has-error' : '' }}">
																							<label><b>Jenis Perlombaan</b></label>
																							<input id="jenis_lomba" class="form-control" placeholder="Jenis Perlombaan" name="jenis_lomba" value="{{ old('jenis_lomba') }}" required="">
																							@if ($errors->has('jenis_lomba'))
							                                    <span class="help-block">
							                                        <strong>{{ $errors->first('jenis_lomba') }}</strong>
							                                    </span>
							                                @endif
																					</div>
																			</div>
																	</div>

																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label><b>Emas</b></label>
																							<input id="emas" type="text" class="form-control" name="emas" onkeyup="sum();" placeholder="Emas" value="0">
																					</div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label><b>Perak</b></label>
																							<input id="perak" type="text" class="form-control" name="perak" onkeyup="sum();" placeholder="Perak" value="0">
																					</div>
																			</div>
																	</div>

																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label><b>Perunggu</b></label>
																							<input id="perunggu" type="text" class="form-control" name="perunggu" onkeyup="sum();" placeholder="Perunggu" value="0">
																					</div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																								<label><b>Piagam Penghargaan</b></label>
																							<input id="piagam" type="text" class="form-control" name="piagam" onkeyup="sum();" placeholder="Piagam Penghargaan" value="0">
																					</div>
																			</div>
																	</div>

																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label><b>Jumlah Total Prestasi</b></label>
																							<input id="jumlah_prestasi" type="text" class="form-control" name="jumlah_prestasi" placeholder="Jumlah Total Prestasi" readonly value="">
																					</div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label><b>Foto Kegiatan</b></label>
																								<div class="col-md-12">
																									<img width="200" height="200" />
																								</div>
																								<input id="ft_kegiatan" type="file" name="ft_kegiatan" class="uploads form-control">
																								<p> </p>
																								<span>File harus berformat .jpg atau .jpeg</span>
																					</div>
																			</div>
																	</div>




                                    <button type="submit" form="form_create" class="btn btn-info btn-fill pull-left">Submit</button>
																		<button type="reset" class="btn btn-danger btn-fill" style="margin-left: 12px;">Reset</button>
																		<a href="{{route('pemuda_olahraga')}}" class="btn btn-fill pull-right">Back</a>
                                    <div class="clearfix"></div>
                                </form>
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

</html>
<script>
function sum() {
      var emas = document.getElementById('emas').value;
      var perak = document.getElementById('perak').value;
			var perunggu = document.getElementById('perunggu').value;
			var piagam = document.getElementById('piagam').value;
      var jumlah = parseFloat(emas) + parseFloat(perak) + parseFloat(perunggu) + parseFloat(piagam);
      if (!isNaN(jumlah)) {
         document.getElementById('jumlah_prestasi').value = jumlah;
      }
}
</script>
