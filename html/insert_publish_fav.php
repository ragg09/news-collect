<?php

//db connection
require("config.php");
session_start();

if(isset($_POST['button_article'])){

	$id = $_REQUEST['id'];


	$query = "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'";
	$result=mysqli_query($mysqli, $query);

	if ($result->num_rows > 0) {
	    	while ($row = $result->fetch_assoc()) {
	    		echo $row['id'];
	    		$userid = $row['id'];

	    		//checking if exitings | to prevent flooding and redundancy
				$query2 = "SELECT * FROM user_pubarticle_fav WHERE user_id = $userid AND article_id = $id";
				$result2 = mysqli_query($mysqli, $query2);

				if(mysqli_num_rows($result2) > 0){ 
					header("Location: http://localhost/news-collect/html/index.php");				
				}
				else{
					$q = "INSERT INTO user_pubarticle_fav (user_id, article_id) VALUES ('$userid','$id')";
					mysqli_query($mysqli, $q);
					mysqli_close($mysqli);
					header("Location: http://localhost/news-collect/html/index.php");
				}
	    		
	    	}   		
	}else{
		//if ever user skipped the registration, the user will be prompt there to register firts.
		header("Location: http://localhost/news-collect/html/google_registration_form.php");
	}

}


if(isset($_POST['button_audio'])){

	$id = $_REQUEST['id'];


	$query = "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'";
	$result=mysqli_query($mysqli, $query);

	if ($result->num_rows > 0) {
	    	while ($row = $result->fetch_assoc()) {
	    		echo $row['id'];
	    		$userid = $row['id'];

	    		//checking if exitings | to prevent flooding and redundancy
				$query2 = "SELECT * FROM user_pubaudio_fav WHERE user_id = $userid AND audio_id = $id";
				$result2 = mysqli_query($mysqli, $query2);

				if(mysqli_num_rows($result2) > 0){ 
					header("Location: http://localhost/news-collect/html/index.php");				
				}
				else{
					$q = "INSERT INTO user_pubaudio_fav (user_id, audio_id) VALUES ('$userid','$id')";
					mysqli_query($mysqli, $q);
					mysqli_close($mysqli);
					header("Location: http://localhost/news-collect/html/index.php");
				}
	    		
	    	}   		
	}else{
		//if ever user skipped the registration, the user will be prompt there to register firts.
		header("Location: http://localhost/news-collect/html/google_registration_form.php");
	}

}		

       

if(isset($_POST['button_video'])){

	$id = $_REQUEST['id'];


	$query = "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'";
	$result=mysqli_query($mysqli, $query);

	if ($result->num_rows > 0) {
	    	while ($row = $result->fetch_assoc()) {
	    		echo $row['id'];
	    		$userid = $row['id'];

	    		//checking if exitings | to prevent flooding and redundancy
				$query2 = "SELECT * FROM user_pubvideo_fav WHERE user_id = $userid AND video_id = $id";
				$result2 = mysqli_query($mysqli, $query2);

				if(mysqli_num_rows($result2) > 0){ 
					header("Location: http://localhost/news-collect/html/index.php");				
				}
				else{
					$q = "INSERT INTO user_pubvideo_fav (user_id, video_id) VALUES ('$userid','$id')";
					mysqli_query($mysqli, $q);
					mysqli_close($mysqli);
					header("Location: http://localhost/news-collect/html/index.php");
				}
	    		
	    	}   		
	}else{
		//if ever user skipped the registration, the user will be prompt there to register firts.
		header("Location: http://localhost/news-collect/html/google_registration_form.php");
	}

}   


?>