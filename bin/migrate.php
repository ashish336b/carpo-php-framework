<?php

use ashish336b\PhpCBF\Application as App;
use ashish336b\PhpCBF\Migration;

require_once __DIR__ . "/../vendor/autoload.php";
App::$config = include __DIR__ . "/../config.php";
try {
   App::$pdo = new PDO("mysql:host=" . App::$config["host"] . ";dbname=" . App::$config["dbname"] . ";port=" . App::$config["dbport"], App::$config["dbuser"], App::$config["dbpass"]);
   App::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   die($e->getMessage());
}

(new Migration())->applyMigrations();
