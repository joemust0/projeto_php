<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Usuario;

$u = new Usuario("Joe");
 
echo "<h2>Task Today App</h2>";
echo $u->getNome();