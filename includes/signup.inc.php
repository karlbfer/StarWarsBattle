<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

  if (isset($_POST["submit"])){

    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $password, $pwdRepeat) !== false) {
      header('location: ../signup.php?error=emptyinput');
      exit(); // stops the script from running
    }
    if (invalidUid($username) !== false) {
      // die(invalidUserId($username));
      header('location: ../signup.php?error=invaliduserid');
      exit(); // stops the script from running
    }
    if (invalidEmail($email) !== false) {
      header('location: ../signup.php?error=emailinvalid');
      exit(); // stops the script from running
    }
    if (pwdMatch($password, $pwdRepeat) !== false) {
      header('location: ../signup.php?error=PasswordsDontMatch');
      exit(); // stops the script from running
    }
    if (userExists($conn, $username, $email) !== false) {
      header('location: ../signup.php?error=username taken');
      exit(); // stops the script from running
    }
    // if (pwdLength($password) !== false){
    //   header('location: ../signup.inc.php?error=passwordcomplexitynotmet');
    //   exit();
    // }

    createUser($conn, $name, $email, $username, $password);

  }
  else {
    header('location: ../signup.php');
  }