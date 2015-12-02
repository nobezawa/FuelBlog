<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=fuel_blog;unix_socket=/tmp/mysql.sock',
			'username'   => 'root',
			'password'   => '',
		),
	),
);
