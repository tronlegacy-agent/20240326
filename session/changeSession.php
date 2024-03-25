<?php
session_start();
// to change a session variable, just overwrite it 
$_SESSION["favoriteColor"] = "yellow";
print_r($_SESSION);
