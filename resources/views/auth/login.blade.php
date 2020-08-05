<!DOCTYPE html>
<html lang="en">
<head>
	<title>Disbudparpora Kota Kediri</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="{{asset('dashboard/assets/img/logo.ico')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('loginku/vendor/bootstrap/css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('loginku/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('loginku/fonts/iconic/css/material-design-iconic-font.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('loginku/vendor/animate/animate.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('loginku/vendor/css-hamburgers/hamburgers.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('loginku/vendor/animsition/css/animsition.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('loginku/vendor/select2/select2.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('loginku/vendor/daterangepicker/daterangepicker.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('loginku/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('loginku/css/main.css')}}">
	<script src="{{asset('public/js/jquery.js')}}"></script>

</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{asset('loginku/images/jembatan.jpg')}}');">
			<div class="wrap-login100">
				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
					@csrf

					<span class="login100-form-logo">
						<img  src="{{asset('dashboard/assets/img/kota-kediri1.png')}}" alt="..."/>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Disbudparpora Kota Kediri
					</span>

					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter Email Address">
						<input class="input100" type="text" name="email" placeholder="Email Address">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					@if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
					</div>

					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="pwd" class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					@if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
					</div>

					<input type="checkbox" class="form-checkbox"> Show password

					<div class="container-login100-form-btn p-t-50">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>


	<script src="{{asset('loginku/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

	<script src="{{asset('loginku/vendor/animsition/js/animsition.min.js')}}"></script>

	<script src="{{asset('loginku/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('loginku/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

	<script src="{{asset('loginku/vendor/select2/select2.min.js')}}"></script>

	<script src="{{asset('loginku/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('loginku/vendor/daterangepicker/daterangepicker.js')}}"></script>

	<script src="{{asset('loginku/vendor/countdowntime/countdowntime.js')}}"></script>

	<script src="{{asset('loginku/js/main.js')}}"></script>

</body>
<script src="{{asset('dashboard/assets/js/demo.js')}}"></script>
<script type="text/javascript">
var password = document.getElementById('pwd');
	$(document).ready(function(){
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$(password).attr('type','text');
			}else{
				$(password).attr('type','password');
			}
		});
	});
</script>
</html>
