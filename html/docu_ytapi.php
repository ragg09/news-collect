<section id="what-is-ytapi">
			<h3>YouTube Data API Overview</h3> 
			<p>This document is intended for developers who want to write applications that interact with YouTube. It explains basic concepts of YouTube and of the API itself. It also provides an overview of the different functions that the API supports.</p>

			<h3>Quota usage</h3>
			<p>The YouTube Data API uses a quota to ensure that developers use the service as intended and do not create applications that unfairly reduce service quality or limit access for others. All API requests, including invalid requests, incur at least a one-point quota cost. You can find the quota available to your application in the <a href="https://console.cloud.google.com/apis/dashboard?" target="_blank">API Console.</a></p>

			<p>Projects that enable the YouTube Data API have a default quota allocation of 10,000 units per day, an amount sufficient for the overwhelming majority of our API users. Default quota, which is subject to change, helps us optimize quota allocations and scale our infrastructure in a way that is more meaningful to our API users. You can see your quota usage on the <a href="https://console.cloud.google.com/iam-admin/quotas?" target="_blank">Quotas page</a> in the API Console.</p>

			<a href="https://developers.google.com/youtube/v3" target="_blank"><h3>Learn More</h3></a>
		</section>

		<section>
			<hr>
		</section>

		<section id="yt_search-live">
			<h3>YT Search & Live</h3> 

			<h4>GET https://youtube.googleapis.com/youtube/v3/search?q=[your search]&key=[your key]</h4>
			<h4>GET https://youtube.googleapis.com/youtube/v3/search?channelId=[preffered channel]&<strong>eventType=live</strong>&q=[your search]&key=[your key]</h4>

			<p>Request Parameters</p>
			<p>The following table lists the parameters that this query supports. All of the parameters listed are query parameters.</p>

			<table border="1px" style="text-align: center; width: 100%;">
				<thead>
						<th>Param</th>
						<th>Def</th>
				</thead>
				<tbody>
					<tr>
						<td>part</td>
						<td>The part parameter specifies a comma-separated list of one or more search resource properties that the API response will include. Set the parameter value to snippet.</td>
					</tr>

					<tr>
						<td>forContentOwner</td>
						<td>boolean <br>This parameter can only be used in a properly authorized request, and it is intended exclusively for YouTube content partners.The forContentOwner parameter restricts the search to only retrieve videos owned by the content owner identified by the onBehalfOfContentOwner parameter. If forContentOwner is set to true, the request must also meet these requirements:</td>
					</tr>

					<tr>
						<td>forDeveloper</td>
						<td>This parameter can only be used in a properly authorized request. The forDeveloper parameter restricts the search to only retrieve videos uploaded via the developer's application or website. The API server uses the request's authorization credentials to identify the developer. The forDeveloper parameter can be used in conjunction with optional search parameters like the q parameter. For this feature, each uploaded video is automatically tagged with the project number that is associated with the developer's application in the Google Developers Console. When a search request subsequently sets the forDeveloper parameter to true, the API server uses the request's authorization credentials to identify the developer. Therefore, a developer can restrict results to videos uploaded through the developer's own app or website but not to videos uploaded through other apps or sites.</td>
					</tr>

					<tr>
						<td>forMine</td>
						<td>This parameter can only be used in a properly authorized request. The forMine parameter restricts the search to only retrieve videos owned by the authenticated user. If you set this parameter to true, then the type parameter's value must also be set to video. In addition, none of the following other parameters can be set in the same request: videoDefinition, videoDimension, videoDuration, videoLicense, videoEmbeddable, videoSyndicated, videoType.</td>
					</tr>

					<tr>
						<td>relatedToVideoId</td>
						<td>The relatedToVideoId parameter retrieves a list of videos that are related to the video that the parameter value identifies. The parameter value must be set to a YouTube video ID and, if you are using this parameter, the type parameter must be set to video.Note that if the relatedToVideoId parameter is set, the only other supported parameters are part, maxResults, pageToken, regionCode, relevanceLanguage, safeSearch, type (which must be set to video), and fields.</td>
					</tr>

					<tr>
						<td>channelId</td>
						<td>The channelId parameter indicates that the API response should only contain resources created by the channel.
						Note: Search results are constrained to a maximum of 500 videos if your request specifies a value for the channelId parameter and sets the type parameter value to video, but it does not also set one of the forContentOwner, forDeveloper, or forMine filters.</td>
					</tr>

					<tr>
						<td>channelType</td>
						<td>The eventType parameter restricts a search to broadcast events. If you specify a value for this parameter, you must also set the type parameter's value to video.</td>
					</tr>

					<tr>
						<td>location</td>
						<td>The location parameter, in conjunction with the locationRadius parameter, defines a circular geographic area and also restricts a search to videos that specify, in their metadata, a geographic location that falls within that area. The parameter value is a string that specifies latitude/longitude coordinates e.g. (37.42307,-122.08427).</td>
					</tr>

					<tr>
						<td>locationRadius</td>
						<td>The locationRadius parameter, in conjunction with the location parameter, defines a circular geographic area.
						The parameter value must be a floating point number followed by a measurement unit. Valid measurement units are m, km, ft, and mi. For example, valid parameter values include 1500m, 5km, 10000ft, and 0.75mi. The API does not support locationRadius parameter values larger than 1000 kilometers.</td>
					</tr>

					<tr>
						<td>maxResults</td>
						<td>The maxResults parameter specifies the maximum number of items that should be returned in the result set. Acceptable values are 0 to 50, inclusive. The default value is 5.</td>
					</tr>

					<tr>
						<td>onBehalfOfContentOwner</td>
						<td>This parameter can only be used in a properly authorized request. Note: This parameter is intended exclusively for YouTube content partners.The onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner.</td>
					</tr>

					<tr>
						<td>order</td>
						<td>The order parameter specifies the method that will be used to order resources in the API response. The default value is relevance.</td>
					</tr>

					<tr>
						<td>pageToken</td>
						<td>The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved.</td>
					</tr>

					<tr>
						<td>publishedAfter</td>
						<td>The publishedAfter parameter indicates that the API response should only contain resources created at or after the specified time. The value is an RFC 3339 formatted date-time value (1970-01-01T00:00:00Z).</td>
					</tr>

					<tr>
						<td>publishedBefore</td>
						<td>The publishedBefore parameter indicates that the API response should only contain resources created before or at the specified time. The value is an RFC 3339 formatted date-time value (1970-01-01T00:00:00Z).</td>
					</tr>

					<tr>
						<td>q</td>
						<td>The q parameter specifies the query term to search for.
						Your request can also use the Boolean NOT (-) and OR (|) operators to exclude videos or to find videos that are associated with one of several search terms. For example, to search for videos matching either "boating" or "sailing", set the q parameter value to boating|sailing. Similarly, to search for videos matching either "boating" or "sailing" but not "fishing", set the q parameter value to boating|sailing -fishing. Note that the pipe character must be URL-escaped when it is sent in your API request. The URL-escaped value for the pipe character is %7C.</td>
					</tr>

					<tr>
						<td>regionCode</td>
						<td>The regionCode parameter instructs the API to return search results for videos that can be viewed in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.</td>
					</tr>

					<tr>
						<td>relevanceLanguage</td>
						<td>The relevanceLanguage parameter instructs the API to return search results that are most relevant to the specified language. The parameter value is typically an ISO 639-1 two-letter language code. However, you should use the values zh-Hans for simplified Chinese and zh-Hant for traditional Chinese. Please note that results in other languages will still be returned if they are highly relevant to the search query term.</td>
					</tr>

					<tr>
						<td>safeSearch</td>
						<td>The safeSearch parameter indicates whether the search results should include restricted content as well as standard content.</td>
					</tr>

					<tr>
						<td>topicId</td>
						<td>The topicId parameter indicates that the API response should only contain resources associated with the specified topic. The value identifies a Freebase topic ID. Important: Due to the deprecation of Freebase and the Freebase API, the topicId parameter started working differently as of February 27, 2017. At that time, YouTube started supporting a small set of curated topic IDs, and you can only use that smaller set of IDs as values for this parameter.</td>
					</tr>

					<tr>
						<td>type</td>
						<td>The type parameter restricts a search query to only retrieve a particular type of resource. The value is a comma-separated list of resource types. The default value is video,channel,playlist.</td>
					</tr>

					<tr>
						<td>videoCaption</td>
						<td>The videoCaption parameter indicates whether the API should filter video search results based on whether they have captions. If you specify a value for this parameter, you must also set the type parameter's value to video.</td>
					</tr>

					<tr>
						<td>videoCategoryId</td>
						<td>The videoCategoryId parameter filters video search results based on their category. If you specify a value for this parameter, you must also set the type parameter's value to video.</td>
					</tr>

					<tr>
						<td>videoDefinition</td>
						<td>The videoDefinition parameter lets you restrict a search to only include either high definition (HD) or standard definition (SD) videos. HD videos are available for playback in at least 720p, though higher resolutions, like 1080p, might also be available. If you specify a value for this parameter, you must also set the type parameter's value to video.</td>
					</tr>

					<tr>
						<td>videoDimension</td>
						<td>The videoDimension parameter lets you restrict a search to only retrieve 2D or 3D videos. If you specify a value for this parameter, you must also set the type parameter's value to video</td>
					</tr>

					<tr>
						<td>videoDuration</td>
						<td>The videoDuration parameter filters video search results based on their duration. If you specify a value for this parameter, you must also set the type parameter's value to video.</td>
					</tr>

					<tr>
						<td>videoEmbeddable</td>
						<td>The videoEmbeddable parameter lets you to restrict a search to only videos that can be embedded into a webpage. If you specify a value for this parameter, you must also set the type parameter's value to video.</td>
					</tr>

					<tr>
						<td>videoLicense</td>
						<td>The videoLicense parameter filters search results to only include videos with a particular license. YouTube lets video uploaders choose to attach either the Creative Commons license or the standard YouTube license to each of their videos. If you specify a value for this parameter, you must also set the type parameter's value to video.</td>
					</tr>

					<tr>
						<td>videoSyndicated</td>
						<td>The videoSyndicated parameter lets you to restrict a search to only videos that can be played outside youtube.com. If you specify a value for this parameter, you must also set the type parameter's value to video.</td>
					</tr>

					<tr>
						<td>videoType</td>
						<td>The videoType parameter lets you restrict a search to a particular type of videos. If you specify a value for this parameter, you must also set the type parameter's value to video.</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section>
			<hr>
		</section>

		<section id="yt_functionalities">
			<h3>Functionalities used in YouTubeAPI Page</h3>
			<ul>
				<li>Search Request
					<p>- using the serach request | default display</p>
				</li>
				<li>Search and Live Request
					<p>- using the search and search with live request | display searched article</p>
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

		<section id="ytapi-data-used">
			<h3>Data used in NewsCollect | From API</h3>
			<p>This is from json objects</p>
			<p>YouTube Search</p>
			<ul>
				<li>Video ID</li>
				<li>Thumbnails</li>
				<li>Channel Title</li>
				<li>Title | Description</li>
				<li>date of publish</li>
			</ul>

			<p>YouTube Search Live</p>
			<ul>
				<li>Video ID</li>
			</ul>
		</section>

		 
		<section id="NewsCollectV2">
			<hr>
		</section>