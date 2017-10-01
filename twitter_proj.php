<?php


	session_start();
	require_once('TwitterAPIExchange.php');

	$settings = array(
		'oauth_access_token' => "65124523-TMzgkVVuNzpFv3TIusqxf3KvGQepgzOZu4jKmMbJa",
		'oauth_access_token_secret' => "03XnJhk5qOJyCOpvfoG1pJbvRxyekEWoFV9SKsZmAoiBE",
		'consumer_key' => "yqbGZh6NCTOw77ISFWJHmgPSt",
		'consumer_secret' => "ZOPa7hh7uRVvpQUWOf72D30NegKpwK3MSxOfzxwyfZODDSOiLt"
	);

	$url = 'https://api.twitter.com/1.1/statuses/home_timeline.json';
	$getfield = '?screen_name=hindu_steve&count=10';
	$requestMethod = 'GET';
	$twitter = new TwitterAPIExchange($settings);
	$result = json_decode ($twitter->setGetfield($getfield)
		->buildOauth($url, $requestMethod)
		->performRequest());

	foreach ($result as $tweet) {
			// print_r($tweet);
		if ($tweet -> favorite_count > 5) {			
			echo $tweet -> text;
			echo "<br />";

			echo $tweet -> id;
			echo "<br />";



			echo $tweet -> favorite_count;
			echo "<br />";	
			}
	}

	// debug attempt 3:50 09/19/2017
			// $urlAlt ='https://publish.twitter.com/oembed?url=https%3A%2F%2Ftwitter.com%2FSDGMediaZone%2Fstatus%2F909839853021474818';
			// $urlAlt ='https://publish.twitter.com/oembed?url=https://twitter.com/SDGMediaZone/status/909839853021474818';			
			// // echo $tweet -> text;
			// // echo "<br />";
			// $twitterFormat = json_decode ($twitter->setGetfield($getfield)
			// 	->buildOauth($urlAlt, $requestMethod)
			// 	->performRequest());

			// echo json_encode($twitterFormat -> html);
	// end debug


	// echo json_encode($result);

	// foreach ($result as $tweet) {
	// 		// print_r($tweet);
	// 	if ($tweet -> favorite_count > 5) {
	// 		$urlAlt ='https://publish.twitter.com/oembed';
	// 		// echo $tweet -> text;
	// 		// echo "<br />";
	// 		$twitterFormat = json_decode ($twitter->setGetfield($getfield)
	// 			->buildOauth($urlAlt, $requestMethod)
	// 			->performRequest());

	// 		echo json_encode($twitterFormat);
	// 	}

	// }

	// lesson 221

	// $url = 'https://api.twitter.com/1.1/statuses/update.json';
	// $postfields = array('status'=> "Learning to post via API");
	// $requestMethod = 'POST';
	// $twitter = new TwitterAPIExchange($settings);
	// $result = json_decode ($twitter->setPostfields($postfields)
	// 	->buildOauth($url, $requestMethod)
	// 	->performRequest());


	// // echo json_encode($result);

	// foreach ($result as $tweet) {
	// 		print_r($tweet);
	// echo $tweet -> text;
	// echo "<br />";
	// echo $tweet -> favorite_count;
	// echo "<br />";	
	// }


?>

<!-- 			//below is script to include Twitter.js widget for embedding -->
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<!--     <title>Twitter Faves</title> -->

    <!-- Bootstrap -->
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">  -->
    <!-- above added 09.04.2017 -->

<!--      <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

</head> 

<body>

		<script>
			window.twttr = (function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0],
			    t = window.twttr || {};
			  if (d.getElementById(id)) return t;
			  js = d.createElement(s);
			  js.id = id;
			  js.src = "https://platform.twitter.com/widgets.js";
			  fjs.parentNode.insertBefore(js, fjs);

			  t._e = [];
			  t.ready = function(f) {
			    t._e.push(f);
			  };

			  return t;
			}(document, "script", "twitter-wjs"));
		</script>

	</body>

</html> -->


