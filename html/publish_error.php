<!DOCTYPE html>
<html>
<head>
	<title>News Collect | Registration</title>
	
	<link rel="stylesheet" type="text/css" href="../css/general.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

  	<style type="text/css">
  		.nav #getNews{
  			visibility: hidden;
  		}

  		.nav #search{
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

	<div class="registration_div">
    <center><img src="../image/warning.gif" height="300px;" style="border-radius: 50%;"></center>
		<center><h2>Welcome! <strong><?php echo $_SESSION['given_name']; ?></strong></h2></center>
    <center><h4>Admistration found out you are trying to upload an existing file.</h4></center>
    <center><h4>But we would love it if you still wanted to upload, so we suggest to change the title and file accordingly.</h4></center>

	</div>
</body>
</html>