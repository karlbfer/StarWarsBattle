<?php 


function emptyInputSignup($name, $email, $username, $password, $pwdRepeat){
  $result = false;
  if (empty($name) || empty($email) || empty($username) || empty($password) || empty($pwdRepeat)) {
      $result = true;
      echo empty($name);
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidUid($username){
  $result = false; 
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { 
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email){
  $result = false; 
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //checks for email validation
      $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function pwdMatch($password, $pwdRepeat){
  $result = false; 
  if ($password !== $pwdRepeat) { //checks for email validation
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function userExists($conn, $username, $email){
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn); //initializing a prepared statement
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header('location: ../signup.inc.php?error=stmtfailed');
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)){
    return $row;
  }
  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $password){
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn); //initializing a prepared statement
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header('location: ../signup.inc.php?error=stmtfailed');
    exit();
  }

  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $username, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  
  header("location: ../signup.php?error=none");
  exit();
}