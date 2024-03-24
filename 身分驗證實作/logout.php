<?php
session_start();

//儲存以測試他們是否已登入
$old_user = @$_SESSION['vaild_user'];
unset($_SESSION['vaild_user']);
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>log out</title>
</head>
<body>
  <h1>LOG OUT</h1>
  <?php
  if(!empty($old_user)){
    echo '<p>YOU HAVE BEEN LOGGED OUT.</p>';
  }else{
    //如果他們還沒登入但來到這個網頁
    echo 'YOU WERE NOT LOGGED IN，AND SO HAVE NOT BEEN LOGGED OUT.';
  }
  ?>
  <p><a href="./authmain.php">BACK TO HOME PAGE</a></p>
</body>
</html>