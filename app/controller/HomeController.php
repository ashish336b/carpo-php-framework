<?php

namespace App\controller;

use ashish336b\PhpCBF\BaseController;
use ashish336b\PhpCBF\Request;
use ashish336b\PhpCBF\Response;

class HomeController extends BaseController
{
   public function index(Request $request, Response $response)
   {
      $request->url = $request->getUrl();
      return $response->toJSON($request);
   }

   public function test(Request $request, Response $response)
   {
      $user  = $this->model("Auth")->fetchUser();
      $response->toJSON($user);
      return;
   }
}
