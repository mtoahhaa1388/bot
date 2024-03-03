<?php
namespace Receive;


class Receive {

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
}