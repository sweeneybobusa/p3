<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8" />
	<title>Testing</title>
	<link rel="stylesheet" href="stylesheets/app.css" />
	<link href='http://fonts.googleapis.com/css?family=Rye' rel='stylesheet' type='text/css'>
	<script src="bower_components/modernizr/modernizr.js"></script>
	<?php  require_once '../vendor/fzaninotto/faker/src/autoload.php'; ?>

</head>
<body>
	<!--outer wrapper -->
	<div class="row wrapper" >
		<!--header-->
      	<header class="large-10 large-centered columns">
       		 <h1>Developer&rsquo;s Best Friend</h1>
      	</header>
      	
      	<!--content-->
      	<section class="content large-10 large-centered columns">
			<p>Welcome to Developer's best friend. A collection of applications to help you generate passwords, text, and seed databases. </p>
			
		<article>
		<h2>The Generators</h2>		
		<!-- ipsum generator -->
		
		<div class="large-8 medium-8 columns">
		<h3>Lorum Ipsum</h3>
		<p>For those times where you just want to have a bunch dummy text so your client won&rsquo;t be distracted by actual words.</p>
			<!-- 1 paragraph example here -->
			<div class="panel" id="lorem-ipsum">
				<p><?php $generator = new Badcow\LoremIpsum\Generator();
					 	$paragraphs = $generator->getParagraphs(1);
			         	echo implode('</p><p>', $paragraphs); ?></p>
				<p>Get more users by going to <a href="/lorem-ipsum">Lorem-Ipsum Generator</a> and adding a &ldquo;/[number]&rdquo; (i.e., <a href="/lorem-ipsum/5">lorem-ipsum/5</a>)</p>

			</div>
		</div>
		
		
		<div class="large-4 medium-4 columns">
		<h3>Random User</h3>
		<p>Need a few dummies to fill in your database? We can help find you a few random folks. </p>
			<!-- 1 paragraph example here -->
			<div class="panel" id="user-generator">
				<?php  $faker = Faker\Factory::create(); ?>
				<h4><?php echo $faker->name, "\n"; ?></h4>
				<h5>Address:</h5>
				<p><?php echo $faker->address; ?></p>
				<h5>Personal quote:</h5>
				<p>&ldquo;<?php echo $faker->text; ?>&rdquo;</p>
			
				<p>Get more users by going to <a href="/user-generator">User Generator</a> and adding a &ldquo;/[number]&rdquo; (i.e., <a href="/user-generator/5">user-generator/5</a>)</p>

			</div>
		</div>
		
		<!--end content-->		
		</article>
		
	</section>
	<footer class="large-10 large-centered medium-10 medium-centered small-12 columns end">
			<p>&copy; copyright 2014 Bob Sweeney</p>
	</footer>
 	</div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>

    </body>
</html>
