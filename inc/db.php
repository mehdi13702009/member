<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="member";
$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  


  ?>
