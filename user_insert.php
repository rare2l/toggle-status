<?php
$connection = new mysqli("localhost", "root", "", "webapp");

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO users (name, age, status) VALUES ('$name', '$age', 1)";
$connection->query($sql);

$connection->close();
?>
