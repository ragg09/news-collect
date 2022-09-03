

<!DOCTYPE html>
<html>
<head>
	<title>News Collect</title>
	
	<link rel="stylesheet" type="text/css" href="../css/general.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
  	<style type="text/css">
  		.nav #getNews{
  			visibility: hidden;
  		}
  	</style>
</head>

<body style="background-color: #141515;">
	<?php
		include("nav.php");
	?>

	
	<marquee id="mob"><h2 id="headline"></h2></marquee>

	

	<!-- div for showing content -->
	<center>
	<div class="result">

		<!-- <div id="left">
			
		</div>
		<div id="right">
			
		</div> -->
	</div>
	</center>

	<div class="result-publish" style="margin-top: -70px;">
	    <div style="color: #ebebeb; position: relative; bottom: -55px; left: 10px; border: 1px solid white; width: 300px; height: 70px; border-radius: 50px; background-color: grey;"><center><h2>User Published</h2></center></div>
	    <hr style="color: white; border: 1.5px solid white;"> 
	    <br> 

	</div>

	<div class="livenews">
		<div class="livenews_weather"></div>
		<div class="livenews_covid">
			<center>	
			<table style="width: 90%;">	
					<thead>
						<th colspan="2"><center><h3>Philippines' Covid Summary | <a href='https://doh.gov.ph/covid19tracker' target="_blank" style='color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; font-size: 20px;'>Learn more</a></h3></center></th>
					</thead>
					<tbody id="fetch_data">
			    	</tbody>
			</table>
			</center>
		</div>
		<br>
	</div>
	<button id="livebutton">X</button>
</body>

<!-- getting data from database, used like an API -->
<script type="text/javascript" src="../js/combi.js"></script>

</html>