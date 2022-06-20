<?php
  require_once 'header.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>

  <section class="profileWrap">
    
  <?php
  //Code that determines if user in session is logged in or not.

    if (isset($_SESSION["userid"])) {
       echo '<h2>Welcome to your profile page, ' . $_SESSION["useruid"] . '</h2>';
       echo '<p id="hiddenUsername" hidden> '. $_SESSION["useruid"] . '</p>';
    }
    else {      
      sleep(3);
      echo "
      <script>
      window.setTimeout(function() {
          window.location = 'index.php';
        }, 5000);
      </script>
      <p class='loggedOut'>Not Logged In. Returning to Main Page.</p>
      ";
      // header("location: index.php");
      exit;
    }
  ?>
  <p> Welcome to your profile! Look at the below section to find a complete history of your imagined 1v1 fights! </p>

  </section>
  <section class="voteHistory">
  <!-- <form class="profileVotes" action="includes/signup.inc.php" method="post"> 
  </form> -->

  <form class="login" action="includes/votehistory.php" method="post">
    <button type="submit" name="submit">Check History</button>
    <input id="profileUserValue" type="text" name="username" value="asdf" hidden> 
  </form>
  <?php
    require_once 'includes/votehistory.php';
  ?>

  </section>

  <script>
      var strUser = document.getElementById("hiddenUsername").textContent;
      console.log(strUser);
      document.getElementById("profileUserValue").value = strUser; 
  </script>  
<?php
  require_once 'footer.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>