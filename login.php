<?php
  require_once 'header.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>
  <section class="loginWrap">
    <h2> Login </h2>
    <form class="login" action="includes/login.inc.php" method="post">
      <label for="Username for Login"></label>
      <input type="text" name="username" id="name" placeholder="Username or Email Address..."><br>
      <label for="Password for Login"></label>
      <input type="password" name="password" id="password" placeholder="Password..."><br>
      <button type="submit" name="submit">Sign In</button>
    </form>

    <!-- ERRORS IF ACCOUNT ALREADY EXISTS -->
    <section class="errorHelp">
      <p>‎</p>
      <!-- Hello this is live errors that appear on unsuccessful login  -->
    <?php
    if (isset($_GET["error"])){
      if($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if($_GET["error"] == "wrongLogin") {
        echo "<p>Incorrect login information!</p>";
      }
      else if($_GET["error"] == "incorrectLogin") {
        echo "<p>Incorrect login information</p>";
      }
    }
    ?>
    </section>
  </section>
    </section>



<?php
  require_once 'footer.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>