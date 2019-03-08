<?php

require_once ("config.php");

$lucas = new Usuario();
$lucas->loadbyId(3);

echo $lucas;


?>


