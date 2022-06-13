<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "starWarsLogin";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); // builtin php function to allow us to connect to the database.

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}