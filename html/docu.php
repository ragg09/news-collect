<!DOCTYPE html>
<html>
<head>
	<title>News Collect | Documentation</title>
	
	<link rel="stylesheet" type="text/css" href="../css/general.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

  	<style type="text/css">
  		.nav #getNews{
  			visibility: hidden;
  		}

  		.nav #search{
  			visibility: hidden;
  		}

  		#Myselect{
  			visibility: hidden;
  		}
  	</style>
</head>

<body style="background-color: #141515;">
	<div id="intro"></div>
	<?php
		include("nav.php");
	?>
	
	<div id="docu_list" style="overflow-y: scroll;  width: 350px;">
		<br>
		<ol>
			<li><a href="newsapi.php">News Org Api</a>
				<ul>
					<li><a href="#what-is-newsorg">What is NewsOrg API</a></li>
					<li>Get Request 
						<ul>
							<li><a href="#newsorg-top-headlines">Top Headlines</a></li>
							<li><a href="#newsorg-by-search">Everything</a></li>
						</ul>
					</li>
					<li><a href="#newsorg-functionalities">Functionalities</a></li>
					<li><a href="#newsorg-data-used">Data Used in NewsCollect</a></li>
				</ul>
			</li>

			<li><a href="ytapi.php">YouTube Api</a>
				<ul>
					<li><a href="#what-is-ytapi">What is Youtube API</a></li>
					<li>Get Request 
						<ul>
							<li><a href="#yt_search-live">YT Search & Live </a></li>
						</ul>
					</li>
					<li><a href="#yt_functionalities">Functionalities</a></li>
					<li><a href="#ytapi-data-used">Data Used in NewsCollect</a></li>
				</ul>
			</li>

			<li><a href="#NewsCollectV2">News Collect V2 Preview</a></li>

			<li><a href="#">Google Login Api</a>
				<ul>
					<li><a href="#what-is-glogin">What is Google Login API</a></li>
					<li>Get Request 
						<ul>
							<li><a href="#oauth2">Google OAuth 2</a></li>
						</ul>
					</li>
					<li>Functionalities
						<ul>
							<li><a href="#google-admin">Admin User</a></li>
							<li><a href="#google-registered">Registered User</a></li>
							<li><a href="#google-guest">Guest User</a></li>
						</ul>
					</li>
					<li><a href="#google-data-used">Data Used in Google Login</a></li>
				</ul>
			</li>

			<li><a href="listenapi.php">Listen Api</a>
				<ul>
					<li><a href="#what-is-listenapi">What is ListenAPI</a></li>
					<li>Get Request</li>
						<ul>
							<li><a href="#listenapi_search">Search</a></li>
							<li><a href="#listen-by-bestpodcast">Best Podcast</a></li>
						</ul>
					<li><a href="#listenapi-functionalities">Functionalinites</a></li>
					<li><a href="#listenapi-data-used">Data Used in ListenAPI</a></li>
				</ul>
			</li>

			<li><a href="weatherapi.php">Open Weather Map API</a>
				<ul>
					<li><a href="#what-is-owm">What is OpenWeatherMap</a></li>
					<li>Get Request</li>
						<ul>
							<li><a href="#owm_current">Current Weather Data</a></li>
							<li><a href="#owm_forecast">5 Day / 3 Hour Forecast</a></li>
						</ul>
					<li><a href="#owm-functionalities">Functionalinites</a></li>
					<li><a href="#owm-data-used">Data Used</a></li>
				</ul>
			</li>


			<li><a href="index.php">News Collect</a>
				<ul>
					<li><a href="#what-is-newcollect">What is NewsCollect</a></li>
					<li><a href="#NewsCollect-functionalities">Functionalinites</a></li>
				</ul>
			</li>
			<li><a href="#intro">Documentation</a></li>
		</ol>
	</div>

	<div id="docu_content">
		<br>
		<section>
			<h2>Introduction</h2>
			<p><strong>News Collect</strong> is a web application that aims to use two different APIs namely, NewsOrg and Youtube API, to provide news in accord to the users likings on how the news can be obtained. This web application has two different forms: Article (read only) and Audiovisual. NewsOrg retrieve articles and breaking news headlines from news sources and blogs all over the internet on the other hand, we make website that interact with youtube. It explains basic concepts of YouTube and of the API itself. It also provides an overview of the different functions that the API supports. API is a reliable technology that provides data from different databases, by using this technology, we’ve decided to create a web application wherein the data are solely depends on API. YoutubeAPI provide provides audiovisual contents while NewsOrg API provide readable articles. </p>
		</section>

		<?php
			include("docu_newsorg.php");
			include("docu_ytapi.php");
			include("docu_v2preview.php");
			include("docu_google.php");
			include("docu_listenapi.php");
			include("docu_openweathermap.php");
		?>
		
		<section id="what-is-newcollect">
			<h3>Background</h3>
			<p>By the time that tv is overpowerd by new technologies such as internet, news will remain neccesity for all, but there are still people prefer to read articles than to watch news and people that is prefer to watch documentaries about news than to read article. </p>
			<p>Because of the advancement of technology around the world, we’ve come up for a solution that those people who will be using this web application will be able to choose between readable articles or audiovisual news while ensuring to get the up to date news around the world . This system is designed to make a person's life easier. since some people are too busy to navigate the internet, like the one news they want to read and the next news they want to watch. No one would be confused when using it because of its user-friendly interface.</p>
			<p>Creating a system that informs everyone about current events around the world. A news outlet that provides up to date events at the comfort of their own home. The system has also been designed as an user-friendly type, accommodating anyone that is searching for news. The integration between Youtube API and NewsOrg API give birth to this system, News Collect. </p>
		</section>

		<section id="NewsCollect-functionalities">
			<h4>Functionalities of NewsCollect Page</h4>
			<ul>
				<li>Marqueed TopHeadlines | From Newsorg
					<p>Instead of creating a system alone, we still managed to integrate functionality from this API</p>
				</li>
				<li>Live News Autoplay upon opening of page| From YT API
					<p>Instead of creating a system alone, we still managed to integrate functionality from this API</p>
				</li>
				<li>Display of Collected Data | From DataBase
					<p>Displaying the collected data from two APIs we've used.</p>
				</li>
				<li>Live Search in Database
					<p>In comparison to typical search, this functionality is completely different from other, it uses keyup listener wherein every keystroke reflects to database and automatically search what you are typing.</p>
				</li>
				<li>Sorting: Video | Article | Audio | User Publish
					<p>Since our goal is to have a web app that provides article and audiovisual content, we've made a sorting that dependes on the user preference</p>
				</li>
				<li>Go to source link
					<p>Since NewsCollect is a collection of news from different sources, you can easily go to the source by clicking the thumbnail.</p>
				</li>
				<li>Covid PH Widget</li>
				<li>Weather Widget</li>
				<li>Display of News Published by the user</li>
				<li>Go to custom source link</li>

			</ul>
		</section>

	</div>

</body>
</html>