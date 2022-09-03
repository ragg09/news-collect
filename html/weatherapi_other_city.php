<!DOCTYPE html>

<?php

//db connection
require("config.php");
session_start();

$id = $_REQUEST["id"];

$q = "SELECT * FROM weatherapi WHERE id = $id";
$result=mysqli_query($mysqli, $q);

if ($result->num_rows > 0 || $result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
	    echo $name = $row["name"];
		echo $image = $row["image"];
		echo $description = $row["description"];
		echo $temp = $row["temp"];
		echo $feels_like = $row["feels_like"];
		echo $humidity = $row["humidity"];
		echo $lat = $row["lat"];
		echo $lon = $row["lon"];
	}
}


?>


<html>
<head>
	<title>WEATHER | OTHER</title>
	
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

	<div class="modal_other" >
	  <!-- Modal content -->
	  	<div class="modal-content" style="background-color: #141515;; border: 3px solid black; width: 70%;">
	    	<br>
	        <div class="weather_up">
	        	<div class="weather_left">
	        		<center>
	        			<img src='http://openweathermap.org/img/w/<?php echo $image;?>.png' style='width: 300px; height: 300px; margin-top: -100px; padding: 0px; margin-bottom: 0px;'/>
	        		</center>
	        		<div style='background-color: #454748; width:80%; height:70%; margin-top: -105px; margin-left: 50px; border-radius: 10px;'>
				   		<br>
				   		<center>
					   		<h1><?php echo strtoupper($description);?></h1>
					   		<h1>Temp: <?php echo $temp;?>&deg;C</h1> <br>
					   		<h4>Feels like: <?php echo $feels_like;?>&deg;C</h4>
					   		<h4>Humidity: <?php echo $humidity;?>%</h4>
					   		<h4>City of <?php echo $name;?></h4>
				   		</center>
				   	</div>
	        	</div>

	        	<div class="weather_right">
	        		<iframe scrolling='no' src='https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=<?php echo $lat?>&lon=<?php echo $lon;?>&zoom=10' style='width: 100%; height: 100%; '></iframe>
	        	</div>
	        </div>

	        <div  id="mytable" class="table-responsive" style="width: 100%; display: none;">
				<center><h4>This is a 1 day forecast | Every 3 Hours Update</h4></center>
				<table id="ctable" class="table table-striped table-hover" style="color: white;">
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

<script type="text/javascript">

	var city = "<?php echo $name; ?>";

	$(document).ready(function(){
		$.ajax({
			url: 'http://api.openweathermap.org/data/2.5/forecast',
			dataType: 'json',
			type: 'GET',
			data: {q: city, appid: '3d2d0ae5204b6bd094ae5f50db05539b', cnt: 8, units: 'metric'},
				success: function(data){
					console.log(data)
								var tr = $("<tr>");
						$.each(data.list, function(index, list){
											
							tr.append($("<td>").html("<img src='http://openweathermap.org/img/w/"+list.weather[0].icon+".png' style='width: 100px; height: 100px;'/>" + "<br>" 
								+ "<center><b>" + list.weather[0].description + "</b></center>" + "<br>" 
								+ "<b>Temperature: </b>" + list.main.temp + "&deg;C <br>" 
								+ "<b>Feels Like: </b>" +list.main.feels_like + "&deg;C <br>"
								+ "<b>Min Temp: </b>" +list.main.temp_min + "&deg;C <br>"
								+ "<b>Max Temp: </b>" +list.main.temp_max + "&deg;C <br>"
								+ "<b>Humidity: </b>" +list.main.humidity + "% <br>"
								+ data.city.name + "<br>"
								+ list.dt_txt
							));

								$("#fetch_data").append(tr);
								document.getElementById("mytable").style.display = "block";
								            
						});
				}
		});
	

	});

</script>
</html>