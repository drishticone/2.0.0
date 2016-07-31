<?php
session_start();
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '900138460052258',
  'app_secret' => '17c4ad1fbccb70e09c648dfb4a6efe90',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://drishticone.org/login.php', $permissions);

?>
