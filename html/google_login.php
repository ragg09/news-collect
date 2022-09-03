<?php
//db connection
require("config.php");

session_start();

//Step 1: Credential ng oauth, galing to dun sa API iseset up lang
require("google_config.php");


//Step 2 : Create the url | nilipat ko to sa navigtion bar
// $auth_url = $g_client->createAuthUrl();
// echo "<a href='$auth_url'>SIGN IN</a>";

//Step 3 : Get the authorization  code
$_SESSION["code"] = isset($_GET['code']) ? $_GET['code'] : NULL;
// var_dump($_SESSION["code"]);
// var_dump($_SESSION["token"]);

//Step 4: kung may nakuha na na token, mapupunta ung sa $code
if(isset($_SESSION["code"])) {

    try{

        $_SESSION["token"] = $g_client->fetchAccessTokenWithAuthCode($_SESSION["code"]);
        $g_client->setAccessToken($_SESSION["token"]);

    }catch (Exception $e){
        echo $e->getMessage();
    }




    try {
        $pay_load = $g_client->verifyIdToken();
        //ito ung string ng mga value na nakuga
        //var_dump($pay_load);

    }catch (Exception $e) {
        echo $e->getMessage();
    }

} else{
    $pay_load = null;
}

if(isset($pay_load)){
    echo $pay_load["email"];
    echo $pay_load["family_name"];
    echo $pay_load["given_name"];
    echo $pay_load["picture"];
    //var_dump($pay_load);
    // echo json_encode(['g_user' => $pay_load]);

    //logging the data as json for checking purposes
    echo("<script>console.log(".json_encode(['g_user' => $pay_load]).");</script>");

    $_SESSION["email"] = $pay_load["email"];
    $_SESSION["family_name"] = $pay_load["family_name"];
    $_SESSION["given_name"] = $pay_load["given_name"];
    $_SESSION["picture"] = $pay_load["picture"];


    //checking if user exist, setting up trapping.
    $query = "SELECT * FROM user WHERE email LIKE '%".$_SESSION["email"]."%'";
    $result=mysqli_query($mysqli, $query);

    //trapping for user if they are already registered 
    if ($result->num_rows > 0) {
        //papalitan ko pa to sa index, naka docu lang ngayon para d maubos quota natin hahahha
        header("Location: http://localhost/news-collect/html/index.php"); 
    }else{
        //papalitan ko pa to sa index, naka docu lang ngayon para d maubos quota natin hahahha
        header("Location: http://localhost/news-collect/html/google_registration_form.php"); 
    }

}

?>