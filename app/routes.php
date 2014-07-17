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
	return View::make('hello');
});

Route::get('/lorem-ipsum', function() {
echo "Lorem Ipsum </br>";
$default = 7;
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($default);
echo implode('<p>', $paragraphs);
});

Route::get('/user-generator', function() {
echo "User Generator </br>";
require_once '../vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();

for ($i=0; $i < 10; $i++) {
	echo $faker->name, "\n" . "<br />";
	echo $faker->address . "<br />";
	echo $faker->text . "<br />";
}
});