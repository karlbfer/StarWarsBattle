<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login to SmashMains</title>
  <!-- css link -->
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/vue@3.0.0-beta.12/dist/vue.global.js"></script>
</head>
<body>
  <div id="wrapper">
  <header>
    <!-- needs to split in section of 3, use stretch on these sections. redo FlexFroggy lol -->
    <div id="wrapper">
    <section>
      <ul>
        <li class="navLeft"><a href="index.php">SMASH MAINS</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="https://www.karlferraren.com">Character Select</a></li>
        <li>Other Thing Here</li>

        <li class="navRight"><a href="login.php">Login</a></li>
        <li class="navRight"><a href="signup.php">Sign Up</a></li>
      </ul>
    </section>
    </div>
  </header>
  </div>
  <div id="wrapper">
    <section class="bodyWrap">
        <h1> Login </h1>
        <form>
          <label for="Username for Login"></label>
          <input type="text" name="usernameLogIn" id="usernameLogIn" placeholder="Username or Email Address..."><br>
          <label for="Password for Login"></label>
          <input type="text" name="passwordLogIn" id="passwordLogIn" placeholder="Password..."><br>

        </form>

      </section>
    </section>
</body>
</html>