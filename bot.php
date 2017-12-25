<?php
//header('Content-Type: text/html; charset=utf-8');
header("content-type:text/javascript;charset=utf-8");   
// $proxy = 'http://fixie:L1EEC8Uy4gr9bl3@velodrome.usefixie.com:80';
// $proxyauth = '';

// $access_token = 'jZ2DUVXRbdH/oAPpwkIZyO0l7cCMXERHlRmGMZ569kel5lXe+Xhexg7LG+d8/xfSAgw2O0tyWiMLsemL61pZB14Pc9HzQoxOO6XIYS6vqYwxITLl1EcMP5BLr8Y0etsBPjT4wmM+iYl0rAJSc3zDuAdB04t89/1O/w1cDnyilFU=';

// // Get POST body content
// $content = file_get_contents('php://input');

// // Parse JSON
// $events = json_decode($content, true);


// // Validate parsed JSON data
// if (!is_null($events['events'])) {
// 	// Loop through each event
// 	foreach ($events['events'] as $event) {

// 		// Get replyToken
// 			$replyToken = $event['replyToken'];


// 		// Reply only when message sent is in 'text' format
// 		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
// 			// Get text sent
			

// 			if ($event['message']['text'] == "Do you love me") {
// 				$text  = "I Love Kukkik Verymuch ^^. Do You Love Me?";

// 			} 	else if($event['message']['text'] == "Yes"){
// 				$text  = "Yed Mai?";
// 			} 
// 				else if($event['message']['text'] == "Where"){
// 				$text  = "Bathroom mai? Hee Hee";
// 			} 
// 			else {
// 				$text = $event['message']['text'] ." ".$event['source']['userId'];
// 			}

		

// 			// Build message to reply back
// 			$messages = [
// 				'type' => 'text',
// 				'text' => $text
// 			];

// 			// Make a POST Request to Messaging API to reply to sender
// 			$url = 'https://api.line.me/v2/bot/message/reply';
// 			$data = [
// 				'replyToken' => $replyToken,
// 				'messages' => [$messages],
// 			];
// 			$post = json_encode($data);
// 			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

// 			$ch = curl_init($url);
// 			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// 			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// 			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// 			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// 			curl_setopt($ch, CURLOPT_PROXY, $proxy);
// 			curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);

// 			$result = curl_exec($ch);
// 			curl_close($ch);

// 			echo $result . "\r\n";
// 		}


// 		if ($event['type'] == 'message' && $event['message']['type'] == 'sticker') {


// 			// Build message to reply back
// 			$messages = [
// 				'type' => 'sticker',
// 				'packageId' => "1",
// 				'stickerId' => "2"
// 			];

// 			// Make a POST Request to Messaging API to reply to sender
// 			$url = 'https://api.line.me/v2/bot/message/reply';
// 			$data = [
// 				'replyToken' => $replyToken,
// 				'messages' => [$messages],
// 			];
// 			$post = json_encode($data);
// 			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

// 			$ch = curl_init($url);
// 			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// 			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// 			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// 			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// 			curl_setopt($ch, CURLOPT_PROXY, $proxy);
// 			curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);

// 			$result = curl_exec($ch);
// 			curl_close($ch);

// 			echo $result . "\r\n";

// 		}



// 		if ($event['type'] == 'message' && $event['message']['type'] == 'image') {

// 			$pic = "https://github.com/chutiwatpreprem/LINE-BOT-PHP-Starter/blob/master/1.jpg";
// 			$pic2 = "https://github.com/chutiwatpreprem/LINE-BOT-PHP-Starter/blob/master/no_pic_user.jpg";
// 			// Build message to reply back
// 			$messages = [
// 				'type' => 'image',
// 				'originalContentUrl' => $pic,
// 				'previewImageUrl' => $pic2
// 			];


// 			// Make a POST Request to Messaging API to reply to sender
// 			$url = 'https://api.line.me/v2/bot/message/reply';
// 			$data = [
// 				'replyToken' => $replyToken,
// 				'messages' => [$messages],
// 			];
// 			$post = json_encode($data);
// 			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

// 			$ch = curl_init($url);
// 			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// 			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// 			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// 			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// 			curl_setopt($ch, CURLOPT_PROXY, $proxy);
// 			curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);

// 			$result = curl_exec($ch);
// 			curl_close($ch);

// 			echo $result . "\r\n";

// 		}


		


// 	}
// }
// echo "Success";
?>

<?php
 
// $strAccessToken = "jZ2DUVXRbdH/oAPpwkIZyO0l7cCMXERHlRmGMZ569kel5lXe+Xhexg7LG+d8/xfSAgw2O0tyWiMLsemL61pZB14Pc9HzQoxOO6XIYS6vqYwxITLl1EcMP5BLr8Y0etsBPjT4wmM+iYl0rAJSc3zDuAdB04t89/1O/w1cDnyilFU=";
 
// $strUrl = "https://api.line.me/v2/bot/message/push";
 
// $arrHeader = array();
// $arrHeader[] = "Content-Type: application/json";
// $arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
// $arrPostData = array();
// $arrPostData['to'] = "Uf55b4f528d36c8246795e12f636afa08";

// $arrPostData['messages'][0]['type'] = "text";
// $arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message";

