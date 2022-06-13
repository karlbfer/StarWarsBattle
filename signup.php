<?php
  require_once 'header.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>
<section class="signWrap">
  <h2> Signup Here </h2>
  <form class="signup" action="signup.inc.php" method="post">
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
</section>

<?php
  require_once 'footer.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>