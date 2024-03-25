
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>homepage</title>
</head>

<body>
  <h1>HOME PAGE</h1>
  <?php
  $redirect = "authmain.php";
  if(isset($_SESSION['vaild_user'])) {
    echo '<p> YOU ARE LOGIN AS : ' . $_SESSION['vaild_user'] . '<br />';
    echo '<a href="logout.php">LOGOUT<a/></p>';
  } else {
    if (isset($userid)) {
      //如果他們嘗試登入失敗
      echo '<p>COULD NOT LOG YOU IN.</p>';
    } else {
      //他們未嘗試登入
      echo '<p>YOU ARE NOT LOG IN.</p>';

    }
  }
  ?>
  <form action="members_only.php" method="post">
    <fieldset>
      <legend>LOGIN NOW!</legend>
      <p><label for="userid">USERID:</label>
        <input type="text" ee="userid" id="userid" size="30" />
      </p>
      <p><label for="password">PASSWORD:</label>
        <input type="password" name="password" id="password" size="30" />
      </p>
    </fieldset>
    <button type="submit" name="login">LOGIN</button>
    <form />
    <p><a href="./members_only.php">GO TO MEMBERS SECTION</a></p>
</body>
<style type="text/css">
  fieldset {
    width: 50%;
    border: 2px solid #ff0000;
  }

  legend {
    font-weight: bold;
    font-size: 50%;
  }

  label {
    width: 125px;
    float: left;
    text-align: left;
    font-weight: bold;
  }

  input {
    border: 1px solid #000;
    padding: 3px;
  }

  button {
    margin-top: 12px;
  }
</style>

</html>