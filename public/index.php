<?php

require_once('../src/config/config.php');

 $uri = urldecode(
   parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
  );

 if($uri === '/Meus-Repositorios/Estudo/php/cod3r/innout/public/index.php' || $uri === '/Meus-Repositorios/Estudo/php/cod3r/innout/public/' || $uri === '/Meus-Repositorios/Estudo/php/cod3r/innout/public'){
     $uri = 'login.php';  
    }elseif($uri === '/Meus-Repositorios/Estudo/php/cod3r/innout/public/day_records.php'){
      $uri = 'day_records.php';
    }
    require(CONTROLLER_PATH ."/{$uri}");
  



