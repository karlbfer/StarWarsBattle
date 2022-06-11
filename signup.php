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
  <div id="wrapper">
    <section class="bodyWrap">
        <h1> Login </h1>
        <form class="signup">
          <label for="Full Name"></label>
          <input type="text" name="fname" id="fname" placeholder="Full Name..."><br>
          <label for="Email Address"></label>
          <input type="text" name="email" id="email" placeholder="Email Address..."><br>
          <label for="Username"></label>
          <input type="text" name="username" id="username" placeholder="Username..."><br>
          <label for="Password"></label>
          <input type="password" name="password" id="password" placeholder="Password..."><br>
          <label for="Reset Password"></label>
          <input type="password" name="retypePassword" id="retypePassword" placeholder="Repeat password...">
        </form>

      </section>
    </section>
</body>
</html>