<?php

use ashish336b\PhpCBF\Application as App;
use ashish336b\PhpCBF\Request;
use ashish336b\PhpCBF\Response;

require_once __DIR__ . "/../vendor/autoload.php";
App::$path = __DIR__ . "/../";

App::on("BEFORE", function () {
   /* For CORS HEADER */
});
App::on("AFTER", function () {
   /* For Code to run after response If needed */
});
App::get("/", function (Request $request, Response $response) {
   echo "welcome to simple closure based framework";
});
App::run();

   //test urls
   // http://localhost:1212/admin/profile/pid/hello/userid/one/two/three/ok/hello/next