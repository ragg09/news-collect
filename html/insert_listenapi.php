<?php

//db connection
require("config.php");

	

//insert data manually
if(isset($_POST['button'])){
	// $id = $_REQUEST['id']; 
	$title = $_REQUEST['title'];
	$publisher = $_REQUEST['publisher'];
	$url = $_REQUEST['url'];
	$image = $_REQUEST['image'];
	$publish_date = $_REQUEST['latest_pub_date_ms'];
	$q = "INSERT INTO listenapi (publisher,  title, url, image, publish_date) VALUES ('$publisher', '$title', '$url', '$image', '$publish_date')";
	mysqli_query($mysqli, $q);
	mysqli_close($mysqli);
}




if(isset($_POST['all'])){
	// $id1 = $_REQUEST['id1'];
	// $id2 = $_REQUEST['id2'];
	// $id3 = $_REQUEST['id3'];
	// $id4 = $_REQUEST['id4'];
	// $id5 = $_REQUEST['id5'];
	// $id6 = $_REQUEST['id6'];	
	// $id7 = $_REQUEST['id7'];		
	// $id8 = $_REQUEST['id8'];		
	// $id9 = $_REQUEST['id9'];		
	// $id10 = $_REQUEST['id10'];		
	// $id11 = $_REQUEST['id11'];		
	// $id12 = $_REQUEST['id12'];

	$publisher1 = $_REQUEST['publisher1'];
	$publisher2 = $_REQUEST['publisher2'];
	$publisher3 = $_REQUEST['publisher3'];
	$publisher4 = $_REQUEST['publisher4'];
	$publisher5 = $_REQUEST['publisher5'];
	$publisher6 = $_REQUEST['publisher6'];	
	$publisher7 = $_REQUEST['publisher7'];		
	$publisher8 = $_REQUEST['publisher8'];		
	$publisher9 = $_REQUEST['publisher9'];		
	$publisher10 = $_REQUEST['publisher10'];		
	// $publisher11 = $_REQUEST['publisher11'];		
	// $publisher12 = $_REQUEST['publisher12'];

	$title1 = $_REQUEST['title1'];
	$title2 = $_REQUEST['title2'];
	$title3 = $_REQUEST['title3'];
	$title4 = $_REQUEST['title4'];
	$title5 = $_REQUEST['title5'];
	$title6 = $_REQUEST['title6'];	
	$title7 = $_REQUEST['title7'];		
	$title8 = $_REQUEST['title8'];		
	$title9 = $_REQUEST['title9'];		
	$title10 = $_REQUEST['title10'];		
	// $title11 = $_REQUEST['title11'];		
	// $title12 = $_REQUEST['title12'];


	$url1 = $_REQUEST['url1'];
	$url2 = $_REQUEST['url2'];
	$url3 = $_REQUEST['url3'];
	$url4 = $_REQUEST['url4'];
	$url5 = $_REQUEST['url5'];
	$url6 = $_REQUEST['url6'];
	$url7 = $_REQUEST['url7'];
	$url8 = $_REQUEST['url8'];
	$url9 = $_REQUEST['url9'];
	$url10 = $_REQUEST['url10'];
	// $url11 = $_REQUEST['url11'];
	// $url12 = $_REQUEST['url12'];

	$image1 = $_REQUEST['image1'];
	$image2 = $_REQUEST['image2'];
	$image3 = $_REQUEST['image3'];
	$image4 = $_REQUEST['image4'];
	$image5 = $_REQUEST['image5'];
	$image6 = $_REQUEST['image6'];	
	$image7 = $_REQUEST['image7'];		
	$image8 = $_REQUEST['image8'];		
	$image9 = $_REQUEST['image9'];		
	$image10 = $_REQUEST['image10'];		
	// $image11 = $_REQUEST['image11'];		
	// $image12 = $_REQUEST['image12'];

	$latest_pub_date_ms1 = $_REQUEST['latest_pub_date_ms1'];
	$latest_pub_date_ms2 = $_REQUEST['latest_pub_date_ms2'];
	$latest_pub_date_ms3 = $_REQUEST['latest_pub_date_ms3'];
	$latest_pub_date_ms4 = $_REQUEST['latest_pub_date_ms4'];
	$latest_pub_date_ms5 = $_REQUEST['latest_pub_date_ms5'];
	$latest_pub_date_ms6 = $_REQUEST['latest_pub_date_ms6'];	
	$latest_pub_date_ms7 = $_REQUEST['latest_pub_date_ms7'];		
	$latest_pub_date_ms8 = $_REQUEST['latest_pub_date_ms8'];		
	$latest_pub_date_ms9 = $_REQUEST['latest_pub_date_ms9'];		
	$latest_pub_date_ms10 = $_REQUEST['latest_pub_date_ms10'];		
	// $latest_pub_date_ms11 = $_REQUEST['latest_pub_date_ms11'];		
	// $latest_pub_date_ms12 = $_REQUEST['latest_pub_date_ms12'];




	// $q = "INSERT INTO listenapi (id, publisher, title, url ,image, latest_pub_date_ms) VALUES ('$id1', '$title1', '$publisher1', $url1, '$image1', '$latest_pub_date_ms1'), ('$id2', '$title2', '$publisher2', $url2, '$image2', '$latest_pub_date_ms2'), ('$id3', '$title3', '$publisher3', $url3, '$image3', '$latest_pub_date_ms3'), ('$id4', '$title4', '$publisher4', $url4, '$image4', '$latest_pub_date_ms4'), ('$id5', '$title5', '$publisher5', $url5, '$image5', '$latest_pub_date_ms5'), ('$id6', '$title6', '$publisher6', $url6, '$image6', '$latest_pub_date_ms6'), ('$id7', '$title7', '$publisher7', $url7, '$image7', '$latest_pub_date_ms7'), ('$id8', '$title8', '$publisher8', $url8, '$image8', '$latest_pub_date_ms8'), ('$id9', '$title9', '$publisher9', $url9, '$image9', '$latest_pub_date_ms9'), ('$id10', '$title10', '$publisher10', $url10, '$image10', '$latest_pub_date_ms10'), ('$id11', '$title11', '$publisher11', $url11, '$image11', '$latest_pub_date_ms11'), ('$id12', '$title12', '$publisher12', $url12, '$image12', '$latest_pub_date_ms12')";
	// mysqli_query($mysqli, $q);
	// mysqli_close($mysqli);

	$q = "INSERT INTO listenapi (title, publisher, image, publish_date, url) VALUES ('$title1', '$publisher1', '$image1', '$latest_pub_date_ms1', '$url1')";
	mysqli_query($mysqli, $q);

	$q2 = "INSERT INTO listenapi (title, publisher, image, publish_date,url) VALUES ('$title2', '$publisher2', '$image2', '$latest_pub_date_ms2', '$url2')";
	mysqli_query($mysqli, $q2);

	$q3 = "INSERT INTO listenapi (title, publisher, image, publish_date,url) VALUES ('$title3', '$publisher3', '$image3', '$latest_pub_date_ms3', '$url3')";
	mysqli_query($mysqli, $q3);

	$q4 = "INSERT INTO listenapi (title, publisher, image, publish_date, url) VALUES ('$title4', '$publisher4', '$image4', '$latest_pub_date_ms4', '$url4')";
	mysqli_query($mysqli, $q4);

	$q5 = "INSERT INTO listenapi (title, publisher, image, publish_date, url) VALUES ('$title5', '$publisher5', '$image5', '$latest_pub_date_ms5', '$url5')";
	mysqli_query($mysqli, $q5);

	$q6 = "INSERT INTO listenapi (title, publisher, image, publish_date, url) VALUES ('$title6', '$publisher6', '$image6', '$latest_pub_date_ms6', '$url6')";
	mysqli_query($mysqli, $q6);

	$q7 = "INSERT INTO listenapi (title, publisher, image, publish_date, url) VALUES ('$title7', '$publisher7', '$image7', '$latest_pub_date_ms7', '$url7')";
	mysqli_query($mysqli, $q7);

	$q8 = "INSERT INTO listenapi (title, publisher, image, publish_date, url) VALUES ('$title8', '$publisher8', '$image8', '$latest_pub_date_ms8', '$url8')";
	mysqli_query($mysqli, $q8);

	$q9 = "INSERT INTO listenapi (title, publisher, image, publish_date, url) VALUES ('$title9', '$publisher9', '$image9', '$latest_pub_date_ms9', '$url9')";
	mysqli_query($mysqli, $q9);

	$q10 = "INSERT INTO listenapi (title, publisher, image, publish_date, url) VALUES ('$title10', '$publisher10', '$image10', '$latest_pub_date_ms10', '$url10')";
	mysqli_query($mysqli, $q10);

	// $q11 = "INSERT INTO listenapi (title, publisher, image, publish_date, url) VALUES ('$title11', '$publisher11', '$image11', '$latest_pub_date_ms11', '$url11')";
	// mysqli_query($mysqli, $q11);

	// $q12 = "INSERT INTO listenapi (title, publisher, image, publish_date, url) VALUES ('$title12', '$publisher12', '$image12', '$latest_pub_date_ms12', '$url12')";
	// mysqli_query($mysqli, $q12);

	mysqli_close($mysqli);

}

?>

<script>
	window.history.back();
</script>