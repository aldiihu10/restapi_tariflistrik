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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form method="post" enctype="multipart/form-data" action="{{route('update.auth', Auth::user()->id)}}">
																	{{ csrf_field() }}
																	{{ method_field('PATCH') }}
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label><b>Gambar</b></label>
																								<div class="col-md-12">

																										<img width="200" height="200" src="{{ asset('images/user/'.Auth::user()->images) }}" />

																								</div>
																								<input type="file" class="uploads form-control" name="images" value="{{Auth::user()->images}}">
																					</div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label><b>Name</b></label>
																							<input type="text" class="form-control" placeholder="Name" name="name" value="{{Auth::user()->name}}">
																					</div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label><b>Email Address</b></label>
																							<input type="text" class="form-control" disabled placeholder="Email Address" value="{{Auth::user()->email}}">
																					</div>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-md-6">
																					<div class="form-group">
																							<label><b>Password</b></label>
																							<input class="form-control" type="password" placeholder="Password" value="" required="">
																					</div>
																			</div>
																	</div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="{{asset('dashboard/assets/img/faces/face-3.jpg')}}" alt="..."/>

                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div> -->

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

</html>
