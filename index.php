<?php
  require_once 'header.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>

    <section class="mainBody">
    <?php
          if (isset($_SESSION["userid"])) {
            echo '<p>Hello there ' . $_SESSION["useruid"] . '</p>';

          }
          else {      
            // echo '<li class="navRight"><a href="login.php">Login</a></li>';
          }
        ?>

      <h1>Welcome! We pit two Star Wars characters together and task you with chooing who would win in a 1v1 battle.</h1>
      <!-- <section>
        <p>It would be cool to display a video or pre-set version of the api calls to the Smashbros characters. Char vs char with an image that lets us dictate who we think wins in the matchup.</p>
      </section> -->
      <section class="bodyWrap">
        <h1 class="battle">WHO WOULD WIN?</h1>
        <section class="characterSelect">
          <p><span id="name">‎ </span></p>
          <p><span id="nameTwo">‎ </span></p>
          <!-- <button id="characterTwo">Get Random User</button> -->
        </section>
        <button id="characterOne">Pit Two New Characters</button>
      </section>

<form action="savePlayer.php" method="POST">
  <input ID="characterOne" type="text" name="firstCharacter" value="Mario" hidden>
  <input type="text" name="secondCharacter" value="Luigi" hidden>
  <input type="text" name="userID"  value="2" hidden>
  <input type="text" name="winner" value="Mario" hidden>
  <input type="submit" value="Save">
</form>  

<script src="app.js"></script>
<?php
  require_once 'footer.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>