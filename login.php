<?php
session_start();
include('dbConnection.php');
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '900138460052258',
  'app_secret' => '17c4ad1fbccb70e09c648dfb4a6efe90',
  'default_graph_version' => 'v2.2',
  'cookie' => true,
  ]);
  
$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$oAuth2Client = $fb->getOAuth2Client();

// Exchanges a short-lived access token for a long-lived one
$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

$fb->setDefaultAccessToken($accessToken);

try {
  $response = $fb->get('/me?fields=id,name,gender,email');
  $userNode = $response->getGraphUser();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$_SESSION['id']=$userNode->getId();
$_SESSION['name']=$userNode->getName();
$email=$userNode['email'];
    if (isset($email)) {
        
        $_SESSION['email']=$email;
    }
	$id=$_SESSION['id'];
	$name=$_SESSION['name'];
$userNode->getGender();
$q=mysqli_query($con,"SELECT * FROM user WHERE id='$id' ") or die ("Error 52");
				$count=mysqli_num_rows($q);
				if($count==0)
				{
				$q=mysqli_query($con, "INSERT INTO user VALUES('$id','$name','$email')")or die("error 57");
}else{
  while($row=mysqli_fetch_array($q)){
    $_SESSION['email']=$row['email'];
  }
}


header('location:http://drishticone.org');


?>


