
<section id="what-is-listenapi">
			<h3>Listen API Overview</h3> 
			<p>Simple & no-nonsense podcast search & directory API. Search the meta data of 2,110,862 podcasts and 98,938,247 episodes by people, places, or topics. It's the same API that powers this website.</p>

			<h3>High quality podcast database</h3>
			<p>Our data is aggregated from multiple sources and updated 24/7. Podcast data are inherently messy (e.g., malformed RSS feed, broken audio links...). We built a lot of sophisticated internal tools to clean up such messy data automatically and manually 24/7. Read DOCS for all endpoints and sample JSON responses.</p>

			<h3>Fast, reliable, scalable</h3>
			<p>We take care of the complex backend infrastructure, so you can focus on your product. See STATUS for system health.</p>

			<h3>Save time. Save money.</h3>
			<p>It costs more than $100 for 1 hour engineering time in San Francisco. Using Listen API can easily save you hundreds of hours engineering time to build a very basic version of your own podcast database and thousands more hours to improve / maintain the infrastructure down the road.</p>

			<h3>The best customer support</h3>
			<p>If you subscribe to the PRO or ENTERPRISE plan, you will get fast and informative replies from the founder and CEO of Listen Notes, who built this whole thing by hand and by heart.</p>

			<h3>Customer love</h3>
			<p>Trusted by 2,313 companies and developers. Listen API is used by full-fledged podcast player apps, music apps, audiobook apps, smart speaker apps, PR agencies, marketing platforms, content curation services, EdTech products, and more.</p>

			<h3>Here today and tomorrow</h3>
			<p>We've been around since 2017 and we plan on being around for a long time. Listen API is a critical part of our core business. We care a lot. We actively improve Listen API. This is unlike other hobby projects from big companies, which can easily disappear after a reorg.</p>

		</section>

		<section>
			<hr>
		</section>

		<section id="listenapi_search">
			<h3>Search</h3> 

			<h4>GET https://listen-api.listennotes.com/api/v2/search?</h4>

			<p>Request Parameters</p>

			<table border="1px" style="text-align: center; width: 100%;">
				
				<thead>
					
					<th><center>Param</center></th>
					<th><center>Def</center></th>

				</thead>
				
				<tr>
					<td>X-ListenAPI-Key</td>
					<td>Your API key.</td>
				</tr>
				<tr>
					<td>q</td>
					<td>Search term, e.g., person, place, topic... You can use double quotes to do verbatim match, e.g., "game of thrones". Otherwise, it's fuzzy search.</td>
				</tr>
				<tr>
					<td>sort_by_date</td>
					<td>Sort by date or not? If 0, then sort by relevance. If 1, then sort by date. Available values: 0, 1 Default: 0</td>
				</tr>
				<tr>
					<td>type</td>
					<td>What type of contents do you want to search for? Available values: episode, podcast, curated Default: episode</td>
				</tr>
				<tr>
					<td>offset</td>
					<td>Offset for search results, for pagination. You'll use **next_offset** from response for this parameter. Default: 0</td>
				</tr>
				<tr>
					<td>len_min</td>
					<td>Minimum audio length in minutes. Applicable only when type parameter is **episode**. Default: 0</td>
				</tr>
				<tr>
					<td>len_max</td>
					<td>Maximum audio length in minutes. Applicable only when type parameter is **episode**.</td>
				</tr>
				<tr>
					<td>episode_count_min</td>
					<td>Minimum number of episodes. Applicable only when type parameter is **podcast**.</td>
				</tr>
				<tr>
					<td>episode_count_max</td>
					<td>Minimum number of episodes. Applicable only when type parameter is **podcast**.</td>
				</tr>
				<tr>
					<td>genre_ids</td>
					<td>A comma-delimited string of a list of genre ids. If not specified, then all genres are included. You can find the id and the name of all genres from `GET /genres`. It works only when **type** is *episode* or *podcast*.</td>
				</tr>
				<tr>
					<td>published_before</td>
					<td>Only show episodes/podcasts/curated lists published before this timestamp (in milliseconds). If **published_before** & **published_after** are used at the same time, **published_before** should be bigger than **published_after**.</td>
				</tr>
				<tr>
					<td>published_after</td>
					<td>Only show episodes/podcasts/curated lists published after this timestamp (in milliseconds). If **published_before** & **published_after** are used at the same time, **published_before** should be bigger than **published_after**. Default: 0
					</td>
				</tr>
				<tr>
					<td>only_in</td>
					<td>A comma-delimited string to search only in specific fields. Allowed values are title, description, author, and audio. If not specified, then search every fields. Default: title,description,author,audio</td>
				</tr>
				<tr>
					<td>language</td>
					<td>Limit search results to a specific language. If not specified, it'll be any language. You can get a list of supported languages from `GET /languages`. It works only when **type** is *episode* or *podcast*.</td>
				</tr>
				<tr>
					<td>region</td>
					<td>Limit search results to a specific region (e.g., us, gb, in...). If not specified, it'll be any region. You can get the supported country codes from `GET /regions`. It works only when **type** is *episode* or *podcast*.</td>
				</tr>
				<tr>
					<td>ocid</td>
					<td>A comma-delimited string of podcast ids (up to 5 podcasts) - you can get a podcast id from the **podcast_id** field in response. This parameter is to limit search results from only a few specific podcasts. It works only when **type** is *episode*.</td>
				</tr>
				<tr>
					<td>ncid</td>
					<td>A comma-delimited string of podcast ids (up to 5 podcasts) - you can get a podcast id from the **podcast_id** field in response. This parameter is to exclude search results of a few specific podcasts. It works only when **type** is *episode*.</td>
				</tr>
				<tr>
					<td>safe_mode</td>
					<td>Whether or not to exclude podcasts/episodes with explicit language. 1 is yes and 0 is no. It works only when **type** is *episode* or *podcast*.Available values: 0, 1 Default: 0</td>
				</tr>
			</table>
		</section>

		<section>
			<hr>
		</section>

		<section id="listen-by-bestpodcast">
			<h3>Best Podcast</h3> 

			<h4>https://listen-api.listennotes.com/api/v2/best_podcasts?</h4>

			<p>Request Parameters</p>

			<table border="1px" style="text-align: center; width: 100%;">
				
				<thead>
					
					<th><center>Param</center></th>
					<th><center>Def</center></th>

				</thead>
				
				<tr>
					<td>X-ListenAPI-Key</td>
					<td>Your API key.</td>
				</tr>
				<tr>
					<td>genre_id</td>
					<td>You can get the id from `GET /genres`. If not specified, it'll be the overall best podcasts, which can be considered as a special genre.</td>
				</tr>
				<tr>
					<td>page</td>
					<td>Page number of those podcasts in this genre.</td>
				</tr>
				<tr>
					<td>region</td>
					<td>Filter best podcasts by country/region. You can get the supported country codes from `GET /regions`. Default: us</td>
				</tr>
				<tr>
					<td>safe_mode</td>
					<td>Whether or not to exclude podcasts with explicit language. 1 is yes, and 0 is no. Available values: 0, 1 Default: 0</td>
				</tr>		
			</table>
		</section>

		<section id="listenapi-functionalities">
			<h3>Functionalities used in ListenAPI Page</h3>
			<ul>
				<li>Best Podcast Request
					<p>- using the best podcast request | default display</p>
				</li>
				<li>Search Podcast Request
					<p>- using the search request | display searched podcast</p>
				</li>
				<li>Search
					<p>- can search using the provided search bar</p>
				</li>
				<li>Get All Podcast
					<p>- store all displayed data</p>
				</li>
				<li>Get Individual Podcast
					<p>- store specific data</p>
				</li>
			</ul>
		</section>

		<section>
			<hr>
		</section>

		<section id="listenapi-data-used">
			<h3>Data used in NewsCollect | From API</h3>
			<p>This is from json objects</p>
			<p>For Best Podcast</p>
			<ul>
				<li>Podcast Title</li>
				<li>Podcast Publisher</li>
				<li>Podcast Image</li>
				<li>Source</li>
				<li>date of publish</li>
			</ul>
			<br>
			<p>For Search</p>
			<ul>
				<li>Podcast Title</li>
				<li>Podcast Publisher</li>
				<li>Podcast Image</li>
				<li>Source</li>
				<li>date of publish</li>
			</ul>
			<br>


		</section>

		<section>
			<hr>
		</section>