@extends('_master')
@section('title') User Generator @stop

@section('content')
<?php require_once '../vendor/fzaninotto/faker/src/autoload.php'; ?>
	<p>@if (isset($message)){{ $message }} @endif 
	Here&rsquo;s {{$default_users}} Users. To generate more, change the number in the url next to  the / above (ie, <a href="6">user-generator/6</a>).</p>
	<div class="panel large-12 large-centered medium-12 medium-centered columns">
		<div class="row">
		<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
			<?php for ($i = 0; $i < $default_users; $i++) {
				  
						$faker = Faker\Factory::create(); 
						$user_first_name = $faker->firstName;
						$user_last_name = $faker->lastName;
						$user_name = $user_first_name . " " . $user_last_name;
						$user_address = $faker->address;
						$user_bio = $faker->text; 
				?>
				<li>
						<h4>{{ $user_name }}</h4>
						<h5>{{  $user_first_name }}&rsquo;s address:</h5>
						<p>{{ $user_address }}</p>
						<h5>{{ $user_first_name }}&rsquo;s bio:</h5>
						<p>{{ $user_bio }}</p>
				</li>
			<?php } ?>
		</ul>
		</div>
	</div>
@stop
