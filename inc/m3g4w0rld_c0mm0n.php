<?php
define("SERVER", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "megaworldinventory");
$xcon = new PDO('mysql:host='.SERVER.';dbname='.DATABASE,USERNAME,PASSWORD);
?>
