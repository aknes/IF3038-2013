<?php
	global $connect;
	$username="progin";
	$host="localhost";
	$password="progin";
	$connect=mysql_connect($host,$progin,$password) or die(mysql_error());
	if(!$connect){
		die("Could not reach $host.");
	}
	$db_name="progin_405_13510100";
	$db_select=mysql_select_db($db_name,$connect);
	if(!$db_select){
		die("Could not reach database $db_name.");
	}
	return $connect;
?>