// $arrPostData['messages'][1]['type'] = "sticker";
// $arrPostData['messages'][1]['packageId'] = "1";
// $arrPostData['messages'][1]['stickerId'] = "2";

// echo "test"; 
// echo "<pre>"; 
// print_r($arrPostData);
// echo "</pre>";
//  //exit();
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL,$strUrl);
// curl_setopt($ch, CURLOPT_HEADER, false);
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// $result = curl_exec($ch);
// curl_close ($ch);
 
// echo "push Success";

?>


 <?php 


 include ('line-bot-api/php/line-bot.php');

 $channelSecret = '0e769d9bc59875d0bbfe4ca904e28865';
 $access_token  = 'jZ2DUVXRbdH/oAPpwkIZyO0l7cCMXERHlRmGMZ569kel5lXe+Xhexg7LG+d8/xfSAgw2O0tyWiMLsemL61pZB14Pc9HzQoxOO6XIYS6vqYwxITLl1EcMP5BLr8Y0etsBPjT4wmM+iYl0rAJSc3zDuAdB04t89/1O/w1cDnyilFU=';
 $Userid = 'U878d2e68fae6303fcce353c03872a4c5';

$bot = new BOT_API($channelSecret, $access_token);


echo "Test"."<br>";

//$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
//$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
// $response = $bot->getProfile($Userid);
// if ($response->isSucceeded()) {
//     $profile = $response->getJSONDecodedBody();

//     echo $profile['userId'];
//     echo $profile['displayName'];
//     echo $profile['pictureUrl'];
//     echo $profile['statusMessage'];
//     $bot->sendMessageNew($Userid, $profile['pictureUrl']." ".$profile['statusMessage']);
// }

//$bot->sendMessageNew("U878d2e68fae6303fcce353c03872a4c5",("Hello")); // Line Euro

$bot->sendMessageNew("Uf55b4f528d36c8246795e12f636afa08",'กิ๊ฟ');
$pic = "https://raw.githubusercontent.com/chutiwatpreprem/LINE-BOT-PHP-Starter/master/1.jpg";
$pic2 = "https://raw.githubusercontent.com/chutiwatpreprem/LINE-BOT-PHP-Starter/master/no_pic_user.jpg";

if (!empty($bot->isText)) {
		
    $bot->replyMessageNew($bot->replyToken, ($bot->text),json_encode($bot->source));

    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}

if (!empty($bot->isSticker)) {
		
    $bot->replySticker($bot->replyToken,"4","632");
    //$bot->replyMessageNew($bot->replyToken, ($bot->packageId),($bot->stickerId));
    //$bot->replySticker($bot->replyToken,$bot->packageId,$bot->stickerId);
    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}

if (!empty($bot->isImage)) {
         

    $bot->replyImg($bot->replyToken,$pic,$pic2);
    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}   


if (!empty($bot->isLocation)) {
        
    $bot->replyLocation($bot->replyToken,"บ้าน","62 พระรามที่ 2 แขวง บางมด เขต จอมทอง กรุงเทพมหานคร 10150 ประเทศไทย","13.6725673","100.4770312");
    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}

if (!empty($bot->isMap)) {
    
    $size = array("height"=>"1040","width"=>"1040"); 
    $data1 = array("x"=>"520","y"=>"0","width"=>"520","height"=>"1040"); 
    $data = array("type"=>"message","text"=>"Hello",$data1);

    $bot->replyMap($bot->replyToken,$pic,"this is an imagemap",$size,$data);
    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}







// if ($bot->isEvents) {
	
// 	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message),json_encode($bot->source));
	

// 	if ($bot->isSuccess()) {
// 		echo 'Succeeded!';
// 		exit();
// 	}

// 	// Failed
// 	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
// 	exit();

// }

// if ($bot->isfollow) {
	
// 	$bot->replyMessageNew($bot->replyToken, json_encode($bot->text),json_encode($bot->source));
	

// 	if ($bot->isSuccess()) {
// 		echo 'Succeeded!';
// 		exit();
// 	}

// 	// Failed
// 	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
// 	exit();

// }

// if ($bot->unfollow) {
	
// 	$bot->replyMessageNew($bot->replyToken, json_encode($bot->text),json_encode($bot->source));
	

// 	if ($bot->isSuccess()) {
// 		echo 'Succeeded!';
// 		exit();
// 	}

// 	// Failed
// 	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
// 	exit();

// }

// if ($bot->join) {
	
// 	$bot->replyMessageNew($bot->replyToken, json_encode($bot->text),json_encode($bot->source));
	

// 	if ($bot->isSuccess()) {
// 		echo 'Succeeded!';
// 		exit();
// 	}

// 	// Failed
// 	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
// 	exit();

// }

// if ($bot->leave) {
	
// 	$bot->replyMessageNew($bot->replyToken, json_encode($bot->text),json_encode($bot->source));
	

// 	if ($bot->isSuccess()) {
// 		echo 'Succeeded!';
// 		exit();
// 	}

// 	// Failed
// 	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
// 	exit();

// }



// if (!empty($bot->isEvents)) {

// 	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message),json_encode($bot->source));
	

// 	if ($bot->isSuccess()) {
// 		echo 'Succeeded!';
// 		exit();
// 	}

// 	// Failed
// 	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
// 	exit();

// }

  ?>
