<?php

use CRUD\Controller\PersonController;

include ("loader.php");
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "test";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//else
//    echo 'bruh';
$controller = new PersonController();
$controller->switcher($_SERVER['REQUEST_URI'],$_REQUEST);