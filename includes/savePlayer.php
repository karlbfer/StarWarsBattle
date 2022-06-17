<?php

if (isset($_POST["submit"])) {

  $firstCharacter = $_post["firstCharacter"];
  $secondCharacter = $_post["secondCharacter"];
  $username = $_post["username"];
  $winner = $_post["winner"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (userHistoryExists($conn, $username, $email) !== false) {
    header('location: ../profile.php?error=usernametaken');
    echo '<p class="noHistory"> It seems like you have saved no battles. Please return to the main page and go battle some characters! </p>';
    exit(); // stops the script from running
  }
  else {

  }
  //Put this function somewhere onto a separate php file / have it called from the index.php
  sendResults($conn, $name, $email, $username, $password);

  
}
else {
  header('location: ../index.php');
}