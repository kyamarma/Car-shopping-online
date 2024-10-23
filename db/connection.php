<?php
$db_name = 'car';
$host = 'localhost';
$user = 'root';
$password = '';
$conn = new mysqli($host,$user,$password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $conn = mysqli_connect('localhost','root','','car');

