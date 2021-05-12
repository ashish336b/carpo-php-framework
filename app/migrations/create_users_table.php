<?php

namespace App\migrations;

use ashish336b\PhpCBF\Application;

class create_users_table
{
   public function up()
   {

      $SQL = "CREATE TABLE users (
               id INT AUTO_INCREMENT PRIMARY KEY,
               firstname VARCHAR(255) NOT NULL,
               lastname VARCHAR(255) NOT NULL,
               email VARCHAR(255) NOT NULL,
               created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
               updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
   Application::$pdo->exec($SQL);
   }

   public function down()
   {
      $SQL = "DROP TABLE users;";
      Application::$pdo->exec($SQL);
   }
}
