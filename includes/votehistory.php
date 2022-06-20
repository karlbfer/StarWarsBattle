<?php

if (isset($_POST["submit"])) {

  $username = $_POST["username"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  // retrieveResults($conn, $username);
  // echoTestFunction();
}
// else {
//   header('location: profile.php');
// }
