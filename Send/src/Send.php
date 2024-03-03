<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$update = file_get_contents("php://input");
$update_array = json_decode($update, true);

die();

if (isset($update_array["message"])){

$text = $update_array["message"]["text"];
$chat_id = $update_array["message"]["chat"]["id"];

}


$reply = $GLOBALS['text'];
$url = "https://api.telegram.org/bot" . "6862940508:AAFdMr40N4CcW8gYH4I3rMD6ka6_6-ADWxg" . "/sendMessage";
$send = ['chat_id' => $GLOBALS['chat_id'] , 'text' => $reply];


function send_reply($url , $reply){
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_POSTFIELDS,$reply);
    return $result = curl_exec($c);
    curl_close($c);
}


send_reply($url , $reply);










