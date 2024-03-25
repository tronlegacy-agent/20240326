<?php
session_start();
// Echo session variables that were set on previous page
echo "Username is " . $_SESSION["username"] . ".<br>";
echo "Favorite color is " . $_SESSION["favoriteColor"] . ".";
