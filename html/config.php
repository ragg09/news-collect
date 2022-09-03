<?php
	$databaseHost = 'localhost';
	$databaseName = 'news_collect';
	$databaseUsername = 'root';
	$databasePassword = '';
	 
	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	mysqli_select_db($mysqli,$databaseName);
?>