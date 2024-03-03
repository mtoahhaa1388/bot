<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo __DIR__ . "./src/Send.php";
//require_once __DIR__ . "./vendor/autoload.php";
require_once __DIR__ . "/src/Send.php";

// require_once __DIR__ . "/../Api/index.php";
// require_once __DIR__ . "/../Receive/index.php";

// use GuzzleHttp\Client;


// $tools = $Tools->ToolsPage();
// $tool = $Tools->OneTool();

// $categories = $Category->CategoriesPage();
// $category = $Category->OneCategory();




// $message = $Receive->text;


// if ($message == "/$tools"){
//     $Send->send($tools); 
// }
// elseif ($message == "/$tools/$tool") {
//     $explode = end(explode("/", $message));
//     $Send->send($Tools->OneTool($explode));
// }
// elseif ($message == "/$categories"){
//     $Send->send($categories); 
// }
// elseif ($message == "/$categories/$category") {
//     $explode = end(explode("/", $message));
//     $Send->send($Category->OneCategory($explode));
// }
















