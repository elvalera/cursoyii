<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	'connectionString' => 'pgsql:host=127.0.0.1;dbname=yiitwitter',
	'emulatePrepare' => true,
	'username' => 'postgres',
	'password' => 'postgres',
	'charset' => 'utf8',
);