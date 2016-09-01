<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />	
	<title>Blog for phpgirls (test)</title>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/customize.css')}}">
</head>
<body>
	<div class="container">
		<div class="page-header">
			@yield('header')	
		</div>

		@if (Session::has('success'))
			<div class="alert alert-success" role="alert">
				{{ Session::get('success') }}
			</div>
		@endif

		@yield('content')
	</div>
</body>
</html>