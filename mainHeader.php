<?php
  session_start();
?>


<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <title>Personal Work Tracker</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png">
</head>

<header >
    <div class="container">
        <div class="logo backhome">
          <a class="backhome"href="index.php">WolfAngle</a>
        </div>
        <div class="logo">

        <?php
          if (isset($_SESSION['user_id'])){
            echo '<a class="loginTrue" href="includes/logout.inc.php">Logout</a>
            ';
          }
          else {
            echo '<a class="loginLogin" href="login.php">Login</a>
            <a class="discordLink" href="">Admin</a>
            <a class="discordLink" target="_blank" href="" Discord</a>';
          }
        ?>


        </div>
    </div>
</header>