<?php

namespace Send;


class Send {

    public $token;
    public $inData;
    public $tData;

    public $message;
    public $text;
    public $chat;
    public $chat_id;

public function __construct() {

     $this->token = "6862940508:AAFdMr40N4CcW8gYH4I3rMD6ka6_6-ADWxg";
     $this->inData = file_get_contents("php://input");
     $this->tData = json_decode($this->inData);

     $this->message = $this->tData['message'];
     $this->text = $this->message['text'];
     $this->chat = $this->message['chat'];
     $this->chat_id = $this->chat['id'];

}
    public function bot ($method , $data=[]){
        $url = "https://ipa.telegram.org/bot" . $this->token . "/" . $method;
        $c = curl_init();
        curl_setopt($c , CURLOPT_URL , $url);
        curl_setopt($c , CURLOPT_RETURNTRANSFER , TRUE);
        curl_setopt($c , CURLOPT_PROXY , "socks5h://127.0.0.1:9050");
        curl_setopt($c , CURLOPT_POSTFIELDS , $data);
    }
    
    
    public function send($text){
        $this->bot("sendMessage" , [
            'chat_id' => $this->chat_id,
            'text' => $this->text
        ]);
    }
}
    






