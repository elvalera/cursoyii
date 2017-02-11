<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',//para utilizar la base de datos que viene por defecto..
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=217.0.0.1;dbname=yiitwitter',
	'emulatePrepare' => true,
	'username' => 'postgres',
	'password' => 'postgres',
	'charset' => 'utf8',
	
);