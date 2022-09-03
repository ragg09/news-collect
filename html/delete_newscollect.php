<?php

//db connection
require("config.php");
session_start();

//for admin, deleting news
if(isset($_POST['button_yt'])){
	$ytid = $_REQUEST['ytid'];
	$q = "DELETE FROM ytapi WHERE id=$ytid";
	mysqli_query($mysqli, $q);
	mysqli_close($mysqli);
	header("Location: http://localhost/news-collect/html/index.php");
}

if(isset($_POST['button_newsorg'])){
	$newsid = $_REQUEST['newsid'];
	$q = "DELETE FROM newsapi WHERE id=$newsid";
	mysqli_query($mysqli, $q);
	mysqli_close($mysqli);
	header("Location: http://localhost/news-collect/html/index.php");
}

if(isset($_POST['button_listen'])){
	$listenid = $_REQUEST['listenid'];
	$q = "DELETE FROM listenapi WHERE id=$listenid";
	mysqli_query($mysqli, $q);
	mysqli_close($mysqli);
	header("Location: http://localhost/news-collect/html/index.php");
}

if(isset($_POST['button_article'])){
	$articleid = $_REQUEST['articleid'];

	$query1 = "SELECT * FROM publish_article WHERE id = $articleid";
	$result1=mysqli_query($mysqli, $query1);

	if ($result1->num_rows > 0) {
		while ($row = $result1->fetch_assoc()) {
	    		$image = $row['image'];

	    	}
    }

	unlink("../image/article/".$image);

	$q = "DELETE FROM publish_article WHERE id=$articleid";
	mysqli_query($mysqli, $q);
	mysqli_close($mysqli);

	header("Location: http://localhost/news-collect/html/index.php");
}

if(isset($_POST['button_audio'])){
	$audioid = $_REQUEST['audioid'];

	$query1 = "SELECT * FROM publish_audio WHERE id = $audioid";
	$result1=mysqli_query($mysqli, $query1);

	if ($result1->num_rows > 0) {
		while ($row = $result1->fetch_assoc()) {
	    		$content = $row['content'];
	    		$image = $row['image'];

	    	}
    }

    unlink("../upload/audio/".$content);
	unlink("../image/audio/".$image);

	$q = "DELETE FROM publish_audio WHERE id=$audioid";
	mysqli_query($mysqli, $q);
	mysqli_close($mysqli);

	header("Location: http://localhost/news-collect/html/index.php");
}

if(isset($_POST['button_video'])){
	$videoid = $_REQUEST['videoid'];

	$query1 = "SELECT * FROM publish_video WHERE id = $videoid";
	$result1=mysqli_query($mysqli, $query1);

	if ($result1->num_rows > 0) {
		while ($row = $result1->fetch_assoc()) {
	    		$content = $row['content'];
	    		$image = $row['image'];

	    	}
    }

    unlink("../upload/video/".$content);
	unlink("../image/video/".$image);

	$q = "DELETE FROM publish_video WHERE id=$videoid";
	mysqli_query($mysqli, $q);
	mysqli_close($mysqli);
	
	header("Location: http://localhost/news-collect/html/index.php");
}



//for user, deleting their favortie from journal
if(isset($_POST['button_favyt'])){
	$ytid = $_REQUEST['ytid'];

	//to select the id of user
	$query = "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'";
	$result=mysqli_query($mysqli, $query);

	if ($result->num_rows > 0) {
	    while ($row = $result->fetch_assoc()) {
	    	// echo $row['id'];
	    	$userid = $row['id'];

	    	

	    	$query2 = "DELETE FROM user_ytapi_fav WHERE user_id = $userid AND ytapi_id = $ytid";
			mysqli_query($mysqli, $query2);
			mysqli_close($mysqli);

			header("Location: http://localhost/news-collect/html/user_journal.php");
		}
					
	}else{
		//if ever user skipped the registration, the user will be prompt there to register firts.
		header("Location: http://localhost/news-collect/html/google_registration_form.php");
	}
}

