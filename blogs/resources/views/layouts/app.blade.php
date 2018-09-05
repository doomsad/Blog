<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Blog</title>
</head>
<body>
	<div class="container">
		@include('in.submitresult')
		@include('in.nav')
    @yield('content')
    </div>
</body>
</html>