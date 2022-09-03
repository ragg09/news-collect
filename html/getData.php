<?php

//db connection
require("config.php");
session_start();

$search = $_REQUEST['query'];
$dbjsonyt = array();
$dbjsonnews = array();
$dbjsonlisten = array();

//for user publish report
$dbarticle = array();
$dbaudio = array();
$dbvideo = array();

if($search != ''){
	// ALL IN ONE LIVE SEARCH FUNCTION
	$query = "SELECT * FROM ytapi WHERE title LIKE '%".$search."%' OR channel LIKE '%".$search."%' ";
	$result=mysqli_query($mysqli, $query);

	$query2 = "SELECT * FROM newsapi WHERE author LIKE '%".$search."%' OR title LIKE '%".$search."%' ";
	$result2=mysqli_query($mysqli, $query2);

	$query3 = "SELECT * FROM listenapi WHERE publisher LIKE '%".$search."%' OR title LIKE '%".$search."%' ";
	$result3=mysqli_query($mysqli, $query3);

	$query4 = "SELECT * FROM publish_article WHERE content LIKE '%".$search."%' OR title LIKE '%".$search."%' ";
	$result4=mysqli_query($mysqli, $query4);

	$query5 = "SELECT * FROM publish_audio WHERE publisher LIKE '%".$search."%' OR title LIKE '%".$search."%' ";
	$result5=mysqli_query($mysqli, $query5);

	$query6 = "SELECT * FROM publish_video WHERE publisher LIKE '%".$search."%' OR title LIKE '%".$search."%' ";
	$result6=mysqli_query($mysqli, $query6);

	if ($result->num_rows > 0 || $result2->num_rows > 0 || $result3->num_rows > 0 || $result4->num_rows > 0 || $result5->num_rows > 0 || $result6->num_rows > 0) {
    	while ($row = $result->fetch_assoc()) {
    		$dbjsonyt[] = $row;
    		
    	}

    	while ($row = $result2->fetch_assoc()) {
    		$dbjsonnews[] = $row;
    		
    	}

    	while ($row = $result3->fetch_assoc()) {
    		$dbjsonlisten[] = $row;
    		
    	}

    	while ($row = $result4->fetch_assoc()) {
    		$dbarticle[] = $row;
    		
    	}

    	while ($row = $result5->fetch_assoc()) {
    		$dbaudio[] = $row;
    		
    	}

    	while ($row = $result6->fetch_assoc()) {
    		$dbvideo[] = $row;
    		
    	}			
       
    }else{
    	// DEFAULT FUNCTION IF SERACH IS NOT IN THE DATABASE
		//yt data
		$query = "SELECT * FROM ytapi ORDER BY publishAt DESC";
		$result=mysqli_query($mysqli, $query);

		//news org data
		$query2 = "SELECT * FROM newsapi ORDER BY publishat DESC";
		$result2=mysqli_query($mysqli, $query2);

		//liste notes data
		$query3 = "SELECT * FROM listenapi ORDER BY publish_date DESC";
		$result3=mysqli_query($mysqli, $query3);

		//publish article data
		$query4 = "SELECT * FROM publish_article ORDER BY publishAt DESC";
		$result4=mysqli_query($mysqli, $query4);

		//publish audio data
		$query5 = "SELECT * FROM publish_audio ORDER BY publishAt DESC";
		$result5=mysqli_query($mysqli, $query5);

		//publish audio data
		$query6 = "SELECT * FROM publish_video ORDER BY publishAt DESC";
		$result6=mysqli_query($mysqli, $query6);

		//loop yt data, saving to array
		if ($result->num_rows > 0) {
	    	while ($row = $result->fetch_assoc()) {
	    		$dbjsonyt[] = $row;
	    		
	    	}	
	       
	    }

	    //loop news org data, saving to array
	    if ($result2->num_rows > 0) {
	    	while ($row = $result2->fetch_assoc()) {
	    		$dbjsonnews[] = $row;
	    		
	    	}	
	       
	    }

	    //loop listen notes data, saving to array
	    if ($result3->num_rows > 0) {
	    	while ($row = $result3->fetch_assoc()) {
	    		$dbjsonlisten[] = $row;
	    		
	    	}	
	       
	    }

	    //loop publish_article data, saving to array
	    if ($result4->num_rows > 0) {
	    	while ($row = $result4->fetch_assoc()) {
	    		$dbarticle[] = $row;
	    		
	    	}	
	       
	    }

	    //loop publish_audio data, saving to array
	    if ($result5->num_rows > 0) {
	    	while ($row = $result5->fetch_assoc()) {
	    		$dbaudio[] = $row;
	    		
	    	}	
	       
	    }

	    //loop publish_video data, saving to array
	    if ($result6->num_rows > 0) {
	    	while ($row = $result6->fetch_assoc()) {
	    		$dbvideo[] = $row;
	    		
	    	}	
	       
	    }
     
    }

     echo json_encode(['yt_data' => $dbjsonyt, 'newsorg_data' =>$dbjsonnews, 'listen_data' =>$dbjsonlisten, 'publish_article' =>$dbarticle, 'publish_audio' =>$dbaudio, 'publish_video' =>$dbvideo]);

}else{
	// DEFAULT FUNCTION IF SERACH IS EMPTY
	//yt data
	$query = "SELECT * FROM ytapi ORDER BY publishAt DESC";
	$result=mysqli_query($mysqli, $query);

	//news org data
	$query2 = "SELECT * FROM newsapi ORDER BY publishat DESC";
	$result2=mysqli_query($mysqli, $query2);

	//liste notes data
	$query3 = "SELECT * FROM listenapi ORDER BY publish_date DESC";
	$result3=mysqli_query($mysqli, $query3);

	//publish article data
	$query4 = "SELECT * FROM publish_article ORDER BY publishAt DESC";
	$result4=mysqli_query($mysqli, $query4);

	//publish audio data
	$query5 = "SELECT * FROM publish_audio ORDER BY publishAt DESC";
	$result5=mysqli_query($mysqli, $query5);

	//publish audio data
	$query6 = "SELECT * FROM publish_video ORDER BY publishAt DESC";
	$result6=mysqli_query($mysqli, $query6);	


	//loop yt data, saving to array
	if ($result->num_rows > 0) {
    	while ($row = $result->fetch_assoc()) {
    		$dbjsonyt[] = $row;
    		
    	}	
       
    }

    //loop news org data, saving to array
    if ($result2->num_rows > 0) {
    	while ($row = $result2->fetch_assoc()) {
    		$dbjsonnews[] = $row;
    		
    	}	
       
    }

     //loop listen notes data, saving to array
	if ($result3->num_rows > 0) {
	    while ($row = $result3->fetch_assoc()) {
	    	$dbjsonlisten[] = $row;
	    		
	    }	
	       
	}

	//loop publish_article data, saving to array
	if ($result4->num_rows > 0) {
	 	while ($row = $result4->fetch_assoc()) {
	  		$dbarticle[] = $row;
	    		
	 	}	
	       
	}

	//loop publish_audio data, saving to array
	if ($result5->num_rows > 0) {
	   	while ($row = $result5->fetch_assoc()) {
	    	$dbaudio[] = $row;
	    		
	    }	
	       
	}

	//loop publish_video data, saving to array
	if ($result6->num_rows > 0) {
	    while ($row = $result6->fetch_assoc()) {
	    	$dbvideo[] = $row;
	    		
	    }	
	       
	}

    if(isset($_SESSION["email"])){
    	echo json_encode(['yt_data' => $dbjsonyt, 'newsorg_data' =>$dbjsonnews, 'listen_data' =>$dbjsonlisten, 'publish_article' =>$dbarticle, 'publish_audio' =>$dbaudio, 'publish_video' =>$dbvideo, 'email' =>$_SESSION["email"]]);
    }else{
    	echo json_encode(['yt_data' => $dbjsonyt, 'newsorg_data' =>$dbjsonnews, 'listen_data' =>$dbjsonlisten, 'publish_article' =>$dbarticle, 'publish_audio' =>$dbaudio, 'publish_video' =>$dbvideo]);
    }

     
}

?>