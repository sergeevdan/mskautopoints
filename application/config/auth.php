<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => '1, 3, 5, 7, 10, 14, 19, 24, 26, 30',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		 'admin' => 'f16c71124f753bc0dfe987a2443a4dca4aabe0807fdee243cd66d240af44ee77',
	),

);
