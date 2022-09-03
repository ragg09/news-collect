<?php

require ("../vendor/autoload.php");
$g_client = new Google_Client();

$g_client->setClientId("177917584100-diajuviu2b08ra780fif6gjjovtb33sn.apps.googleusercontent.com");
$g_client->setClientSecret("s0-tOI7sIQJu-q4CM32i2Xwl");
//$g_client->setRedirectUri("http://localhost/news-collect/html/docu.php");
$g_client->setRedirectUri("http://localhost/news-collect/html/google_login.php");
$g_client->setScopes(["email", "profile"]);

?>