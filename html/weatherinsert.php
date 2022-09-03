<?php

//db connection
require("config.php");
session_start();

date_default_timezone_set('Asia/Manila');

$cities = array("Alaminos","Angeles","Antipolo","Bacolod","Bago","Baguio","Bais","Balanga","Batangas","Bayawan","Butuan","Cabanatuan","Cadiz","Cagayan de Oro","Calamba","Calapan","Calbayog","Caloocan","Candon","Canlaon","Cauayan","Cavite","Cebu","Cotabato","Dagupan","Danao","Dapitan","Davao","Digos","Dipolog","Dumaguete","Escalante","Gapan","General Santos","Gingoog","Himamaylan","Iligan","Iloilo","Iriga","Isabela","Kabankalan","Kidapawan","Koronadal","La Carlota","Laoag","Lapu-Lapu","Las Piñas","Legazpi","Ligao","Lipa","Lucena","Maasin","Makati","Malabon","Malaybalay","Malolos","Malolos","Mandaluyong","Mandaue","Manila","Maragondon","Marawi","Masbate","Muntinlupa","Naga","Olongapo","Ormoc","Oroquieta","Pagadian","Palayan","Legazpi","Parañaque","Pasay","Pasig","Passi","Puerto Princesa","Quezon","Roxas","Sagay","San Carlos","San Carlos","Pangasinan","San Fernando","La Union","San Pedro","San Fernando","San Jose","San Jose del Monte","San Pablo","Santa Rosa","Santiago","Silay","Sipalay","Sorsogon","Surigao","Tabaco","Tacloban","Tacurong","Tagaytay","Tagbilaran","Tagum","Talisay","Cebu","Talisay","Tanauan","Tangub","Tanjay","Tarlac","Taguig","Toledo","Trece Martires","Tuguegarao","Urdaneta","Valencia","Valenzuela","Victorias","Vigan","Zamboanga", "Quiapo");


	//getting db date and hour para magamit sa trapping
	$query1 = "SELECT * FROM weatherapi LIMIT 1";
	$result1=mysqli_query($mysqli, $query1);

	if ($result1->num_rows > 0) {
		while ($row = $result1->fetch_assoc()) {
	    		$date = $row['db_date'];
	    		$hour = $row['db_hour'];
	    	}
    }

    if($date !== date("Y-m-d") || $hour < date("H")){
    	//if date or time changed, weatherapi table will truncate before inserting news data
		mysqli_query($mysqli, "TRUNCATE TABLE weatherapi"); 

		foreach ($cities as $value) {
			// tinawag namin ung API gamit php since backend at autorun naman ang purpose namin dito
			$key = "3d2d0ae5204b6bd094ae5f50db05539b";
		   	$url = 'http://api.openweathermap.org/data/2.5/weather?q='.$value.'&appid='.$key.'&units=metric';
		  	$data = json_decode(file_get_contents($url), true);

		   	$name = $value;
		   	$image = $data["weather"][0]["icon"];
		   	$description = $data["weather"][0]["description"];
		    $temp = $data["main"]["temp"];
		   	$feels_like = $data["main"]["feels_like"];
		   	$humidity = $data["main"]["humidity"];
		   	$lat = $data["coord"]["lat"];
		   	$lon = $data["coord"]["lon"];
		   	$db_date = date("Y-m-d"); 
		   	$db_hour = date("H"); 

		 	$q = "INSERT INTO weatherapi (name, image, description, temp, feels_like, humidity, lat, lon, db_hour, db_date) VALUES ('$name','$image','$description','$temp','$feels_like','$humidity','$lat','$lon','$db_hour','$db_date')";
			mysqli_query($mysqli, $q);
			

		}
		mysqli_close($mysqli);
    }else{

    	$user_city_info = array();
    	$all_city = array();

    	$user_city = $_REQUEST['city'];

    	$q = "SELECT * FROM weatherapi WHERE name LIKE '%".$user_city."%'";
		$result=mysqli_query($mysqli, $q);

		$q2 = "SELECT * FROM weatherapi";
		$result2=mysqli_query($mysqli, $q2);

		if ($result->num_rows > 0 || $result2->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
	    		$user_city_info[] = $row;
	    	}

	    	while ($row = $result2->fetch_assoc()) {
	    		$all_city[] = $row;
	    	}
    	}
    	
    	
    	echo json_encode(['user_city_info' => $user_city_info, 'all_city' => $all_city]);

    }



?>