if(isset($_POST['button_favnewsorg'])){
	$newsorgid = $_REQUEST['newsorgid'];

	//to select the id of user
	$query = "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'";
	$result=mysqli_query($mysqli, $query);

	if ($result->num_rows > 0) {
	    while ($row = $result->fetch_assoc()) {
	    	// echo $row['id'];
	    	$userid = $row['id'];

	    	

	    	$query2 = "DELETE FROM user_newsapi_fav WHERE user_id = $userid AND newsapi_id = $newsorgid";
			mysqli_query($mysqli, $query2);
			mysqli_close($mysqli);

			header("Location: http://localhost/news-collect/html/user_journal.php");
		}
					
	}else{
		//if ever user skipped the registration, the user will be prompt there to register firts.
		header("Location: http://localhost/news-collect/html/google_registration_form.php");
	}
}

if(isset($_POST['button_favlisten'])){
	$listenid = $_REQUEST['listenid'];

	//to select the id of user
	$query = "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'";
	$result=mysqli_query($mysqli, $query);

	if ($result->num_rows > 0) {
	    while ($row = $result->fetch_assoc()) {
	    	// echo $row['id'];
	    	$userid = $row['id'];

	    	

	    	$query2 = "DELETE FROM user_listenapi_fav WHERE user_id = $userid AND listenapi_id = $listenid";
			mysqli_query($mysqli, $query2);
			mysqli_close($mysqli);

			header("Location: http://localhost/news-collect/html/user_journal.php");
		}
					
	}else{
		//if ever user skipped the registration, the user will be prompt there to register firts.
		header("Location: http://localhost/news-collect/html/google_registration_form.php");
	}
}


if(isset($_POST['button_favarticle'])){
	$articleid = $_REQUEST['articleid'];

	//to select the id of user
	$query = "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'";
	$result=mysqli_query($mysqli, $query);

	if ($result->num_rows > 0) {
	    while ($row = $result->fetch_assoc()) {
	    	// echo $row['id'];
	    	$userid = $row['id'];

	    	

	    	$query2 = "DELETE FROM user_pubarticle_fav WHERE user_id = $userid AND article_id = $articleid";
			mysqli_query($mysqli, $query2);
			mysqli_close($mysqli);

			header("Location: http://localhost/news-collect/html/user_journal.php");
		}
					
	}else{
		//if ever user skipped the registration, the user will be prompt there to register firts.
		header("Location: http://localhost/news-collect/html/google_registration_form.php");
	}
}


if(isset($_POST['button_favaudio'])){
	$audioid = $_REQUEST['audioid'];

	//to select the id of user
	$query = "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'";
	$result=mysqli_query($mysqli, $query);

	if ($result->num_rows > 0) {
	    while ($row = $result->fetch_assoc()) {
	    	// echo $row['id'];
	    	$userid = $row['id'];

	    	

	    	$query2 = "DELETE FROM user_pubaudio_fav WHERE user_id = $userid AND audio_id = $audioid";
			mysqli_query($mysqli, $query2);
			mysqli_close($mysqli);

			header("Location: http://localhost/news-collect/html/user_journal.php");
		}
					
	}else{
		//if ever user skipped the registration, the user will be prompt there to register firts.
		header("Location: http://localhost/news-collect/html/google_registration_form.php");
	}
}

if(isset($_POST['button_favvideo'])){
	$videoid = $_REQUEST['videoid'];

	//to select the id of user
	$query = "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'";
	$result=mysqli_query($mysqli, $query);

	if ($result->num_rows > 0) {
	    while ($row = $result->fetch_assoc()) {
	    	// echo $row['id'];
	    	$userid = $row['id'];

	    	

	    	$query2 = "DELETE FROM user_pubvideo_fav WHERE user_id = $userid AND video_id = $videoid";
			mysqli_query($mysqli, $query2);
			mysqli_close($mysqli);

			header("Location: http://localhost/news-collect/html/user_journal.php");
		}
					
	}else{
		//if ever user skipped the registration, the user will be prompt there to register firts.
		header("Location: http://localhost/news-collect/html/google_registration_form.php");
	}
}






?>