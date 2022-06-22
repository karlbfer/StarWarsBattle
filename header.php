<?php
  session_start();
?>

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
  <!-- <script src="math.js" type="text/javascript"></script> -->
</head>
<body>
<header>

    <!-- needs to split in section of 3, use stretch on these sections. redo FlexFroggy lol -->
    <div id="wrapper">
    <section class="header">
      <ul>
        <li class="navLeft"><a class="active" href="index.php">StarWars Battle</a></li>
        <li><a href="#skew">Character Select</a></li>
        <li><a href="https://www.karlferraren.com">Other Work</a></li>
        <?php
          if (isset($_SESSION["userid"])) {
            echo '<li class="navRight"><a href="profile.php">My Profile</a></li>';
            echo '<li class="navRight"><a href="includes/logout.inc.php">Log out</a></li>';
          }
          else {      
            echo '<li class="navRight"><a href="login.php">Login</a></li>';
            echo '<li class="navRight"><a href="signup.php">Sign Up</a></li>';
          }
        ?>

      </ul>
    </section>
    </div>
  </header>
  <div id="wrapper">