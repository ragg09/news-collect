<?php

//db connection
require("config.php");

	

//insert data manually
if(isset($_POST['button'])){
	$id = $_REQUEST['vidId'];
	$title = $_REQUEST['title'];
	$channel = $_REQUEST['channel'];
	$image = $_REQUEST['image'];
	$date = $_REQUEST['date'];
	$q = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id', '$title', '$channel', '$image', '$date')";
	mysqli_query($mysqli, $q);
	mysqli_close($mysqli);
}

if(isset($_POST['all'])){
	$id1 = $_REQUEST['vidId1'];
	$id2 = $_REQUEST['vidId2'];
	$id3 = $_REQUEST['vidId3'];
	$id4 = $_REQUEST['vidId4'];
	$id5 = $_REQUEST['vidId5'];
	$id6 = $_REQUEST['vidId6'];	
	$id7 = $_REQUEST['vidId7'];		
	$id8 = $_REQUEST['vidId8'];		
	$id9 = $_REQUEST['vidId9'];		
	$id10 = $_REQUEST['vidId10'];		
	$id11 = $_REQUEST['vidId11'];		
	$id12 = $_REQUEST['vidId12'];

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
	$title11 = $_REQUEST['title11'];		
	$title12 = $_REQUEST['title12'];

	$channel1 = $_REQUEST['channel1'];
	$channel2 = $_REQUEST['channel2'];
	$channel3 = $_REQUEST['channel3'];
	$channel4 = $_REQUEST['channel4'];
	$channel5 = $_REQUEST['channel5'];
	$channel6 = $_REQUEST['channel6'];	
	$channel7 = $_REQUEST['channel7'];		
	$channel8 = $_REQUEST['channel8'];		
	$channel9 = $_REQUEST['channel9'];		
	$channel10 = $_REQUEST['channel10'];		
	$channel11 = $_REQUEST['channel11'];		
	$channel12 = $_REQUEST['channel12'];

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
	$image11 = $_REQUEST['image11'];		
	$image12 = $_REQUEST['image12'];

	$date1 = $_REQUEST['date1'];
	$date2 = $_REQUEST['date2'];
	$date3 = $_REQUEST['date3'];
	$date4 = $_REQUEST['date4'];
	$date5 = $_REQUEST['date5'];
	$date6 = $_REQUEST['date6'];	
	$date7 = $_REQUEST['date7'];		
	$date8 = $_REQUEST['date8'];		
	$date9 = $_REQUEST['date9'];		
	$date10 = $_REQUEST['date10'];		
	$date11 = $_REQUEST['date11'];		
	$date12 = $_REQUEST['date12'];



	// $q = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id1', '$title1', '$channel1', '$image1', '$date1'), ('$id2', '$title2', '$channel2', '$image2', '$date2'), ('$id3', '$title3', '$channel3', '$image3', '$date3'), ('$id4', '$title4', '$channel4', '$image4', '$date4'), ('$id5', '$title5', '$channel5', '$image5', '$date5'), ('$id6', '$title6', '$channel6', '$image6', '$date6'), ('$id7', '$title7', '$channel7', '$image7', '$date7'), ('$id8', '$title8', '$channel8', '$image8', '$date8'), ('$id9', '$title9', '$channel9', '$image9', '$date9'), ('$id10', '$title10', '$channel10', '$image10', '$date10'), ('$id11', '$title11', '$channel11', '$image11', '$date11'), ('$id12', '$title12', '$channel12', '$image12', '$date12')";
	// mysqli_query($mysqli, $q);
	// mysqli_close($mysqli);

	$q = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id1', '$title1', '$channel1', '$image1', '$date1')";
	mysqli_query($mysqli, $q);

	$q2 = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id2', '$title2', '$channel2', '$image2', '$date2')";
	mysqli_query($mysqli, $q2);

	$q3 = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id3', '$title3', '$channel3', '$image3', '$date3')";
	mysqli_query($mysqli, $q3);

	$q4 = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id4', '$title4', '$channel4', '$image4', '$date4')";
	mysqli_query($mysqli, $q4);

	$q5 = "INSERT INTO yt (vid_id, title, channel, image, publishAt) VALUES ('$id5', '$title5', '$channel5', '$image5', '$date5')";
	mysqli_query($mysqli, $q5);

	$q6 = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id6', '$title6', '$channel6', '$image6', '$date6')";
	mysqli_query($mysqli, $q6);

	$q7 = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id7', '$title7', '$channel7', '$image7', '$date7')";
	mysqli_query($mysqli, $q7);

	$q8 = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id8', '$title8', '$channel8', '$image8', '$date8')";
	mysqli_query($mysqli, $q8);

	$q9 = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id9', '$title9', '$channel9', '$image9', '$date9')";
	mysqli_query($mysqli, $q9);

	$q10 = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id10', '$title10', '$channel10', '$image10', '$date10')";
	mysqli_query($mysqli, $q10);

	$q11 = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id11', '$title11', '$channel11', '$image11', '$date11')";
	mysqli_query($mysqli, $q11);

	$q12 = "INSERT INTO ytapi (vid_id, title, channel, image, publishAt) VALUES ('$id12', '$title12', '$channel12', '$image12', '$date12')";
	mysqli_query($mysqli, $q12);


	mysqli_close($mysqli);
}

?>

<script>
	window.history.back();
</script>