<?php
echo "<b>session_start();</b><br>";
session_start();
$_SESSION['session_var'] = "hello world";

echo "<b>Session content: </b>";
var_dump($_SESSION);
echo "<br><b>Session ID: </b>";
print(session_id()) ."<br>";

// remove all session variables
echo "<hr><b>session_unset();</b><br>";
session_unset(); 
echo "<b>Session content: </b>";
var_dump($_SESSION);
echo "<br><b>Session ID: </b>";
print(session_id()) ."<br>";

// destroy session ID
echo "<hr><b>session_destroy()</b><br>";
session_destroy();
echo "<b>Session content: </b>";
var_dump($_SESSION);
echo "<br><b>Session ID: </b>";
print(session_id()) ."<br>";
