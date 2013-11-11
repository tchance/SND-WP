<?php
session_start();
require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "sndlou";
$notweets = 5;
$consumerkey = "P6j0QZthtLugRZ3YOFL7Ew";
$consumersecret = "5toFA6DLv0MJ7SpQCJ8hzg2NZvnL8JCZrY1sCE4VMg";
$accesstoken = "48580336-enh2PrhOE9E8jCa0PdQMmyKjd8UuHxspQhmLLOeEu";
$accesstokensecret = "ZtAavgNktEMqVb8KyE2Uytn2TxaaOyt3mpUn9jXXF8";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);

echo json_encode($tweets);

function objectToArray($d) {
		if (is_object($d)) {
			// Gets the properties of the given object
			// with get_object_vars function
			$d = get_object_vars($d);
		}
 
		if (is_array($d)) {
			/*
			* Return array converted to object
			* Using __FUNCTION__ (Magic constant)
			* for recursive call
			*/
			return array_map(__FUNCTION__, $d);
		}
		else {
			// Return array
			return $d;
		}
	}

$tweetsarray = objectToArray($tweets);

?>
