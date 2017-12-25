 <?php

// $proxy = 'http://fixie:L1EEC8Uy4gr9bl3@velodrome.usefixie.com:80';
// $proxyauth = 'chutiwat.pre@gmail.com:gifthana';

// $access_token = 'jZ2DUVXRbdH/oAPpwkIZyO0l7cCMXERHlRmGMZ569kel5lXe+Xhexg7LG+d8/xfSAgw2O0tyWiMLsemL61pZB14Pc9HzQoxOO6XIYS6vqYwxITLl1EcMP5BLr8Y0etsBPjT4wmM+iYl0rAJSc3zDuAdB04t89/1O/w1cDnyilFU=';

// $url = 'https://api.line.me/v1/oauth/verify';

// $headers = array('Authorization: Bearer ' . $access_token);

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_PROXY, $proxy);
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
// $result = curl_exec($ch);
// curl_close($ch);

// echo $result;

?>

<?php 

// //echo $path = __DIR__ . '/vendor/autoload.php';
// echo require_once __DIR__."/../vendor/autoload.php";
// //require_once $path;

// $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('jZ2DUVXRbdH/oAPpwkIZyO0l7cCMXERHlRmGMZ569kel5lXe+Xhexg7LG+d8/xfSAgw2O0tyWiMLsemL61pZB14Pc9HzQoxOO6XIYS6vqYwxITLl1EcMP5BLr8Y0etsBPjT4wmM+iYl0rAJSc3zDuAdB04t89/1O/w1cDnyilFU=');
// $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '0e769d9bc59875d0bbfe4ca904e28865']);

// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
// $response = $bot->pushMessage('<to>', $textMessageBuilder);

// echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

 ?>


 <?php

// require_once __DIR__."/../vendor/autoload.php";
// $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('jZ2DUVXRbdH/oAPpwkIZyO0l7cCMXERHlRmGMZ569kel5lXe+Xhexg7LG+d8/xfSAgw2O0tyWiMLsemL61pZB14Pc9HzQoxOO6XIYS6vqYwxITLl1EcMP5BLr8Y0etsBPjT4wmM+iYl0rAJSc3zDuAdB04t89/1O/w1cDnyilFU=');
// $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '0e769d9bc59875d0bbfe4ca904e28865']);
// $response = $bot->getProfile('Uf55b4f528d36c8246795e12f636afa08');
// if ($response->isSucceeded()) {
//     $profile = $response->getJSONDecodedBody();
//     echo $profile['displayName'];
//     echo $profile['pictureUrl'];
//     echo $profile['statusMessage'];
// }


   ?>


 <?php 


 include ('line-bot-api/php/line-bot.php');

 $channelSecret = '0e769d9bc59875d0bbfe4ca904e28865';
 $access_token  = 'jZ2DUVXRbdH/oAPpwkIZyO0l7cCMXERHlRmGMZ569kel5lXe+Xhexg7LG+d8/xfSAgw2O0tyWiMLsemL61pZB14Pc9HzQoxOO6XIYS6vqYwxITLl1EcMP5BLr8Y0etsBPjT4wmM+iYl0rAJSc3zDuAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);


echo "test1";


if (!empty($bot->isEvents)) {
		echo "test2";
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}

  ?>