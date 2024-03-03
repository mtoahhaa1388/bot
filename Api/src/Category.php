<?php

namespace Api;
use Api\Receive;
use GuzzleHttp\Client;

class Category {

    protected $aia;
    public function __construct() {
        $this->aia = new Receive();
    }

    public function CategoriesPage(){
        $this->aia->AiaTools("category");
    }

    public function OneCategory($category)
    {
        $this->aia->AiaTools("category/$category");
    }
}