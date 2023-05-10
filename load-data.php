<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Azumi', 'Male', 'December 1, 2001', 'Xiao', 'dasd@gsdh.com', '3rd Flr Shoppeville', '09653241789');
	echo "<li>Added 1 student";

	$pets = [
		[
			'name' => 'Kili',
			'gender' => 'Female',
			'birthdate' => 'April 26, 2017',
			'owner' => 'Zhongli',
			'email' => 'zdsadas@sadgas.com',
			'address' => '3rd Floor, Greenbelt 5',
			'contact_number' => '09123456789'
			
		],
		[
			'name' => 'Fili',
			'gender' => 'Female',
			'birthdate' => 'April 26, 2017',
			'owner' => 'Dazai',
			'email' => 'dasdghas@shdbsa.com',
			'address' => '919 P.Gil Street Malate',
			'contact_number' => '09987654321'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

