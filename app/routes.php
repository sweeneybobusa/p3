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

Route::get('/lorem-ipsum/{lorem_url?}', function($lorem_url = null) {

	$lorem = new NewNumber();
	$lorem->set_number($lorem_url);
	$data['paragraphs_number'] = $lorem->number;
	$message = $lorem->feedback_message;
	return View::make('_lorem', $data)
	->with('message' , $message);
});


// **
// * putting route for the number for the paragraphs
// *

Route::put('/lorem-ipsum/{lorem_url}', function($lorem_url = null) {

// need test for integers then for numbers then for error message with default
	$lorem = new NewNumber();
	$lorem->set_number($lorem_url);
	$data['paragraphs_number'] = $lorem->number;
	$message = $lorem->feedback_message;
	return View::make('_lorem', $data)
	->with('message' , $message);
});

// **
// * Get route for User Generator
// *

/*Route::get('/user-generator', function() {
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
*/
Route::get('/user-generator/{users_url?}', function($users_url = null) {
	$newUsers = new NewNumber();
	$newUsers->set_number($users_url);
	$data['default_users'] = $newUsers->number;
	$message = $newUsers->feedback_message;
	return View::make('_user_generator', $data)
		->with('message' , $message);
		}
);


// **
// * put route for User Generator
// *

Route::put('/user-generator/{user_url}', function($user_url) {
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


