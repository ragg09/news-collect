<?php
	session_start();
	require("google_config.php");
	$g_client->revokeToken($_SESSION["token"]);
	unset($_SESSION["code"]);
	unset($_SESSION["token"]);
	session_destroy();
	header("Location: http://localhost/news-collect/html/index.php");
?>