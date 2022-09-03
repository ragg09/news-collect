<?php

//db connection
require("config.php");

if(isset($_POST['btn_article'])){
	$id = $_REQUEST['id'];
	$user_id = $_REQUEST['user_id'];

	//getting user info
	$query1 = "SELECT * FROM user WHERE id = $user_id";
	$result1=mysqli_query($mysqli, $query1);

	if ($result1->num_rows > 0) {
		while ($row = $result1->fetch_assoc()) {
	    		$email = $row['email'];
	    		$fname = $row['fname'];
	    		$lname = $row['lname'];
	    		$phone = $row['phone'];
	    		$user_image = $row['image'];
	    	}
    }

	//getting content
	$query = "SELECT * FROM publish_article WHERE id = $id";
	$result=mysqli_query($mysqli, $query);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
	    		$title = $row['title'];
	    		$publisher = $row['publisher'];
	    		$content = $row['content'];
	    		$image = $row['image'];
	    		$publishAt = $row['publishAt'];
	    		
	    	}
    }


}

if(isset($_POST['btn_audio'])){
	echo $id = $_REQUEST['id'];
	echo $user_id = $_REQUEST['user_id'];

	//getting user info
	$query1 = "SELECT * FROM user WHERE id = $user_id";
	$result1=mysqli_query($mysqli, $query1);

	if ($result1->num_rows > 0) {
		while ($row = $result1->fetch_assoc()) {
	    		$email = $row['email'];
	    		$fname = $row['fname'];
	    		$lname = $row['lname'];
	    		$phone = $row['phone'];
	    		$user_image = $row['image'];
	    	}
    }

	//getting content
	$query = "SELECT * FROM publish_audio WHERE id = $id";
	$result=mysqli_query($mysqli, $query);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
	    		$title = $row['title'];
	    		$publisher = $row['publisher'];
	    		$content = $row['content'];
	    		$image = $row['image'];
	    		$publishAt = $row['publishAt'];
	    		
	    	}
    }


}

if(isset($_POST['btn_video'])){
	echo $id = $_REQUEST['id'];
	echo $user_id = $_REQUEST['user_id'];

	//getting user info
	$query1 = "SELECT * FROM user WHERE id = $user_id";
	$result1=mysqli_query($mysqli, $query1);

	if ($result1->num_rows > 0) {
		while ($row = $result1->fetch_assoc()) {
	    		$email = $row['email'];
	    		$fname = $row['fname'];
	    		$lname = $row['lname'];
	    		$phone = $row['phone'];
	    		$user_image = $row['image'];
	    	}
    }

	//getting content
	$query = "SELECT * FROM publish_video WHERE id = $id";
	$result=mysqli_query($mysqli, $query);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
	    		$title = $row['title'];
	    		$publisher = $row['publisher'];
	    		$content = $row['content'];
	    		$image = $row['image'];
	    		$publishAt = $row['publishAt'];
	    		
	    	}
    }


}


?>

<!DOCTYPE html>
<html>
<head>
	<title>News Collect</title>
	
	<link rel="stylesheet" type="text/css" href="../css/general.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
  	<style type="text/css">
  		#search{
  			visibility: hidden;
  		}
  		#getNews{
  			visibility: hidden;
  		}
  		#Myselect{
  			visibility: hidden;
  		}
  	</style>
</head>

<body style="background-color: #141515;">
	<?php
		include("nav.php");
	?>

	
	<?php
	if(isset($_POST['btn_article'])){
	?>
		<div class="view_div">
			<img src="<?php echo $user_image; ?>">
			<table>
				<tr>
					<td><h3>Contact</h3></td>
					<td><h3>Content</h3></td>
				</tr>

				<tr>
					<td><h4><?php echo $fname." ".$lname; ?></h4></td>
					<td><h4>Article:</h4></td>
				</tr>

				<tr>
					<td><h4><?php echo $email; ?></h4></td>
					<td><h4><?php echo $title ?></h4></td>
				</tr>

				<tr>
					<td><h4>0<?php echo $phone; ?></h4></td>
					<td><h4><?php echo $publishAt ?></h4></td>
				</tr>
			</table>

			<textarea><?php echo $content; ?></textarea>
		</div>
	<?php
	}
	?>



	<?php
	if(isset($_POST['btn_audio'])){
	?>
		<div class="view_div">
			<img src="<?php echo $user_image; ?>">
			<table>
				<tr>
					<td><h3>Contact</h3></td>
					<td><h3>Content</h3></td>
				</tr>

				<tr>
					<td><h4><?php echo $fname." ".$lname; ?></h4></td>
					<td><h4>Audio:</h4></td>
				</tr>

				<tr>
					<td><h4><?php echo $email; ?></h4></td>
					<td><h4><?php echo $title ?></h4></td>
				</tr>

				<tr>
					<td><h4>0<?php echo $phone; ?></h4></td>
					<td><h4><?php echo $publishAt ?></h4></td>
				</tr>
			</table>

			<audio autoplay controls controlsList="nodownload">
			  	<source src="../upload/audio/<?php echo $content; ?>" type="audio/mpeg">
			</audio>
		</div>
	<?php
	}
	?>



	<?php
	if(isset($_POST['btn_video'])){
	?>
		<div class="view_div">
			<img src="<?php echo $user_image; ?>">
			<table>
				<tr>
					<td><h3>Contact</h3></td>
					<td><h3>Content</h3></td>
				</tr>

				<tr>
					<td><h4><?php echo $fname." ".$lname; ?></h4></td>
					<td><h4>Video:</h4></td>
				</tr>

				<tr>
					<td><h4><?php echo $email; ?></h4></td>
					<td><h4><?php echo $title ?></h4></td>
				</tr>

				<tr>
					<td><h4>0<?php echo $phone; ?></h4></td>
					<td><h4><?php echo $publishAt ?></h4></td>
				</tr>
			</table>

			<video controls autoplay>
			  	<source src="../upload/video/<?php echo $content; ?>" type="video/mp4">
			</video>
		</div>
	<?php
	}
	?>


	
</body>

</html>




