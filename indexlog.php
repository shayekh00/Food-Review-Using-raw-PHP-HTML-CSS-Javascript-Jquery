
<?php include "log/header.php"; ?>

<style media="screen">

.main_bodybg{

    background: url(images/bg2.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    min-height: 100vh;
}
.sub-main-w3 form {
    background: #F3D7A6;
    padding: 2em;
    -webkit-box-shadow: 12px 5px 16px 2px rgba(16, 16, 16, 0.18);
    -moz-box-shadow: 12px 5px 16px 2px rgba(16, 16, 16, 0.18);
    box-shadow: 12px 5px 16px 2px rgba(16, 16, 16, 0.18);
    margin: -2.5em 2.5em 2em;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    -ms-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}

    .sub-main-w3 form {
        margin: -2em 1em 1.5em;
        padding: 5em;
    }
    .sub-main-w3 {
        margin: 3vw 5vw;
    }

.user{
  padding-bottom: 80px;
  padding-left: 20px;
  padding-right: 20px;
  width:350px;
  height:800px;
}

</style>


<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="283134019152-jcnk0hc037o197p6r5e6ojtakb0ivmmj.apps.googleusercontent.com">


<div class="main_bodybg">
		<!-- title -->
		<h1 >..</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">

				</div>
				<form class="user" action="log/login.php" method="post">
					<p class="legend" ></p>
          <h1>Login</h1>
          <br>
          <br>

					<div class="input">
						<label for="email">Email</label><br>
						<input type="text" placeholder="Email" name="email" id="email" required />
						<span class="fa fa-envelope"></span>
					</div>
          <br>
					<div class="input">
						<label for="password">Password</label><br>
						<input type="password" placeholder="Password" name="password" id="password" required />
						<span class="fa fa-unlock"></span>
					</div>
          <br>


		  <br>
					<div class="input">
						<td>

						</td>

					</div>
          <br>


          <br>
          <input type="submit" name="login" class=" btn btn-primary " value="Login" style="font-size:15pt;color:white;background-color:maroon;border:4px solid #900C3F;padding:5px">
          <br>
          <br>
          <a href="indexsign.php">Dont have account Sign Up Here</a>
          <br>
          <br>
          <br>
						<span class="fa fa-sign-in"></span>
					</button><br>

					<div class ="form-group">

					</div>



					<?php
					// COde FOR  FACEBOOK API
				//	session_start();
					require_once __DIR__ . '/src/Facebook/autoload.php'; // download official fb sdk for php @ https://github.com/facebook/php-graph-sdk

					$fb = new Facebook\Facebook([
					  'app_id' => '365418891019798',
					  'app_secret' => '51ef00cb8b345d5731280906c527eb92',
					  'default_graph_version' => 'v3.1',
					  ]);

					$helper = $fb->getRedirectLoginHelper();

					$permissions = ['email']; // optional

					try {
						if (isset($_SESSION['facebook_access_token'])) {
							$accessToken = $_SESSION['facebook_access_token'];
						} else {
					  		$accessToken = $helper->getAccessToken();
						}
					} catch(Facebook\Exceptions\FacebookResponseException $e) {
					 	// When Graph returns an error
					 	echo 'Graph returned an error: ' . $e->getMessage();

					  	exit;
					} catch(Facebook\Exceptions\FacebookSDKException $e) {
					 	// When validation fails or other local issues
						echo 'Facebook SDK returned an error: ' . $e->getMessage();
					  	exit;
					 }

					if (isset($accessToken)) {
						if (isset($_SESSION['facebook_access_token'])) {
							$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
						} else {
							// getting short-lived access token
							$_SESSION['facebook_access_token'] = (string) $accessToken;

						  	// OAuth 2.0 client handler
							$oAuth2Client = $fb->getOAuth2Client();

							// Exchanges a short-lived access token for a long-lived one
							$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);

							$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;

							// setting default access token to be used in script
							$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
						}

						// redirect the user back to the same page if it has "code" GET variable
						if (isset($_GET['code'])) {
							header('Location: ./');
						}

						// getting basic info about user
						try {
							$profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
							$profile = $profile_request->getGraphNode()->asArray();
						} catch(Facebook\Exceptions\FacebookResponseException $e) {
							// When Graph returns an error
							echo 'Graph returned an error: ' . $e->getMessage();
							session_destroy();
							// redirecting user back to app login page
							header("Location: ./");
							exit;
						} catch(Facebook\Exceptions\FacebookSDKException $e) {
							// When validation fails or other local issues
							echo 'Facebook SDK returned an error: ' . $e->getMessage();
							exit;
						}

						// printing $profile array on the screen which holds the basic info about user
						print_r($profile);

					  	// Now you can redirect to another page and use the access token from $_SESSION['facebook_access_token']
					} else {
						// replace your website URL same as added in the developers.facebook.com/apps e.g. if you used http instead of https and you used non-www version or www version of your website then you must add the same here
						$loginUrl = $helper->getLoginUrl('https://localhost/Food-Review2/', $permissions);
						echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';



					}

?>






				</form>

			</div>
		</div>



	</div>




</script>


<?php include "log/footer.php"; ?>
