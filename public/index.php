<?php
//require_once(dirname(__FILE__,2).'/src/config/database.php');
require_once('../src/config/config.php');
require_once('../src/models/User.php');

$user = new User(['name' => 'tawan','email' => 'stawanrio@gmail.com']);
print_r($user->get());
echo 'fim';