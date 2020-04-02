<!DOCTYPE html>
<html lang="en">
<head>
<title>Đăng Ký</title>
<meta charset="UTF-8">

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
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
</head>
<body>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
<form class="login100-form validate-form" method="POST" action="{{ route('store') }}">
    @csrf
    @method('Post')
    {{ method_field("POST") }}
<span class="login100-form-title p-b-37">
Đăng ký
</span>
<div class="wrap-input100 validate-input m-b-20" data-validate="Nhập tên người dùng">
<input class="input100" type="text" name="name" placeholder="Nhập tên người dùng ">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-20" data-validate="Nhập email">
    <input class="input100" type="gmail" name="email" placeholder="Nhập tên email">
    <span class="focus-input100"></span>
    </div>
<div class="wrap-input100 validate-input m-b-25" data-validate="Nhập mật khẩu">
<input class="input100" type="password" name="password" placeholder="Mật khẩu">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-25" data-validate="Nhập mật khẩu">
    <input id="" class="input100" type="password1" name="password1" placeholder="Mật khẩu">
    <span class="focus-input100"></span>
    </div>
<div class="container-login100-form-btn">
<button class="login100-form-btn">
Đăng ký
</button>
</div>

</form>
{{-- <form action="{{ route('store') }}" method="POST" >
    @csrf
    @method('Post')
    {{ method_field("POST") }}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control" placeholder="password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email</strong>
                <input type="email" class="form-control"  name="email" placeholder="email">

            </div>
        </div>
        <div class="col-md-3">
            <img id="output_image"alt="" class="img-circle" src="#"  style="width: 200px; height: 200px"/>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" name = "update" class="btn btn-primary">Đồng ý đăng ký </button>

        </div>
    </div>
</form> --}}
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js" type="8b56910566ba752a634f3984-text/javascript"></script>

<script src="vendor/animsition/js/animsition.min.js" type="8b56910566ba752a634f3984-text/javascript"></script>

<script src="vendor/bootstrap/js/popper.js" type="8b56910566ba752a634f3984-text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js" type="8b56910566ba752a634f3984-text/javascript"></script>

<script src="vendor/select2/select2.min.js" type="8b56910566ba752a634f3984-text/javascript"></script>

<script src="vendor/daterangepicker/moment.min.js" type="8b56910566ba752a634f3984-text/javascript"></script>
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



