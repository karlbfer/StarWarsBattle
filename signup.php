<?php
  require_once 'header.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>
<section class="signWrap">
  <h2> Signup Here </h2>
  <form class="signup" action="includes/signup.inc.php" method="post">
    <label for="Full Name"></label>
    <input type="text" name="name" id="name" placeholder="Full Name..."><br>
    <label for="Email Address"></label>
    <input type="text" name="email" id="email" placeholder="Email Address..."><br>
    <label for="Username"></label>
    <input type="text" name="username" id="userid" placeholder="Username..."><br>
    <label for="Password"></label>
    <input type="password" name="password" id="password" placeholder="Password..."><br>
    <label for="Reset Password"></label>
    <input type="password" name="pwdrepeat" id="pwdrepeat" placeholder="Repeat password...">
    <button type="submit" name="submit">Sign Up</button>
  </form>
  
  <section class="errorHelp">
    <p>‎</p>
  <?php
  if (isset($_GET["error"])){
    if($_GET["error"] == "emptyinput") {
      echo "<p>Failed to create account. Fill in all fields!</p>";
    }
    else if($_GET["error"] == "invaliduid") {
      echo "<p>Failed to create account. Choose a proper username!</p>";
    }
    else if($_GET["error"] == "invalidemail") {
      echo "<p>Failed to create account. Email not valid!</p>";
    }
    else if($_GET["error"] == "PasswordsDontMatch") {
      echo "<p>Failed to create account. Passwords did not match!</p>";
    }
    else if($_GET["error"] == "stmtfailed") {
      echo "<p>Something went wrong. Please try again.</p>";
    }
    else if($_GET["error"] == "usernametaken") {
      echo "<p>Username already in use, try again.</p>";
    }
    else if($_GET["error"] == "none") {
      echo "<p>Account Created. Please Login with new account.</p>";
    }
  }
  ?>

  </section>


</section>

<!-- Will Put Error Messages down here at a later time. -->



<?php
  require_once 'footer.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>