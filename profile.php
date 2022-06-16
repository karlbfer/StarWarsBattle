<?php
  require_once 'header.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>

  <section class="profileWrap">
  <?php
    if (isset($_SESSION["userid"])) {
       echo '<h2>Welcome to your profile page, ' . $_SESSION["useruid"] . '</h2>';
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
    
  </section>


<?php
  require_once 'footer.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>