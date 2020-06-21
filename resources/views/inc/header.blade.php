<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<title>YDTurk</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<link rel="stylesheet" href="{{ asset('/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>
<body>
    
<div id="preloader">
    <img class="logo" src="{{ asset('/images/logo1.png') }}" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>

@yield('content')

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/plugins2.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>