<!DOCTYPE html>
<html>
<head>
	<title>WEATHER | MAIN</title>
	
	<link rel="stylesheet" type="text/css" href="../css/general.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
  	<script src="https://cdn.jsdelivr.net/npm/ip-geolocation-api-jquery-sdk@1.1.0/ipgeolocation.min.js"></script>

  	<style type="text/css">
  		#Myselect{
  			visibility: hidden;
  		}
  		#search{
  			visibility: hidden;
  		}
  		#getNews{
  			visibility: hidden;
  		}
  	</style>
</head>

<body style="background-color: #141515;">
	<?php
		include("nav.php");
	?>

	<br>

	<center>
	<div class="result" id="result">
		
	</div>
	</center>

	<!-- The Modal -->
	<div id="myModalWeather" class="modal" >
	  <!-- Modal content -->
	  	<div class="modal-content" style="background-color: #141515;; border: 3px solid black; width: 70%;">
	    	<button style="float: right; color: black; margin-top: -12px;" id="closeweather">X</button>
	    	<br>
	        <div class="weather_up">
	        	<div class="weather_left">
	        	</div>

	        	<div class="weather_right">
	        		
	        	</div>
	        </div>

	        <div  id="mytable" class="table-responsive" style="width: 100%; display: none;">
				<center><h4>This is a 1 day forecast | Every 3 Hours Update</h4></center>
				<table id="ctable" class="table table-striped table-hover">
				    <thead>
				      	<tr>
					        <th>1st Forecast</th>
					        <th>2nd Forecast</th>
					        <th>3rd Forecast</th>
					        <th>4th Forecast</th>
					        <th>5th Forecast</th>
					        <th>6th Forecast</th>
					        <th>7th Forecast</th>
					        <th>8th Forecast</th>
				        </tr>
				    </thead>
				    <tbody id="fetch_data">
				    	
				    </tbody>
				</table>
			</div>


	  	</div>

	</div>

</body>
<script type="text/javascript" src="../js/weatherapi.js"></script>
</html>