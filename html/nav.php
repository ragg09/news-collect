<?php
require("config.php");

session_start();
?>

<ul class="nav">
    <li title="news collect"><a href="index.php"><img src="../image/newscollect.png"></a></li>
    <?php 
    if(isset($_SESSION["email"]) && $_SESSION["email"]=="news.collect2021@gmail.com"){?>
      <li title="news org"><a href="newsapi.php"><img src="../image/newsorg.png"></a></li>
      <li title="youtube"><a href="ytapi.php"><img src="../image/yt.png"></a></li>
      <li title="listen note"><a href="listenapi.php"><img src="../image/listennote.png"></a></li>
    <?php
    }
    ?>
    <li title="OpenWeatherMap" onclick="getmodal()"><a href="weatherapi.php"><img src="../image/owm.png"></a></li>
  	<li title="documentation"><a href="docu.php"><img src="../image/documentation.png"></a></li>
  	<li><input id="search" style="margin-top: 10px; border-radius: 50px; height: 40px;" placeholder="  Search News" ></input></li>
  	<li><button id="getNews" style="margin-top: 26px; border-radius: 10px; padding: 0px; background-color: #333; border: none;"><img src="../image/search.png" style="height: 25px; width: 25px; border-radius: 50%;"></button></li>
    <li>
      <select id="Myselect">
        <option>Video First</option>
        <option>Article First</option>
        <option>Audio First</option>
        <option>Article Only</option>
        <option>Video Only</option>
        <option>Audio Only</option>
        <option>User Publish</option>
      </select>
    </li>
    
  	<li style="float: right; color: white;" title="authentication">
  		<?php
  			if(isset($_SESSION["email"])){
  				echo "<a href='google_logout.php'><img src='../image/logout.png' style='border-radius: 50%; background-color: grey; height: 40px; width: 40px;'></a>";
  			}
  			else{
  				require("google_config.php");
  				$auth_url = $g_client->createAuthUrl();
				  echo "<a href='$auth_url'><img src='../image/login.png' style='border-radius: 50%; background-color: grey; height: 40px; width: 40px;'></a>";
  			}
  		?>
  	</li>
  	<li style="float: right; color: white; margin-top: 10px;" title="user">
  		<?php
  			if(isset($_SESSION["email"])){
  				//echo "Hi ".strtoupper($_SESSION["given_name"]);
          echo("<img src='".$_SESSION['picture']."' style='border-radius: 50%; background-color: grey; height: 40px; width: 40px;; border:2px solid black;'>");
  			}
  			else{
  				echo "<img src='../image/guest.png' style='border-radius: 50%; background-color: grey; height: 40px; width: 40px;; border:2px solid black;'>";
  			}
   		?>
	</li>
  
  <?php 
    if(isset($_SESSION["email"])){?>
      <li style="float: right; color: white; margin-right: 30px; margin-left: 30px;  margin-top: 10px;"><div style="border-left: 2px solid white; height: 40px; position:absolute; left: 50%;"></div></li>
      <li style="float: right;" title="my journal" ><a href="user_journal.php"><img src="../image/journal.png" style='border-radius: 50%; background-color: grey; height: 40px; width: 40px;'></a></li>
     <li style="float: right;" title="publish" ><a href=""><img src="../image/publish.png" style='border-radius: 50%; background-color: grey; height: 40px; width: 40px;'></a>
        <ul class="pub_option">
          <li><button id="myBtn"><img src="../image/publish_article.png" style='height: 35px; width: 35px;'><span style="margin-right: 10px; margin-left: 10px;">|</span>Publish Article News</button></li>
          <li><button id="myBtn2"><img src="../image/publish_audio.png" style='height: 35px; width: 35px;'><span style="margin-right: 10px; margin-left: 10px;">|</span>Publish Audio News</button></li>
          <li><button id="myBtn3"><img src="../image/publish_video.png" style='height: 35px; width: 35px;'><span style="margin-right: 10px; margin-left: 10px;">|</span>Publish Video News</button></li>
        </ul>
     </li>
    <?php
    }
    ?>

</ul>



<?php
  require("publish_modal.php");
?>

