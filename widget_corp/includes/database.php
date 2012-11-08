<?php
/*
 * Created on 2012-8-30
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require("constants.php");

// create connection
$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
if(!$connection) {
	die("Database connection failed" . mysql_error());
}

// select database
$db = mysql_select_db(DB_NAME, $connection);
if(!$db){
	die("Database selection failed" . mysql_error());
}
?>


