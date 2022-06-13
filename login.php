<?php
  require_once 'header.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>
    <section class="loginWrap">
        <h2> Login </h2>
        <form class="login" action="includes/login.inc.php" method="post">
          <label for="Username for Login"></label>
          <input type="text" name="name" id="name" placeholder="Username or Email Address..."><br>
          <label for="Password for Login"></label>
          <input type="text" name="password" id="password" placeholder="Password..."><br>
          <button type="submit" name="submit">Sign Up</button>
        </form>
      </section>
    </section>

    <!-- ERRORS IF ACCOUNT ALREADY EXISTS -->
<?php
  require_once 'footer.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>