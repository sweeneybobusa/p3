@extends('_master')

@section('title')
Developer&rsquo;s Best Friend
@stop

@section('content')
<p>Welcome to Developer's best friend. A collection of applications to help you generate passwords, text, and seed databases. </p>
			
		<article>
		<h2>The Generators</h2>		
		<!-- ipsum generator -->
		<div class="row">
			<div class="large-7 medium-8 columns">
				<h3>Lorum Ipsum</h3>
				<p>For those times where you just want to have a bunch dummy text so your client won&rsquo;t be distracted by actual words. Get as many paragraphs as you need (up to 100) by going to <a href="/lorem-ipsum">Lorem-Ipsum Generator</a> and adding a &ldquo;/[number]&rdquo; (i.e., <a href="/lorem-ipsum/5">lorem-ipsum/5</a>)
</p>
				
				<!-- 1 paragraph example here -->
				<div class="panel" id="lorem-ipsum">
					<h3>Randomly Generated text</h3>
					
					<!-- generate example paragraph -->
					<?php $generator = new Badcow\LoremIpsum\Generator();
					 		$paragraphs = $generator->getParagraphs(1);
			        	 	$lorem_ipsum_paragraph = implode('</p><p>', $paragraphs); 
			        ?>
			        	 	<p>{{$lorem_ipsum_paragraph}}</p>
			        	 	
					<!-- end lorum ipsum panel -->
				</div>
			</div>
		
		<!-- Random User Panel-->
			<div class="large-5 medium-4 columns end">
				<h3>Random User</h3>
				<p>Need a few dummies to fill in your database? We can help find you a few random folks. </p><p>Get more users by going to <a href="/user-generator">User Generator</a> and adding a &ldquo;/[number]&rdquo; (i.e., <a href="/user-generator/5">user-generator/5</a>)</p>
				
				<!-- 1 paragraph example here -->
				<div class="panel" id="user-generator">
					<h3>Random User</h3>
					<?php	$faker = Faker\Factory::create(); 
								$user_first_name = $faker->firstName;
								$user_last_name = $faker->lastName;
								$user_name = $user_first_name . " " . $user_last_name;
								$user_address = $faker->address;
								$user_bio = $faker->text;
					?>
					<h4>{{ $user_name }}</h4>
					<h5>{{  $user_first_name }}&rsquo;s address:</h5>
					<p>{{ $user_address }}</p>
				<h5>{{  $user_first_name }}&rsquo;s bio:</h5>
				<p>{{ $user_bio }}</p>
			</div>
		</div>
		
		<!--end content-->		
		</article>
@stop
