		

		<section  id="what-is-glogin">
			<hr>
		</section>

		<section>
			<h3>Google LogIn API</h3> 
			<p>Google Sign-In manages the OAuth 2.0 flow and token lifecycle, simplifying your integration with Google APIs. A user always has the option to revoke access to an application at any time.</p>
			<p>Any application that uses OAuth 2.0 to access Google APIs must have authorization credentials that identify the application to Google's OAuth 2.0 server. The following steps explain how to create credentials for your project. Your applications can then use the credentials to access APIs that you have enabled for that project.</p>
			<ol>
				<li>Go to the Credentials page.</li>
				<li>Click Create credentials > OAuth client ID.</li>
				<li>Select the Web application application type.</li>
				<li>Name your OAuth 2.0 client and click Create</li>
			</ol>

			
		</section>

		<section id="oauth2">
			<hr>
		</section>

		<section>
			<h3>Google OAuth2 API, v2</h3> 



			<table border="1px" style="text-align: center; width: 100%;">
				
				<thead>
					
					<th><center>Scopes</center></th>
					<th><center>Def</center></th>

				</thead>
				
				<tr>
					<td style=" padding: 5px;">https://www.googleapis.com/auth/userinfo.email	</td>
					<td style=" padding: 5px;">View your email address</td>
				</tr>
				<tr>
					<td style=" padding: 5px;">https://www.googleapis.com/auth/userinfo.profile	</td>
					<td style=" padding: 5px;">See your personal info, including any personal info you've made publicly available</td>
				</tr>
				<tr>
					<td style=" padding: 5px;">openid</td>
					<td style=" padding: 5px;">Associate you with your personal info on Google</td>
				</tr>
			</table>
		</section>

		<section id="google-admin">
			<hr>
		</section>

		<section>
			<h3>ADMIN USER</h3>
			<p>Admin can use all the privilege and the only user that can access every page of the News Collect.</p>
			<p>Unlike the News Collect V1, News Collect V2 is the only user that can collect data from other APIs</p>
			<h4>Functionalities</h4>
			<ul>
				<li>Can collect data from API</li>
				<li>The only user that can view all the pages</li>
				<li>Can Delete Any News from the main page</li>
				<li>Can Publish Article</li>
				<li>Can Publish Audio</li>
				<li>Can Publish Video</li>
			</ul>
		</section>

		<section id="google-registered">
			<hr>
		</section>

		<section>
			<h3>REGISTERED USER</h3>
			<h4>Functionalities</h4>
			<ul>
				<li>Can Register Acount after login (for publishing and adding favorite purposes)
					<p>If the user skipped the registration, he will be prompt in the registraion form if he decided to add favorite or publish news</p>
				</li>
				<li>Can Save Favorite News</li>
				<li>Can Delete Favorite News</li>
				<li>Can Publish Article</li>
				<li>Can Delete Published Article</li>
				<li>Can Publish Audio</li>
				<li>Can Delete Published Audio</li>
				<li>Can Publish Video</li>
				<li>Can Delete Published Video</li>
			</ul>
		</section>

		<section id="google-guest">
			<hr>
		</section>

		<section>
			<h3>GUEST USER</h3>
			<p>Can only view the news in the main page and the documentation.</p>
		</section>

		<section id="google-data-used">
			<hr>
		</section>

		<section>
			<h3>Data used in NewsCollect | From Google Login</h3>
			<p>These data will be used mainly for publishing. It will serve as the information of the publisher</p>
			<h4>Scope: email and profile</h4>
			<ul>
				<li>Email</li>
				<li>Given Name</li>
				<li>Family Name</li>
				<li>Full Name</li>
				<li>Image</li>
			</ul>
		</section>

		<section>
			<hr>
		</section> 