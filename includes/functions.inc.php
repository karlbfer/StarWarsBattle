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

//Function checks database to see if this user exists when signing up
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

//Creates a user when all other items are met.
function createUser($conn, $name, $email, $username, $password){
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn); //initializing a prepared statement
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header('location: ../signup.inc.php?error=stmtfailed');
    exit();
  }

  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  
  header("location: ../signup.php?error=none");
  exit();
}

function emptyInputLogin( $username, $password){
  $result = false;
  if (empty($username) || empty($password)) {
      $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function loginUser($conn, $username, $password) { // reference this for Character History
  
  $uidExists = userExists($conn, $username, $username);

  if ($uidExists === false) {
    header("location: ../login.php?error=incorrectLogin");
    exit();
  }

  $passwordHashed = $uidExists["usersPwd"];
  $checkPwd = password_verify($password, $passwordHashed);

  if ($checkPwd === false) {
    header("location: ../login.php?error=wrongLogin");
    exit();
  }
  else if ($checkPwd === true) {
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["useruid"] = $uidExists["usersUid"];
    header("location: ../index.php");
    exit();
  }
}

function userHistoryExists($conn, $username, $winner){

}
function sendResults($conn, $username, $winner){
  
}
