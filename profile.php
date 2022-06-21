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

  <form class="login" action="" method="post">
    <input id="profileUserValue" type="text" name="history" value="true" hidden>
    <input type="submit" value="Check History"> 
  </form>
  <?php
   
   include_once 'includes/dbh.inc.php';

    if(isset($_POST['history'])){
      
      if($_POST['history'] == "true"){
   
        $userIdentification = $_SESSION["userid"];
        $sql = "SELECT * FROM results WHERE user_id = ?;"; // prepared sql statement to retrieve all information from results table where signed in user is saved
        //echo $sql;
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)){
          header('location: profile.php?error=insertstmtfailed');
          exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $userIdentification);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        echo "<table>
                <tr>
                  <th>Character One</th>
                  <th>Character Two</th>
                  <th>Winner</th>
                </tr>";
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)){
            // header ('location: profile.php?status=historyFound');
            $character_one = $row["character_one"];
            $character_two = $row["character_two"];
            $winner = $row["winner"] === 0 ? $character_one : $character_two;
            echo "<tr>
                      <td>$character_one</td>
                      <td>$character_two</td>
                      <td>$winner</td>
                    </tr>";
          }
        }else{
          echo "<tr>
                    <td>None</td>
                    <td>None</td>
                    <td>None</td>
                  </tr>";
        }
        echo "</table>";
      }
    }
  ?>

  </section>

  <!-- <script>
      var strUser = document.getElementById("hiddenUsername").textContent;
      console.log(strUser);
      document.getElementById("profileUserValue").value = strUser; 
  </script>   -->
<?php
  require_once 'footer.php';
  // include_once 'xampp\htdocs\meepmerp\meepmerp\header.php';
?>