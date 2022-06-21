<?php

if (isset($_POST["submit"])) {

  $firstCharacter = $_POST["firstCharacter"];
  $secondCharacter = $_POST["secondCharacter"];
  // $username = $_POST["username"];
  $winner = $_POST["winner"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if($winner < 0 || $winner > 1){
    header('location: ../index.php?error=failedToSelectWinner');
    exit(); // stops the script from running
  }
  sendResults($conn, $firstCharacter, $secondCharacter, $winner);

  // header('location: ../index.php?status=itemSaved');
}
else {
  header('location: ../index.php?error=failedToSubmitData');
}