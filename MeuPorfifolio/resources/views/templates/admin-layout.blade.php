<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	
	<!-- Title -->
	<title>Polyana - Portfolio Pessoal</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="{{ asset('fonts/fontawesome-webfont.eot') }}"rel="stylesheet">
	<!-- Site Icons css -->
	<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Site All plugins css -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/magnific-popup.min.css') }}" rel="stylesheet">
	
	<!-- Site Main Style sheet css -->
	<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


</head>

<body>
	
	@yield('content')
	
	<!-- Site all Jquery js -->
	<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>
	<script src="{{ asset('js/animated.headline.js') }}"></script>
	<script src="{{ asset('js/isotope.min.js') }}"></script>
	<script src="{{ asset('js/ajax-mail.js') }}"></script>
	<!-- Site Main js -->
	<script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>