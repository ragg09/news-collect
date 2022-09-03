<!DOCTYPE html>
<html>
<head>
	<title>News Collect | My Journal</title>
	
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
 
  <div class="result">
    <div style="color: #ebebeb; position: relative; bottom: -55px; left: 10px; border: 1px solid white; width: 300px; height: 70px; border-radius: 50px; background-color: grey;"><center><h2>My Favorite</h2></center></div>
    <hr style="color: white; border: 1.5px solid white;">

  </div>


  <div class="result-publish">
    <div style="color: #ebebeb; position: relative; bottom: -55px; left: 10px; border: 1px solid white; width: 300px; height: 70px; border-radius: 50px; background-color: grey;"><center><h2>My Published News</h2></center></div>
    <hr style="color: white; border: 1.5px solid white;">

  </div>
</body>

<!-- getting favorite & user published news -->
<script type="text/javascript" src="../js/user_favpub.js"></script>
</html>