<?php

namespace Send;


class Send {

    public function bot ($method , $data=[]){
        $url = "https://ipa.telegram.org/bot" . $token . "/" . $method;
        $c = curl_init();
        curl_setopt($c , CURLOPT_URL , $url);
        curl_setopt($c , CURLOPT_RETURNTRANSFER , TRUE);
        curl_setopt($c , CURLOPT_PROXY , "socks5h://127.0.0.1:9050");
        curl_setopt($c , CURLOPT_POSTFIELDS , $data);
    }
    
    
    public function send($text){
        $this->bot("sendMessage" , [
            'chat_id' => $chat_id,
            'text' => "$text"
        ]);
    }
}
    






