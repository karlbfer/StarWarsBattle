<?php
  require_once 'header.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>
<script src="math.js" type="text/javascript"></script>
    <section class="mainBody">
      <h1>Welcome! We pit two Star Wars characters together and task you with deciding the victor of this 1v1 battle.</h1>
      <!-- <section>
        <p>It would be cool to display a video or pre-set version of the api calls to the Smashbros characters. Char vs char with an image that lets us dictate who we think wins in the matchup.</p>
      </section> -->
      <section class="bodyWrap">
    <?php
        if (isset($_SESSION["userid"])) {
        echo 
        '
        <h2 class="battle">WHO WOULD WIN?</h2>';
        }
      ?>
        <!-- <span id="loadingCharacter">Loading Character</span> -->
        <section class="characterSelect">
          <p class="skew"><span class="characterNameOne" id="name">Loading Character... </span></p>
          <p class="skew"><span class="characterNameTwo" id="nameTwo">Loading Character...</span></p>
        </section>
    <?php
        if (isset($_SESSION["userid"])) {
        echo 
        '
        <section class="buttonsInBody">
          <button id="charOneWin">Winner!</button>
          <button id="characterOne">Pit Two New Characters</button>
          <button id="charTwoWin">Winner!</button> 
        </section>
      </section>
        <form action="includes/savePlayer.php" method="POST">
          <input id="winnerOne" type="text" name="firstCharacter" value="mario" hidden>
          <input id="winnerTwo" type="text" name="secondCharacter" value="Luigi" hidden>
          <!-- below is responsible to update username for insertinto statement later on -->
          <input id="profUser" type="text" name="username" value="ayo" hidden> 
          <input id="setWinner" type="text" name="winner" value="3" hidden>
          <input id="disableResults" type="submit" name="submit" value="Save Results">
        </form>';
        }
        else {
          echo
          '
          <section class="notSignedInResults">
          <button id="charOneWin" hidden>Winner!</button>
          <button id="characterOne" disabled="true">Pit Two New Characters</button>
          <button id="charTwoWin" hidden>Winner!</button> 
          </section>
          <h2 class="battle">Please create an account to Save Results above.</h1>
          <p> To select a winner, you must sign up.</p>
        </section>
          <input id="winnerOne" type="text" name="firstCharacter" value="mario" hidden>
          <input id="winnerTwo" type="text" name="secondCharacter" value="Luigi" hidden>
          <input id="disableResults" type="submit" name="submit" value="Save Results" hidden>
          ';
        }
         ?>

  <?php
    if (isset($_GET["error"])){
      if($_GET["error"] == "noUser"){
        echo '<p> Failed to save response. Please log into an account before trying to save results! </p>';
      }      
      if($_GET["error"] == "failedToSelectWinner"){
        echo '<p> Failed to Save response. Please select who will win before saving results! </p>';
      }
    }
    if (isset($_GET["status"])){
      if($_GET["status"] == "ResponseSaved"){
        echo '<p> Response Saved Successfully. View History in Profile Page. </p>';
      }
    }
  ?>
  <!-- <script>
      var strUser = document.getElementById("hiddenUser").textContent;
      console.log(strUser);
      document.getElementById("profUser").value = strUser; 
  </script>   -->


<script src="app.js"></script>
<?php
  require_once 'footer.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>