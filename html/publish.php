<?php

//db connection
require("config.php");
session_start();

if(isset($_POST['button_article'])){
	// echo $_FILES['file']['name'];
	// echo $_FILES['file']['tmp_name'];
	// echo $_FILES['file']['type'];
	// echo $_FILES['file']['size'];
	$title = $_REQUEST['title'];
	$publisher = $_REQUEST['publisher'];
	$publishAt = $_REQUEST['date'];
	$content = $_REQUEST['content'];
	$image = $title.".png";


	$file_destination_img = "../image/article/".$title.".png";

	

	//checking if user exist, setting up trapping.
    $query = "SELECT * FROM user WHERE email LIKE '%".$_SESSION["email"]."%'";
    $result=mysqli_query($mysqli, $query);

    //trapping for user if they are already registered 
    if ($result->num_rows > 0) {
        if(file_exists($file_destination_img)){
			header("Location: http://localhost/news-collect/html/publish_error.php"); 
		}else{

			while ($row = $result->fetch_assoc()) {
	    		echo $row['id'];
	    		$userid = $row['id'];

	    		$q = "INSERT INTO publish_article (title, publisher, content, image, publishAt, user_id) VALUES ('$title', '$publisher', '$content', '$image', '$publishAt', '$userid')";
				mysqli_query($mysqli, $q);
				mysqli_close($mysqli);

				move_uploaded_file($_FILES["image"]["tmp_name"], $file_destination_img);

				header("Location: http://localhost/news-collect/html/user_journal.php"); 		
	    		
	    	}
		}
    }else{
        //kung d pa registered, d makakapag upload 
        header("Location: http://localhost/news-collect/html/google_registration_form.php"); 
    }


}

if(isset($_POST['button_audio'])){
	// echo $_FILES['file']['name'];
	// echo $_FILES['file']['tmp_name'];
	// echo $_FILES['file']['type'];
	// echo $_FILES['file']['size'];
	$title = $_REQUEST['title'];
	$publisher = $_REQUEST['publisher'];
	$publishAt = $_REQUEST['date'];
	$content = $title.".mp3";
	$image = $title.".png";

	$file_destination = "../upload/audio/".$title.".mp3";
	$file_destination_img = "../image/audio/".$title.".png";

	

	//checking if user exist, setting up trapping.
    $query = "SELECT * FROM user WHERE email LIKE '%".$_SESSION["email"]."%'";
    $result=mysqli_query($mysqli, $query);

    //trapping for user if they are already registered 
    if ($result->num_rows > 0) {
        if(file_exists($file_destination)){
			header("Location: http://localhost/news-collect/html/publish_error.php"); 
		}else{

			while ($row = $result->fetch_assoc()) {
	    		echo $row['id'];
	    		$userid = $row['id'];

	    		$q = "INSERT INTO publish_audio (title, publisher, content, image, publishAt, user_id) VALUES ('$title', '$publisher', '$content', '$image', '$publishAt', '$userid')";
				mysqli_query($mysqli, $q);
				mysqli_close($mysqli);

				move_uploaded_file($_FILES["file"]["tmp_name"], $file_destination);
				move_uploaded_file($_FILES["image"]["tmp_name"], $file_destination_img);

				header("Location: http://localhost/news-collect/html/user_journal.php"); 		
	    		
	    	}
		}
    }else{
        //kung d pa registered, d makakapag upload 
        header("Location: http://localhost/news-collect/html/google_registration_form.php"); 
    }


}

if(isset($_POST['button_video'])){
	// echo $_FILES['file']['name'];
	// echo $_FILES['file']['tmp_name'];
	// echo $_FILES['file']['type'];
	// echo $_FILES['file']['size'];
	$title = $_REQUEST['title'];
	$publisher = $_REQUEST['publisher'];
	$publishAt = $_REQUEST['date'];
	$content = $title.".mp4";
	$image = $title.".png";

	$file_destination = "../upload/video/".$title.".mp4";
	$file_destination_img = "../image/video/".$title.".png";

	

	//checking if user exist, setting up trapping.
    $query = "SELECT * FROM user WHERE email LIKE '%".$_SESSION["email"]."%'";
    $result=mysqli_query($mysqli, $query);

    //trapping for user if they are already registered 
    if ($result->num_rows > 0) {
        if(file_exists($file_destination)){
			header("Location: http://localhost/news-collect/html/publish_error.php"); 
		}else{

			while ($row = $result->fetch_assoc()) {
	    		echo $row['id'];
	    		$userid = $row['id'];

	    		$q = "INSERT INTO publish_video (title, publisher, content, image, publishAt, user_id) VALUES ('$title', '$publisher', '$content', '$image', '$publishAt', '$userid')";
				mysqli_query($mysqli, $q);
				mysqli_close($mysqli);

				move_uploaded_file($_FILES["file"]["tmp_name"], $file_destination);
				move_uploaded_file($_FILES["image"]["tmp_name"], $file_destination_img);

				header("Location: http://localhost/news-collect/html/user_journal.php"); 		
	    		
	    	}
		}
    }else{
        //kung d pa registered, d makakapag upload 
        header("Location: http://localhost/news-collect/html/google_registration_form.php"); 
    }


}

?>