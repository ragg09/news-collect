<?php

//db connection
require("config.php");
session_start();

$favyt_ids = array();
$favnewsorg_ids = array();
$favlisten_ids = array();
$article_ids = array();
$audio_ids = array();
$video_ids = array();

$favyt_data = array();
$favnewsorg_data = array();
$favlisten_data = array();
$article_data = array();
$audio_data = array();
$video_data = array();

$user_article = array();
$user_audio = array();
$user_video = array();


	//to select the id of user
	$query = "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'";
	$result=mysqli_query($mysqli, $query);

	if ($result->num_rows > 0) {
	    while ($row = $result->fetch_assoc()) {
	    	// echo $row['id'];
	    	$userid = $row['id'];
			
			//selecting the ids of youtube from user_ytapi_fav
			$query2 = "SELECT ytapi_id from user_ytapi_fav where user_id = $userid";
			$result2=mysqli_query($mysqli, $query2);

			if ($result2->num_rows > 0) {
				    while ($row = $result2->fetch_assoc()) {
				    	//getting the ids from yt fav
				    	$favyt_ids[] = $row['ytapi_id'];
				    }   		
			}

			//looping the IDs to select each and save to an array
			foreach ($favyt_ids as $val) {
				// echo "$val <br>";

				$query3 = "SELECT * FROM ytapi WHERE id = $val";
				$result3=mysqli_query($mysqli, $query3);

				if ($result3->num_rows > 0) {
					    while ($row = $result3->fetch_assoc()) {
					    	$favyt_data[] = $row;
					    }   		
				}
			}

			///////////////////////////////////////////////////
			//selecting the ids of youtube from user_newapi_fav
			$query4 = "SELECT newsapi_id from user_newsapi_fav where user_id = $userid";
			$result4=mysqli_query($mysqli, $query4);

			if ($result4->num_rows > 0) {
				    while ($row = $result4->fetch_assoc()) {
				    	//getting the ids from yt fav
				    	$favnewsorg_ids[] = $row['newsapi_id'];
				    }   		
			}

			//looping the IDs to select each and save to an array
			foreach ($favnewsorg_ids as $val) {
				// echo "$val <br>";

				$query5 = "SELECT * FROM newsapi WHERE id = $val";
				$result5=mysqli_query($mysqli, $query5);

				if ($result5->num_rows > 0) {
					    while ($row = $result5->fetch_assoc()) {
					    	$favnewsorg_data[] = $row;
					    }   		
				}
			}

			///////////////////////////////////////////////////
			//selecting the ids of listenapi
			$query6 = "SELECT listenapi_id from user_listenapi_fav where user_id = $userid";
			$result6=mysqli_query($mysqli, $query6);

			if ($result6->num_rows > 0) {
				    while ($row = $result6->fetch_assoc()) {
				    	//getting the ids from yt fav
				    	$favlisten_ids[] = $row['listenapi_id'];
				    }   		
			}

			//looping the IDs to select each and save to an array
			foreach ($favlisten_ids as $val) {
				// echo "$val <br>";

				$query7 = "SELECT * FROM listenapi WHERE id = $val";
				$result7=mysqli_query($mysqli, $query7);

				if ($result7->num_rows > 0) {
					    while ($row = $result7->fetch_assoc()) {
					    	$favlisten_data[] = $row;
					    }   		
				}
			}

			///////////////////////////////////////////////////
			//selecting the ids of publish article
			$query8 = "SELECT article_id from user_pubarticle_fav where user_id = $userid";
			$result8=mysqli_query($mysqli, $query8);

			if ($result8->num_rows > 0) {
				    while ($row = $result8->fetch_assoc()) {
				    	//getting the ids from yt fav
				    	$article_ids[] = $row['article_id'];
				    }   		
			}

			//looping the IDs to select each and save to an array
			foreach ($article_ids as $val) {
				// echo "$val <br>";

				$query9 = "SELECT * FROM publish_article WHERE id = $val";
				$result9=mysqli_query($mysqli, $query9);

				if ($result9->num_rows > 0) {
					    while ($row = $result9->fetch_assoc()) {
					    	$article_data[] = $row;
					    }   		
				}
			}

			///////////////////////////////////////////////////
			//selecting the ids of publish audio
			$query10 = "SELECT audio_id from user_pubaudio_fav where user_id = $userid";
			$result10=mysqli_query($mysqli, $query10);

			if ($result10->num_rows > 0) {
				    while ($row = $result10->fetch_assoc()) {
				    	//getting the ids from yt fav
				    	$audio_ids[] = $row['audio_id'];
				    }   		
			}

			//looping the IDs to select each and save to an array
			foreach ($audio_ids as $val) {
				// echo "$val <br>";

				$query11 = "SELECT * FROM publish_audio WHERE id = $val";
				$result11=mysqli_query($mysqli, $query11);

				if ($result11->num_rows > 0) {
					    while ($row = $result11->fetch_assoc()) {
					    	$audio_data[] = $row;
					    }   		
				}
			}

			///////////////////////////////////////////////////
			//selecting the ids of publish video
			$query12 = "SELECT video_id from user_pubvideo_fav where user_id = $userid";
			$result12=mysqli_query($mysqli, $query12);

			if ($result12->num_rows > 0) {
				    while ($row = $result12->fetch_assoc()) {
				    	//getting the ids from yt fav
				    	$video_ids[] = $row['video_id'];
				    }   		
			}

			//looping the IDs to select each and save to an array
			foreach ($video_ids as $val) {
				// echo "$val <br>";

				$query13 = "SELECT * FROM publish_video WHERE id = $val";
				$result13=mysqli_query($mysqli, $query13);

				if ($result13->num_rows > 0) {
					    while ($row = $result13->fetch_assoc()) {
					    	$video_data[] = $row;
					    }   		
				}
			}


			///////////////////////////////////////////////////
			//selecting user published articles
			$query14 = "SELECT * from publish_article where user_id = $userid";
			$result14=mysqli_query($mysqli, $query14);

			if ($result14->num_rows > 0) {
				    while ($row = $result14->fetch_assoc()) {
				    	//getting the ids from yt fav
				    	$user_article[] = $row;
				    }   		
			}


			///////////////////////////////////////////////////
			//selecting user published audio
			$query15 = "SELECT * from publish_audio where user_id = $userid";
			$result15=mysqli_query($mysqli, $query15);

			if ($result15->num_rows > 0) {
				    while ($row = $result15->fetch_assoc()) {
				    	//getting the ids from yt fav
				    	$user_audio[] = $row;
				    }   		
			}

			///////////////////////////////////////////////////
			//selecting user published video
			$query16 = "SELECT * from publish_video where user_id = $userid";
			$result16=mysqli_query($mysqli, $query16);

			if ($result16->num_rows > 0) {
				    while ($row = $result16->fetch_assoc()) {
				    	//getting the ids from yt fav
				    	$user_video[] = $row;
				    }   		
			}			


	    		
	    }   		
	}else{
		//if ever user skipped the registration, the user will be prompt there to register firts.
		header("Location: http://localhost/news-collect/html/google_registration_form.php");
	}

	echo json_encode(['fav_yt' => $favyt_data, 'fav_newsorg' => $favnewsorg_data, 'fav_listen' => $favlisten_data, 'fav_article' => $article_data, 'fav_audio' => $audio_data, 'fav_video' => $video_data, 'user_article' => $user_article, 'user_audio' => $user_audio, 'user_video' => $user_video]);
	// var_dump($favyt_ids);
?>