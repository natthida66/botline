<?php

$proxy = 'http://fixie:L1EEC8Uy4gr9bl3@velodrome.usefixie.com:80';
$proxyauth = '';

$access_token = 'jZ2DUVXRbdH/oAPpwkIZyO0l7cCMXERHlRmGMZ569kel5lXe+Xhexg7LG+d8/xfSAgw2O0tyWiMLsemL61pZB14Pc9HzQoxOO6XIYS6vqYwxITLl1EcMP5BLr8Y0etsBPjT4wmM+iYl0rAJSc3zDuAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
