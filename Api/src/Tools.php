<?php

namespace Api;
use Api\Receive;
use GuzzleHttp\Client;

class Tools {

    protected $aia;
    public function __construct() {
        $this->aia = new Receive();
    }

    public function ToolsPage(){
        $this->aia->AiaTools("tools");
    }

    public function OneTool($tool)
    {
        $this->aia->AiaTools("tools/$tool");
    }
}