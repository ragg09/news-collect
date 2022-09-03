		

		<section>
			<hr>
		</section>

		<section id="what-is-newsorg">
			<h3>News Org API</h3> 
			<p>News API is a simple HTTP REST API for searching and retrieving live articles from all over the web. It can help you answer questions like:</p>

			<ul>
				<li>What top stories is TechCrunch running right now?</li>
				<li>What new articles were published about the next iPhone today?</li>
				<li>Has my company or product been mentioned or reviewed by any blogs recently?</li>
			</ul>

			<br>

			<p>You can search for articles with any combination of the following criteria:</p>

			<ul>
				<li>Keyword or phrase. Eg: find all articles containing the word 'Microsoft'.</li>
				<li>Date published. Eg: find all articles published yesterday.</li>
				<li>Source domain name. Eg: find all articles published on thenextweb.com.</li>
				<li>Language. Eg: find all articles written in English.</li>
			</ul>


			<br>

			<p>You can search for articles with any combination of the following criteria:</p>

			<ul>
				<li>Date published</li>
				<li>Relevancy to search keyword</li>
				<li>Popularity of source</li>
			</ul>

			<p>You need an API key to use the API - this is a unique key that identifies your requests. They're free while you're in development.</p>
			<a href="https://newsapi.org" target="_blank"><h3>Learn More</h3></a>
		</section>

		<section>
			<hr>
		</section>

		<section id="newsorg-top-headlines">
			<h3>Top Headlines</h3> 

			<h4>GET https://newsapi.org/v2/top-headlines?country=us&apiKey=[your_key]</h4>

			<p>Request Parameters</p>

			<table border="1px" style="text-align: center; width: 100%;">
				
				<thead>
					
					<th><center>Param</center></th>
					<th><center>Def</center></th>

				</thead>
				
				<tr>
					<td>apiKey</td>
					<td>Your API key.</td>
				</tr>
				<tr>
					<td>country</td>
					<td>The 2-letter ISO 3166-1 code of the country you want to get headlines for.</td>
				</tr>
				<tr>
					<td>category</td>
					<td>The category you want to get headlines for.</td>
				</tr>
				<tr>
					<td>sources</td>
					<td>A comma-seperated string of identifiers for the news sources or blogs you want headlines from. Use the /sources endpoint to locate these programmatically or look at the sources index. Note: you can't mix this param with the country or category params.</td>
				</tr>
				<tr>
					<td>q</td>
					<td>Keywords or a phrase to search for.</td>
				</tr>
				<tr>
					<td>pageSize (int)</td>
					<td>The number of results to return per page (request). 20 is the default, 100 is the maximum.</td>
				</tr>
				<tr>
					<td>page (int)</td>
					<td>Use this to page through the results if the total results found is greater than the page size.</td>
				</tr>
			</table>
		</section>

		<section>
			<hr>
		</section>

		<section id="newsorg-by-search">
			<h3>Everything</h3> 

			<h4>GET https://newsapi.org/v2/everything?q=AnyNews&apiKey=[your_key]</h4>

			<p>Request Parameters</p>

			<table border="1px" style="text-align: center; width: 100%;">
				
				<thead>
					
					<th><center>Param</center></th>
					<th><center>Def</center></th>

				</thead>
				
				<tr>
					<td>apiKey</td>
					<td>Your API key.</td>
				</tr>
				<tr>
					<td>q</td>
					<td>Keywords or phrases to search for in the article title and body.</td>
				</tr>
				<tr>
					<td>qInTitle</td>
					<td>Keywords or phrases to search for in the article title only.</td>
				</tr>
				<tr>
					<td>sources</td>
					<td>A comma-seperated string of identifiers (maximum 20) for the news sources or blogs you want headlines from. Use the /sources endpoint to locate these programmatically or look at the sources index.</td>
				</tr>
				<tr>
					<td>domains</td>
					<td>A comma-seperated string of domains (eg bbc.co.uk, techcrunch.com, engadget.com) to restrict the search to</td>
				</tr>
				<tr>
					<td>excludeDomains</td>
					<td>A comma-seperated string of domains (eg bbc.co.uk, techcrunch.com, engadget.com) to remove from the results.</td>
				</tr>
				<tr>
					<td>from</td>
					<td>A date and optional time for the oldest article allowed. This should be in ISO 8601 format (e.g. 2021-03-17 or 2021-03-17T16:47:32)</td>
				</tr>
				<tr>
					<td>to</td>
					<td>A date and optional time for the newest article allowed. This should be in ISO 8601 format (e.g. 2021-03-17 or 2021-03-17T16:47:32)</td>
				</tr>
				<tr>
					<td>language</td>
					<td>The 2-letter ISO-639-1 code of the language you want to get headlines for.</td>
				</tr>
				<tr>
					<td>sortBy</td>
					<td>The order to sort the articles in. Possible options: relevancy, popularity, publishedAt.</td>
				</tr>
				<tr>
					<td>pageSize|int</td>
					<td>The number of results to return per page</td>
				</tr>
				<tr>
					<td>page</td>
					<td>Use this to page through the results.</td>
				</tr>
				
			</table>
		</section>

		<section id="newsorg-functionalities">
			<h3>Functionalities used in NewsOrg Page</h3>
			<ul>
				<li>Top Headlines Request
					<p>- using the top headline request | default display</p>
				</li>
				<li>Search News Request
					<p>- using the everything request | display searched article</p>
				</li>
				<li>Search
					<p>- can search using the provided search bar</p>
				</li>
				<li>Get All News
					<p>- store all displayed data</p>
				</li>
				<li>Get Individual News
					<p>- store specific data</p>
				</li>
			</ul>
		</section>

		<section>
			<hr>
		</section>

		<section id="newsorg-data-used">
			<h3>Data used in NewsCollect | From API</h3>
			<p>This is from json objects</p>
			<p>For Top Headlines</p>
			<ul>
				<li>Article Link</li>
				<li>Image link</li>
				<li>Article Title</li>
				<li>Author name</li>
				<li>Source</li>
				<li>date of publish</li>
			</ul>
			<br>
			<p>For Everything</p>
			<ul>
				<li>Article Link</li>
				<li>Image link</li>
				<li>Article Title</li>
				<li>Author name</li>
				<li>Source</li>
				<li>date of publish</li>
			</ul>
			<br>


		</section>

		<section>
			<hr>
		</section>