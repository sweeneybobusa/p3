<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8" />
	<title>@yield('title','Developer&rsquo;s Best Friend')</title>
	<link rel="stylesheet" href="{{ URL::asset('/stylesheets/app.css') }}" />
	<link href='http://fonts.googleapis.com/css?family=Rye' rel='stylesheet' type='text/css'>
	<script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body>
	<!--outer wrapper -->
	<div class="row wrapper" >
		<!--header-->
      	<header class="large-10 large-centered columns">
        <h1>@yield('title','Developer&rsquo;s Best Friend')</h1>
      	</header>
      	
      	<!--content-->
      	<section class="content large-10 large-centered columns">
		@yield('content','<p>Lookey here: a blank page!</p>')
      	</section>
	<div class="row">
	<footer class="large-10 large-centered medium-10 medium-centered small-12 columns end">
			<p>&copy; copyright 2014 Bob Sweeney</p>
	</footer>
	</div>
 	</div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>

    </body>
</html>
