<?php

$challenge = ( array_key_exists('hub_challenge',$_REQUEST))? $_REQUEST['hub_challenge'] : '';
$verify_token = ( array_key_exists('hub_verify_token',$_REQUEST))? $_REQUEST['hub_verify_token'] : '';

# Verify with a response to FB
if( $verify_token === 'w7KpHx2zL9E4jD5gR3T6y1s8U7q0W4vF' ) {
    echo $challenge;
}

// Comment out for now
// /*require 'vendor/autoload.php';

// define('STDOUT', fopen('response.txt', 'w'));

// use Netflie\WhatsAppCloudApi\WebHook;


// $payload = file_get_contents('php://input');
// fwrite(STDOUT, print_r($payload, true) . "\n");

// // Instantiate the Webhook super class.
// $webhook = new WebHook();

// fwrite(STDOUT, print_r($webhook->read(json_decode($payload, true)), true) . "\n");*/


// // above 

// $requestData = file_get_contents('php://input');
// file_put_contents("response.txt", $requestData);
// $requestData = json_decode($requestData, true);
