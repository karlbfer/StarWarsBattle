<?php
  require_once 'header.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>
    <section class="bodyWrap">
        <h1> Login </h1>
        <form class="login" action="login.inc.php" method="post">
          <label for="Username for Login"></label>
          <input type="text" name="usernameLogIn" id="usernameLogIn" placeholder="Username or Email Address..."><br>
          <label for="Password for Login"></label>
          <input type="text" name="passwordLogIn" id="passwordLogIn" placeholder="Password..."><br>

        </form>

      </section>
    </section>
<?php
  require_once 'footer.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>