<?php

namespace App\model;

use ashish336b\PhpCBF\DB;
use ashish336b\PhpCBF\Model;

class Auth extends Model
{
   protected $table = "user";
   public function fetchUser()
   {
      return $this->query("select * from users")->results();
   }
}
