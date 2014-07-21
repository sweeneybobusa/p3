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

/*-------------------------------------------------------------
| Classes used to test number, I tried to use: @include("app/tests/TestNumber.php");
| to import logic from tests folder but couldn't get it to function
*/
class NewNumber {
		var $number;
		var $feedback_message;
		var $variable_default;

		
		public function set_number($new_number) {
		
//	setting defaults
		$this->feedback_message = "";
		$this->variable_default = 4;
		
//	checking if number is set
		if (isset($new_number)){
		
//	if yes, then check if it's a number
			if (is_numeric($new_number)) {
			
				// if yes, then set to intiger
				$this->number = intval($new_number);
				
				//check for 0, 1, or negative numbers
				if ($this->number == 0){
					$this->feedback_message = "I can't give you zero results, silly! ";
				}
				elseif ($this->number == 1){
					$this->feedback_message = "One. Singular sensation! ";
				}
				elseif ($this->number < 0){
					$this->number = $this->number * -1;
					$this->feedback_message = "Why so negative? I strive to be positive whenever I can";
				}
			}
			
			// if not a number, set to default value and give can't process characters message
			else {
				$this->number = $this->variable_default;
				$this->feedback_message = "I can't process anything but numbers, sad to say. But I did want to give you some results";
				}
		}
		
		// if not set set default and welcome message
		else{
			$this->feedback_message = "Welcome!";
			$this->number = $this->variable_default;
		}
		
	}
};


/*--------------------------
| index page
| --------------------------
*/

Route::get('/', function()
{
	return View::make('index');
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

Route::get('/user-generator', function() {
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

Route::get('/user-generator/{user_url}', function($user_url) {
echo "<h1>User Generator </h1>";
$user_count = new NewNumber($user_url);
$user_count->set_number($user_url);
$count = $user_count->number;

require_once '../vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();

for ($i=0; $i < $count; $i++) {
	echo "<p>" . $faker->name, "\n" . "<br />";
	echo $faker->address . "<br />";
	echo $faker->text . "</p>";
}
});

// **
// * put route for User Generator
// *

Route::put('/user-generator/{user_url}', function($user_url) {
echo "<h1>User Generator </h1>";
$user_count = new NewNumber($user_url);
$user_count->set_number($user_url);
$count = $user_count->number;

require_once '../vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();

for ($i=0; $i < $count; $i++) {
	echo "<p>" . $faker->name, "\n" . "<br />";
	echo $faker->address . "<br />";
	echo $faker->text . "</p>";
}

});


Route::get('/testing/{test_url?}', function($test_url = null) {
	$title ="Test";
	$test = new NewNumber($test_url);
	echo $test->number;
	$test->set_number($test_url);
	echo $test->feedback_message;
	echo $test->number;
	
		}
);

Route::get('/billing/{billing_url?}', function($billing_url = null) {
	$billing = new NewNumber($billing_url);
	$billing->set_number($billing_url);
	echo $billing->number;
	$data['paragraphs_number'] = $billing->number;
	return View::make('_lorem', $data);
		}
);

