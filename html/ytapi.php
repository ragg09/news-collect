<!DOCTYPE html>

<html>
<head>
	<title>News API</title>
	
	<link rel="stylesheet" type="text/css" href="../css/general.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
  	<style type="text/css">
  		#Myselect{
  			visibility: hidden;
  		}
  	</style>
</head>

<body style="background-color: #141515;">
	<?php
		include("nav.php");
	?>

	<br>
	<!-- div for showing content -->
	<center>
	<div class="result">
	</div>
	</center>

	<!-- form for getting all news in db, content will be added dynamically
	using the ajax -->
	<form action='insert_ytapi.php' method='post' class="getall">
	</form>
</body>

<!-- js, ajax, calling of api -->
<script type="text/javascript" src="../js/ytapi.js"></script>

</html>

