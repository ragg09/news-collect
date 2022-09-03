<?php

//db connection
require("config.php");

	

//insert data manually
if(isset($_POST['button'])){
	// $id = $_REQUEST['id']; 
	$title = $_REQUEST['title'];
	$author = $_REQUEST['author'];
	$url = $_REQUEST['url'];
	$urlimage = $_REQUEST['urlimage'];
	$publishat = $_REQUEST['publishat'];
	$q = "INSERT INTO newsapi (author,  title, url, urlimage, publishat) VALUES ('$author', '$title', '$url', '$urlimage', '$publishat')";
	mysqli_query($mysqli, $q);
	mysqli_close($mysqli);
}




if(isset($_POST['all'])){
	// $id1 = $_REQUEST['id1'];
	// $id2 = $_REQUEST['id2'];
	// $id3 = $_REQUEST['id3'];
	// $id4 = $_REQUEST['id4'];
	// $id5 = $_REQUEST['id5'];
	// $id6 = $_REQUEST['id6'];	
	// $id7 = $_REQUEST['id7'];		
	// $id8 = $_REQUEST['id8'];		
	// $id9 = $_REQUEST['id9'];		
	// $id10 = $_REQUEST['id10'];		
	// $id11 = $_REQUEST['id11'];		
	// $id12 = $_REQUEST['id12'];

	$author1 = $_REQUEST['author1'];
	$author2 = $_REQUEST['author2'];
	$author3 = $_REQUEST['author3'];
	$author4 = $_REQUEST['author4'];
	$author5 = $_REQUEST['author5'];
	$author6 = $_REQUEST['author6'];	
	$author7 = $_REQUEST['author7'];		
	$author8 = $_REQUEST['author8'];		
	$author9 = $_REQUEST['author9'];		
	$author10 = $_REQUEST['author10'];		
	$author11 = $_REQUEST['author11'];		
	$author12 = $_REQUEST['author12'];

	$title1 = $_REQUEST['title1'];
	$title2 = $_REQUEST['title2'];
	$title3 = $_REQUEST['title3'];
	$title4 = $_REQUEST['title4'];
	$title5 = $_REQUEST['title5'];
	$title6 = $_REQUEST['title6'];	
	$title7 = $_REQUEST['title7'];		
	$title8 = $_REQUEST['title8'];		
	$title9 = $_REQUEST['title9'];		
	$title10 = $_REQUEST['title10'];		
	$title11 = $_REQUEST['title11'];		
	$title12 = $_REQUEST['title12'];


	$url1 = $_REQUEST['url1'];
	$url2 = $_REQUEST['url2'];
	$url3 = $_REQUEST['url3'];
	$url4 = $_REQUEST['url4'];
	$url5 = $_REQUEST['url5'];
	$url6 = $_REQUEST['url6'];
	$url7 = $_REQUEST['url7'];
	$url8 = $_REQUEST['url8'];
	$url9 = $_REQUEST['url9'];
	$url10 = $_REQUEST['url10'];
	$url11 = $_REQUEST['url11'];
	$url12 = $_REQUEST['url12'];

	$urlimage1 = $_REQUEST['urlimage1'];
	$urlimage2 = $_REQUEST['urlimage2'];
	$urlimage3 = $_REQUEST['urlimage3'];
	$urlimage4 = $_REQUEST['urlimage4'];
	$urlimage5 = $_REQUEST['urlimage5'];
	$urlimage6 = $_REQUEST['urlimage6'];	
	$urlimage7 = $_REQUEST['urlimage7'];		
	$urlimage8 = $_REQUEST['urlimage8'];		
	$urlimage9 = $_REQUEST['urlimage9'];		
	$urlimage10 = $_REQUEST['urlimage10'];		
	$urlimage11 = $_REQUEST['urlimage11'];		
	$urlimage12 = $_REQUEST['urlimage12'];

	$publishat1 = $_REQUEST['publishat1'];
	$publishat2 = $_REQUEST['publishat2'];
	$publishat3 = $_REQUEST['publishat3'];
	$publishat4 = $_REQUEST['publishat4'];
	$publishat5 = $_REQUEST['publishat5'];
	$publishat6 = $_REQUEST['publishat6'];	
	$publishat7 = $_REQUEST['publishat7'];		
	$publishat8 = $_REQUEST['publishat8'];		
	$publishat9 = $_REQUEST['publishat9'];		
	$publishat10 = $_REQUEST['publishat10'];		
	$publishat11 = $_REQUEST['publishat11'];		
	$publishat12 = $_REQUEST['publishat12'];




	// $q = "INSERT INTO newsapi (id, author, title, url ,urlimage, publishat) VALUES ('$id1', '$title1', '$author1', $url1, '$urlimage1', '$publishat1'), ('$id2', '$title2', '$author2', $url2, '$urlimage2', '$publishat2'), ('$id3', '$title3', '$author3', $url3, '$urlimage3', '$publishat3'), ('$id4', '$title4', '$author4', $url4, '$urlimage4', '$publishat4'), ('$id5', '$title5', '$author5', $url5, '$urlimage5', '$publishat5'), ('$id6', '$title6', '$author6', $url6, '$urlimage6', '$publishat6'), ('$id7', '$title7', '$author7', $url7, '$urlimage7', '$publishat7'), ('$id8', '$title8', '$author8', $url8, '$urlimage8', '$publishat8'), ('$id9', '$title9', '$author9', $url9, '$urlimage9', '$publishat9'), ('$id10', '$title10', '$author10', $url10, '$urlimage10', '$publishat10'), ('$id11', '$title11', '$author11', $url11, '$urlimage11', '$publishat11'), ('$id12', '$title12', '$author12', $url12, '$urlimage12', '$publishat12')";
	// mysqli_query($mysqli, $q);
	// mysqli_close($mysqli);

	$q = "INSERT INTO newsapi (title, author, url, urlimage, publishat) VALUES ('$title1', '$author1', '$url1', '$urlimage1', '$publishat1')";
	mysqli_query($mysqli, $q);

	$q2 = "INSERT INTO newsapi (title, author,url, urlimage, publishat) VALUES ('$title2', '$author2', '$url2', '$urlimage2', '$publishat2')";
	mysqli_query($mysqli, $q2);

	$q3 = "INSERT INTO newsapi (title, author, url, urlimage, publishat) VALUES ('$title3', '$author3', '$url3', '$urlimage3', '$publishat3')";
	mysqli_query($mysqli, $q3);

	$q4 = "INSERT INTO newsapi (title, author, url, urlimage, publishat) VALUES ('$title4', '$author4', '$url4', '$urlimage4', '$publishat4')";
	mysqli_query($mysqli, $q4);

	$q5 = "INSERT INTO newsapi (title, author, url, urlimage, publishat) VALUES ('$title5', '$author5', '$url5', '$urlimage5', '$publishat5')";
	mysqli_query($mysqli, $q5);

	$q6 = "INSERT INTO newsapi (title, author, url, urlimage, publishat) VALUES ('$title6', '$author6', '$url6', '$urlimage6', '$publishat6')";
	mysqli_query($mysqli, $q6);

	$q7 = "INSERT INTO newsapi (title, author, url, urlimage, publishat) VALUES ('$title7', '$author7', '$url7', '$urlimage7', '$publishat7')";
	mysqli_query($mysqli, $q7);

	$q8 = "INSERT INTO newsapi (title, author, url, urlimage, publishat) VALUES ('$title8', '$author8', '$url8', '$urlimage8', '$publishat8')";
	mysqli_query($mysqli, $q8);

	$q9 = "INSERT INTO newsapi (title, author, url, urlimage, publishat) VALUES ('$title9', '$author9', '$url9', '$urlimage9', '$publishat9')";
	mysqli_query($mysqli, $q9);

	$q10 = "INSERT INTO newsapi (title, author, url, urlimage, publishat) VALUES ('$title10', '$author10', '$url10', '$urlimage10', '$publishat10')";
	mysqli_query($mysqli, $q10);

	$q11 = "INSERT INTO newsapi (title, author, url, urlimage, publishat) VALUES ('$title11', '$author11', '$url11', '$urlimage11', '$publishat11')";
	mysqli_query($mysqli, $q11);

	$q12 = "INSERT INTO newsapi (title, author, url, urlimage, publishat) VALUES ('$title12', '$author12', '$url12', '$urlimage12', '$publishat12')";
	mysqli_query($mysqli, $q12);

	mysqli_close($mysqli);

}

?>

<script>
	window.history.back();
</script>