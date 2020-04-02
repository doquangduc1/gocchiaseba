<!DOCTYPE html>
<html lang="en">
<head>
<title>Đăng Nhập</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="img/png" href="img/icons/favicon.png" />

<link rel="stylesheet"  href="<?php echo asset('css/bootstrap.min.css')?>">

<link rel="stylesheet" type="text/css" href="css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../../../public/css/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="css/fonts/iconic/css/material-design-iconic-font.min.css">
    <link href="{{ URL::asset('css/css-hamburgers/hamburgers.css') }}" rel="stylesheet">
<link rel="stylesheet" href="<?php echo asset('css/animate/animate.css')?>">
<link rel="stylesheet"  href="<?php echo asset('css/css-hamburgers/hamburgers.css')?>">
<link rel="stylesheet"  href="<?php echo asset('css/animsition/css/animsition.css/animsition.min.css')?>">
<link rel="stylesheet"  href="<?php echo asset('css/select2/select2.min.css')?>">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker/daterangepicker.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}" >
<link rel="stylesheet"  href="<?php echo asset('css/mainlogin.css')?>">
</head>
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if(count($errors)>0)
<div class="alert alert-danger">
        @foreach($errors ->all() as $err)
            {{$err}}<br>
            @endforeach
</div>
@endif
@if(session('thongbao'))
    {{session('thongbao')}}
@endif
<body>
<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
<form class="login100-form validate-form" action="{{route('login')}}"  method="POST">
    @csrf
    {!! csrf_field() !!}
    @method('POST')
<span class="login100-form-title p-b-37">Đăng nhập</span>
<div class="wrap-input100 validate-input m-b-20" data-validate="Nhập tên người dùng hoặc email">
<input class="input100" type="text" name="email" placeholder="Nhập tên người dùng hoặc email">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-25" data-validate="Nhập mật khẩu">
<input class="input100" type="password" name="password" placeholder="Mật khẩu">
<span class="focus-input100"></span>
</div>
<div class="container-login100-form-btn">
<button class="login100-form-btn">
Đăng nhập
</button>
</div>
<div class="text-center p-t-57 p-b-20">
{{-- <span class="txt1">
Hoặc đăng nhập bằng
</span>
</div>
<div class="flex-c p-b-112">
<a href="#" class="login100-social-item">
<i class="fa fa-facebook-f"></i>
</a>
<a href="#" class="login100-social-item">
<img src="img/icons/icon-google.png" alt="GOOGLE">
</a>
</div>
<div class="text-center"> --}}
<a href="{{route('register')}}" class="txt2 hov1">
Đăng kí
</a>
</div>
</form>
</div>
</div>
<div id="dropDownSelect1"></div>

<script rc="{{ URL::asset('css/jquery/jquery-3.2.1.min.js') }}" type="8b56910566ba752a634f3984-text/javascript"></script>
<script rc="{{ URL::asset('css/animsition/js/animsition.min.js') }}" type="8b56910566ba752a634f3984-text/javascript"></script>
<script rc="{{ URL::asset('css/bootstrap/js/popper.js') }}" type="8b56910566ba752a634f3984-text/javascript"></script>
<script rc="{{ URL::asset('css/bootstrap/js/bootstrap.min.js') }}" type="8b56910566ba752a634f3984-text/javascript"></script>
<script rc="{{ URL::asset('css/select2/select2.min.js') }}" type="8b56910566ba752a634f3984-text/javascript"></script>
<script rc="{{ URL::asset('css/daterangepicker/moment.min.js') }}" type="8b56910566ba752a634f3984-text/javascript"></script>


<script src="vendor/daterangepicker/daterangepicker.js" type="8b56910566ba752a634f3984-text/javascript"></script>

<script src="vendor/countdowntime/countdowntime.js" type="8b56910566ba752a634f3984-text/javascript"></script>

<script src="js/main.js" type="8b56910566ba752a634f3984-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="8b56910566ba752a634f3984-text/javascript"></script>
<script type="8b56910566ba752a634f3984-text/javascript">
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="8b56910566ba752a634f3984-|49" defer=""></script></body>
</html>
