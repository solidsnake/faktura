<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => '%hash_key%',
	'lifetime'     => 86400,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',
);
