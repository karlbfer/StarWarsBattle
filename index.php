<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smash Mains</title>
  
  <!-- css link -->
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/vue@3.0.0-beta.12/dist/vue.global.js"></script>
  <script src="app.js"></script>
</head>
<body>
<header>
    <!-- needs to split in section of 3, use stretch on these sections. redo FlexFroggy lol -->
    <div id="wrapper">
    <section>
      <ul>
        <li class="navLeft"><a class="active" href="index.php">SMASH MAINS</a></li>
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
    <section class="mainBody">
      <h1>Welcome! Let's discover our favorite Smash Characters and your favorite matchup.</h1>
      <section>
        <p>It would be cool to display a video or pre-set version of the api calls to the Smashbros characters. Char vs char with an image that lets us dictate who we think wins in the matchup.</p>
      </section>
    </section>
    <section>
    <div id="app">
      <img
        v-bind:src="picture"
        :alt="`${firstName} ${lastName}`"
        :class="gender"
      />
      <h1>{{firstName}} {{lastName}}</h1>
      <h3>Email: {{email}}</h3>
      <button :class="gender" @click="getUser()">Get Random User</button>
    </div>
    </section>    
</div>
  <footer>
    <div id="wrapper">
    <section class="footy">
      <span>Find out more about me and my other projects</span>
      <p> Here's a link to my portfolio </p>
      <a class="button" href="https://karlferraren.com/">Portfolio</button></a>
    <section>
      <span>
        Contact Me
      </span>
      <dl>
        <dt>Phone</dt>
        <dd>(815) 342-2352</dd>
        <dt>Email</dt>
        <dd><a href="karlbferraren@gmail.com">karlbferraren@gmail.com</a></dd>
      </dl>
    </section>
    </div>
  </footer>

</body>
</html>