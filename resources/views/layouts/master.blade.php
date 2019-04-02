    
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/all.css')}}">
	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('js/all.js')}}"></script>
</head>
<body>
	@yield('content')
</body>
</html>