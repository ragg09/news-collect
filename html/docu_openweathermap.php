
		<section id="what-is-owm">
			<h3>What is Open Weather Map</h3>
			<p>We are providing highly recognisable weather products that make working with the weather data a way easier. We work with millions of developers around a clock and believe that these benefits might be suitable for most of applications, up to the complex enterprise systems.</p>
			<ul>
				<li>A spectrum of out-of-the box weather products</li>
				<li>Short-term and long-term forecasts, history and observation</li>
				<li>Any location on the globe</li>
				<li>Transparent pricing and licensing</li>
			</ul>
			<p>Our weather products are accessible via fast, reliable APIs that follow industry standards and compatible with different kind of enterprise systems. All our products content essential climate variables for any location. Besides that, we have some special products that helpful for industries that are affected by weather condition. Amongst them are Road Risk and national weather alerts.</p>

		</section>

		<section id="owm_current">
			<hr>
		</section>

		<section>
			<h3>Current Weathe Data</h3>
			<p>Access current weather data for any location on Earth including over 200,000 cities! We collect and process weather data from different sources such as global and local weather models, satellites, radars and vast network of weather stations. Data is available in JSON, XML, or HTML format</p>
			<h4>API CALL</h4>
			<p>api.openweathermap.org/data/2.5/weather?q={city name}&appid={API key}</p>
			<p>Request Parameters</p>

			<table border="1px" style="text-align: center; width: 100%;">
				
				<thead>	
					<th><center>Param</center></th>
					<th><center>Def</center></th>
				</thead>

				<tr>
					<td>q</td>
					<td>City name, state code and country code divided by comma, use ISO 3166 country codes.
						You can specify the parameter not only in English. In this case, the API response should be returned in the same language as the language of requested location name if the location is in our predefined list of more than 200,000 locations.</td>
				</tr>
				<tr>
					<td>appid</td>
					<td>Your unique API key</td>
				</tr>
				<tr>
					<td>mode</td>
					<td>Response format. Possible values are xml and html. If you don't use the mode parameter format is JSON by default</td>
				</tr>
				<tr>
					<td>units</td>
					<td>Units of measurement. standard, metric and imperial units are available. If you do not use the units parameter, standard units will be applied by default.</td>
				</tr>
				<tr>
					<td>lang</td>
					<td>You can use this parameter to get the output in your language.</td>
				</tr>
					
			</table>

		</section>

		<section id="owm_forecast">
			<hr>
		</section>

		<section>
			<h3>5 day weather forecast</h3>
			<p>We only take 1 day forecast by manipulating the number of timestamps</p>
			<p>5 day forecast is available at any location or city. It includes weather forecast data with 3-hour step. Forecast is available in JSON or XML format.</p>
			<h4>API CALL</h4>
			<p>api.openweathermap.org/data/2.5/forecast?q={city name}&appid={API key}</p>
			<p>Request Parameters</p>

			<table border="1px" style="text-align: center; width: 100%;">
				
				<thead>	
					<th><center>Param</center></th>
					<th><center>Def</center></th>
				</thead>

				<tr>
					<td>q</td>
					<td>City name, state code and country code divided by comma, use ISO 3166 country codes.
						You can specify the parameter not only in English. In this case, the API response should be returned in the same language as the language of requested location name if the location is in our predefined list of more than 200,000 locations.</td>
				</tr>
				<tr>
					<td>appid</td>
					<td>Your unique API key</td>
				</tr>
				<tr>
					<td>mode</td>
					<td>Response format. Possible values are xml and html. If you don't use the mode parameter format is JSON by default</td>
				</tr>
				<tr>
					<td>cnt</td>
					<td>A number of timestamps, which will be returned in the API response.</td>
				</tr>
				<tr>
					<td>units</td>
					<td>Units of measurement. standard, metric and imperial units are available. If you do not use the units parameter, standard units will be applied by default.</td>
				</tr>
				<tr>
					<td>lang</td>
					<td>You can use this parameter to get the output in your language.</td>
				</tr>
					
			</table>
		</section>

		<section id="owm-functionalities">
			<hr>
		</section>

		<section >
			<h3>Functionalities used in OpenWeatherMap Page</h3>
			<p>Before we get to the main topic, we would like to mention that we used 2 other APIs along OpenWeatherMap namely, IPGeolocation API and IP2Location API</p>
			<ul>
				<li>IPGeolocation
					-This API is used as function to get the IP address and Geolcation of the user but while to IP Address is accurate, the location is not.
				</li>
				<li>IP2Location
					-This API is used as function to get the accurate location of the user by using their IP address but while it is accurate, this API need the IP address.
				</li>
				<li>User Reliant Backend Processes
					-The page will automatically update the NewsCollect databases everytime user visit the page. The update occur if any of the 2 condition is met, Hourly or Daily change.
				</li>
				<li>Display Current Weather of the User's Location</li>
				<li>Display 1 Day Forecast of the User's Location</li>
				<li>Mapping that show User's Latitude and Longitude with weather indicators</li>
				<li>Browse any city with the 3 functionalitie mention above.</li>
			</ul>
		</section>

		<section>
			<hr>
		</section>

		<section id="owm-data-used">
			<h3>Open Weather Map Data</h3>
			<ul>
				<li>City Name</li>
				<li>Image</li>
				<li>Weather Description</li>
				<li>Temperature</li>
				<li>Feels Like Temperature</li>
				<li>Humidity</li>
				<li>Latitude</li>
				<li>Longitude</li>
			</ul>
		</section>

		<section>
			<hr>
		</section>