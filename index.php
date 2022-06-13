<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StarWars Character Battle</title>
  
  <!-- css link -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- <script src="https://unpkg.com/vue@3.0.0-beta.12/dist/vue.global.js"></script> -->
  <script src="math.js" type="text/javascript"></script>
</head>
<body>
<header>

    <!-- needs to split in section of 3, use stretch on these sections. redo FlexFroggy lol -->
    <div id="wrapper">
    <section>
      <ul>
        <li class="navLeft"><a class="active" href="index.php">StarWars Battle</a></li>
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
      <h1>Welcome! We pit two Star Wars characters together and task you with chooing who would win in a 1v1 battle.</h1>
      <!-- <section>
        <p>It would be cool to display a video or pre-set version of the api calls to the Smashbros characters. Char vs char with an image that lets us dictate who we think wins in the matchup.</p>
      </section> -->
    </section>
    <section>

    <div id="app">
      <h1 class="battle">WHO WOULD WIN?</h1>
      <section>
        <p><span id="name">‎ </span></p>
        <p><span id="nameTwo">‎ </span></p>
        <!-- <button id="characterTwo">Get Random User</button> -->
      </section>
      <button id="characterOne">Pit Two New Characters</button>
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


  <script src="app.js"></script>
</body>
</html>