<?php
//require_once(dirname(__FILE__,2).'/src/config/database.php');
require_once('../src/config/config.php');
require_once('../src/models/User.php');

$user = new User(['name' => 'tawan','email' => 'stawanrio@gmail.com']);

print_r(User::get(['name' => 'chaves'], 'id,name, email'));

echo '<br><br>';
 
foreach(User::get([], 'name') as $user){
    echo $user->name;
    echo "<br>";
}