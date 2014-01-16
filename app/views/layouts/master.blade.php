<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Template</title>
    {{HTML::style('css/style.css')}}
</head>
<body style="background:snow;">
	<header>Laravel 4 Basic</header>
    
    <div class="container">
    	<div id="content">
    	@yield('content')
    	</div>
    </div>
</body>
</html>
