<?php

//db connection
require("config.php");
session_start();

if(isset($_POST['submit'])){
	$email = $_SESSION["email"];
	$fname = $_SESSION['given_name'];
	$lname = $_SESSION['family_name'];
	$image = $_SESSION['picture'];
	$phone = $_REQUEST['phone'];

	$q = "INSERT INTO user (email, fname, lname, phone, image) VALUES ('$email', '$fname', '$lname', '$phone', '$image')";
	mysqli_query($mysqli, $q);
	mysqli_close($mysqli);

	//papalitan ko pa to sa index, naka docu lang ngayon para d maubos quota natin hahahha
    header("Location: http://localhost/news-collect/html/index.php"); 
}

?>