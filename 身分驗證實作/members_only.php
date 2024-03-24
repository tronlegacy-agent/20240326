<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>members_only</title>
</head>
<body>
  <h1>MEMBER ONLY</h1>
  <?php
   if(isset($_SESSION['vaild_user'])){
    echo '<p> YOU ARE LOGGED IN AS '.$_SESSION['vaild_user'].'</p>';
    echo '<p><em>MEMBER-ONLY CONTENT GOES HRER.</em></p>';
   }else{
    echo '<p>YOU ARE NOT LOGGED IN</p>';
    echo '<p>ONLY LOGGED IN MEMBERS CAN SEE THIS PAGE.</p>';
   }
  ?>
  <p><a href="./authmain.php">BACK TO HOME PAGE</a></p>
</body>
</html>