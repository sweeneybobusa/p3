<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index_blade');
});

// **
// * Get Route for Lorem Ipsum
// *

Route::get('/lorem-ipsum/{url_variable?}', function($url_variable = null) {
$item_generated = "paragraph";
$pluralize = "s";

$variable_default = 4;
//	test to see if value is set
	if (isset($url_variable)){

/*  if set testing for url string: 
	Note: I tried testing for the value to be an integer but 
	it seems that php will return a false value unless the 
	variable is expressly set as an integer, so i decided 
	to test numerically and return an integer conversion if numeric.
	I tried to account for 0 and negative numbers.
*/
		if (is_numeric($url_variable)){
				$url_variable = intval($url_variable);
				$message = "";
				if ($url_variable == 1) {
					$pluralize = "";
				}
				elseif ($url_variable == 0) {
					$message = "I guess you didn't want any paragraphs.";
				}
				elseif ($url_variable < 0) {
					$message = "Such a Negative Nelly. I changed your number to a positive. ";
					$url_variable = $url_variable * -1;
				}
				
			}
		
// if not, set to default and generate custom error message
		else {
				$message = "Oops, I can process numbers (ie, 10 not &ldqo;ten$rdquo;).";
				$url_variable = $variable_default;
			}
		}

// the variable wasn't set, set default value
else {
	$message = "Welcome!";
	$url_variable = $variable_default;
	}

$message_base = "<p> {$message} Here&rsquo;s {$url_variable} {$item_generated}{$pluralize} </p>"; 

	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($url_variable);
	echo  $message_base . '<div class="panel"><p>' . implode('</p><p>', $paragraphs) . "</p></div>";

});

// **
// * putting route for the number for the paragraphs
// *

Route::put('/lorem-ipsum/{lorem_paragraphs}', function($lorem_paragraphs) {
// need test for integers then for numbers then for error message with default
	$default_paragraphs = $lorem_paragraphs;
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($default_paragraphs);
	echo implode('<p>', $paragraphs);
});

// **
// * Get route for User Generator
// *

Route::get('/user_generator', function() {
echo "<h1>User Generator </h1>";
require_once '../vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();
$default_users = 7;
for ($i=0; $i < $default_users; $i++) {
	echo "<p>" . $faker->name, "\n" . "<br />";
	echo $faker->address . "<br />";
	echo $faker->text . "</p>";
}

});


// **
// * Get route for User Generator
// *

Route::get('/user_generator/{number_users}', function($number_users) {
echo "<h1>User Generator </h1>";
$default_users = $number_users;
require_once '../vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();

for ($i=0; $i < $default_users; $i++) {
	echo "<p>" . $faker->name, "\n" . "<br />";
	echo $faker->address . "<br />";
	echo $faker->text . "</p>";
}

});