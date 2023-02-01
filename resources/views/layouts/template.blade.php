<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		<meta name="author" content="Amanda Moreira" />
		<meta http-equiv="cache-control" content="private" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="copyright" content="© 2023 Amanda Moreira" />
		<meta name="description" content="Challenge Space Flight News" />
		<meta name="keywords" content="challenge, oz technology, desafio, api space flight news" />

		<link rel="icon" type="image/png" href="/img/logo/logo_background_blue.png" />
		<link rel="shortcut icon" type="image/x-icon" href="/img/logo/logo_background_blue.png" />

		<meta name="csrf-token" content="{{ csrf_token() }}" />

		<title>@yield('title')</title>

		<link rel="stylesheet" href="{!! asset('css/app.css') !!}" />

		@stack('css')
</head>

<body onload="loading()">
		<div class="container-fluid p-0">
				@include('components.navbar-header')
		</div>

		<div class="container-fluid p-0">
				{{-- Loading --}}
				<div class="box-loader"><span class="loader"></span></div>

				@yield('content')
		</div>

		<div class="container-fluid p-0 navbar-footer">
				{{-- @include('components.navbar-footer') --}}
		</div>
</body>

<script src="{!! asset('js/app.js') !!}"></script>

<script>
		function loading() {
				$('.box-loader').css('display', 'none');
		}
</script>

@stack('js')

</html>
