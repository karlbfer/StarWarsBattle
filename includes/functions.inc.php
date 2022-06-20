<?php 
session_start();

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

  mysqli_stmt_bind_param($stmt, "ss", $username, $email); // takes prepped statement, 2 string values, and then the two elements being treated as strings
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
    
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["useruid"] = $uidExists["usersUid"];
    header("location: ../index.php");
    exit();
  }
}

function userHistoryExists($conn, $username, $winner){

}

function sendResults($conn, $firstCharacter, $secondCharacter, $winner, $username){
  
  $userIdentification = $_SESSION["userid"];
  $sql = "INSERT INTO results (character_one, character_two, winner, user_id) VALUES (?,?,?,?);";
   // prepped SQL statement to save winnerhistory
  $stmt = mysqli_stmt_init($conn); // initialize connection to database

  if (!mysqli_stmt_prepare($stmt, $sql)){
    header('location: index.php?error=insertstmtfailed');
    exit();
  }
  mysqli_stmt_bind_param($stmt, "ssss", $firstCharacter, $secondCharacter, $winner, $userIdentification);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  header("location: ../index.php?status=ResponseSaved");
  exit();
}
// function echoTestFunction() {
//   echo '<script> console.log("owdy") </script>';
// }

function retrieveResults($conn, $username){
  $userIdentification = $_SESSION["userid"];

  $sql = "SELECT * FROM RESULTS WHERE user_id = ?;"; // prepared sql statement to retrieve all information from results table where signed in user is saved
  //echo $sql;
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)){
    header('location: profile.php?error=insertstmtfailed');
    exit();
  }
  mysqli_stmt_bind_param($stmt, "s", $userIdentification);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  // if ($row = mysqli_fetch_assoc($result)){
  //   return $row;
  // }
  // else {
  //   $result = false;
  //   return $result;
  // }

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>".$row["character_one"]."</td><td>".$row["character_two"]." ".$row["winner"]."</td></tr>";
  }
  echo "</table>";
  
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  header("location: ../profile.php?status=resultsRetrieved");
  exit();
  } else {
    echo "0 results";

    mysqli_stmt_close($stmt);
    // mysqli_close($conn);
    header("location: ../profile.php?status=noItems");
    exit();
  }
}