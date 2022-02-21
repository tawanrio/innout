<?php

require_once('../src/config/config.php');
 $uri = urldecode(
   parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
  );

  
  if($uri === '/index.php' || $uri === '' || $uri === '/'){
    $uri = 'day_records.php';
  }


    require(CONTROLLER_PATH ."/$uri");
  



