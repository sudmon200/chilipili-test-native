<?php

$server_name = 'localhost';
$username = 'chili_admin';
$password = '45@Ganesh72';
$db = 'chili_blog_post';

$connection = new mysqli($server_name, $username, $password, $db);


if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


?>