<?php 
 require 'vendor/autoload.php';
 use GuzzleHttp\Client;
 $client = new Client();
 $response = $client->request('GET',"https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd"); 
 $body = $response->getBody();
 $data = json_decode($body, true);

echo "Bitcoin Price: ".$data["bitcoin"]["usd"];