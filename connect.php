<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$database = "soccer-track";
$db = new PDO("mysql:dbname=" . $database . ";host=" . $hostname,$username,$password);
