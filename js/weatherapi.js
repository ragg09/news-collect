$(document).ready(function(){


	//GETTING ID ADDRESS USING IPGEOLCATION API
	$.ajax({
		url: 'https://api.ipgeolocation.io/ipgeo?apiKey=b8668c328d524ce5a5809f1a5a0e4d4f',
		dataType: 'json',
		type: 'GET',
		success: function(data){
			//console.log(data)
		    console.log("ipgeolocation | ip add: "+data.ip);

		    //USING IP2LOCATION API FOR ACCURATE GEOLOCATION
		    //key=QSKCEPEZYZ	official free key, gamit muna tayo ng demo key para d maubos 5000 lang lahat ng limit nito
		    //backup key=4OWC6LVVKX
		    //key=demo			20 request a day lang,		
		    $.ajax({
				url: 'https://api.ip2location.com/v2/?ip='+data.ip+'&key=4OWC6LVVKX&package=WS24&format=json',
				//url: 'https://api.ip2location.com/v2/?ip='+data.ip+'&key=demo&package=WS24&format=json',
				dataType: 'json',
				type: 'GET',
				success: function(datum){
					//console.log(datum)
				    console.log("ip2location | accurate city: " +datum.city_name);

				    //itong ajax call na to double purpose,
					//kasi nag tatawag na ng data sa DB
					//nag tatawag pa ng data sa API
					$.ajax({
						url:"../html/weatherinsert.php",
				        method:'GET',
				        data: {city: datum.city_name},
				        dataType:'json',
				        success:function(data){
				        		console.log("Ito na ung mga data na gagmaitin sa lahat ng viewing galing na to sa db");
				        		console.log(data)
							 	//looping user city info || para sa city ng current user
				               	$.each(data.user_city_info, function(index, val){

				                    //open weather map mapping using lat & long of user
				   					$(".weather_right").append("<iframe scrolling='no' src='https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat="+val.lat+"&lon="+val.lon+"&zoom=10' style='width: 100%; height: 100%; '></iframe>");

				   					$(".weather_left").append("<center><img src='http://openweathermap.org/img/w/"+val.image+".png' style='width: 300px; height: 300px; margin-top: -100px; padding: 0px; margin-bottom: 0px;'/></center><div style='background-color: #454748; width:80%; height:70%; margin-top: -105px; margin-left: 50px; border-radius: 10px;'>"
				   						+ "<br><center><h1>"+val.description.toUpperCase()+"</h1>"
				   						+ "<h1>Temp: "+val.temp+"&deg;C</h1> <br>"
				   						+ "<h4>Feels like: "+val.feels_like+"&deg;C</h4>"
				   						+ "<h4>Humidity: "+val.humidity+"%</h4>"
				   						+ "<h4>City of "+val.name+"</h4>"
				   						+ "</center></div>");
				               	});

				               	$.each(data.all_city, function(index, val){
				                    $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb; border-radius: 10px;'><img src='http://openweathermap.org/img/w/"+val.image+".png' style='width: 200px; height: 200px; margin-top: -30px; padding: 0px; margin-bottom: -50px;'/>"
				   						+ "<center><h1>"+val.description.toUpperCase()+"</h1>"
				   						+ "<h1>Temp: "+val.temp+"&deg;C</h1> <br>"
				   						+ "<h4>Feels like: "+val.feels_like+"&deg;C</h4>"
				   						+ "<h4>Humidity: "+val.humidity+"%</h4>"
				   						+ "<h4>City of "+val.name+"</h4>"
				   						+ "<form action='weatherapi_other_city.php' method='post' target='_blank'><input type=''text' name='id' value='"+val.id+"' hidden><button style='background-color: transparent;'><img src='../image/view.png' style='background-color:black; height:25px; width 25px;'></button></form></center></div>");
				               	});
		
						}
					});

					//1 day weather forecast gamit ung geolocation para sa city
					$.ajax({
						url: 'http://api.openweathermap.org/data/2.5/forecast',
						dataType: 'json',
						type: 'GET',
						data: {q: datum.city_name, appid: '3d2d0ae5204b6bd094ae5f50db05539b', cnt: 8, units: 'metric'},
							success: function(data){
								//console.log(data)
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

				   

				}
			});


		   
		}
	});

	




	
	

	
	// will open the modal on load
	$("#myModalWeather").toggle();
	// will close the modal
	$("#closeweather").click(function(){
       $("#myModalWeather").toggle();
    });

});
