<?php
session_start();


define('dbhost', 'us-cdbr-iron-east-01.cleardb.net');
define('dbuser', 'bc82c92e70e9fd');
define('dbpass', '33c4ec08');
define('dbname', 'heroku_74944fad105d65a');


try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
