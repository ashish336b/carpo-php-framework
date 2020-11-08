<?php

namespace App\middleware;

use ashish336b\PhpCBF\Request;
use ashish336b\PhpCBF\Response;

class Auth
{
   public function run(Request $request, Response $response)
   {
      $auth = false;
      if (!$auth) {
         return $response->toJSON(["message" => "not authenticated"]);
      }
      return true;
   }
}
