<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'kelasmmx');
	define('DB_PASSWORD', '84y79Dp@WFvWb-');
	define('DB_NAME', 'kelasmmx_Dewa-Kipas');

	$mysql_db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if (!$mysql_db) {
		die("Error: Unable to connect " . $mysql_db->connect_error);
	}