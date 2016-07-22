<?php

$username = "root";
$password = "";
$hostname = "localhost";
$databasename = "cat-family_day";
$con = mysql_connect($hostname,$username,$password) or die("Failed to Connect to server");
$dbconn=mysql_select_db($databasename)or die("Failed to Connect to database");

?>