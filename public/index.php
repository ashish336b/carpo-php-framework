<?php

use ashish336b\PhpCBF\Application as App;
use ashish336b\PhpCBF\Request;
use ashish336b\PhpCBF\Response;

require_once __DIR__ . "/../vendor/autoload.php";
App::$path = __DIR__ . "/../";

App::$config = include __DIR__ . "/../config.php";

App::on("BEFORE", function () {
   /* For CORS HEADER */
});
App::on("AFTER", function () {
   /* For Code to run after response If needed */
});
App::get("/test", "HomeController@test");
App::get("/", function (Request $request, Response $response) {
   $welcome = <<<string
   <style>
   h1 {
      color: green;
      text-align: center;
   }
   </style>
   <h1>Welcome to simple closure based framework</h1>
   string;
   echo $welcome;
   return;
});
App::run();
