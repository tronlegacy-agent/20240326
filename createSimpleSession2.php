<?php
session_start();

echo 'the content of $_SESSION[\'session_var\'] is '.$_SESSION['session_var'].'<br \>';

unset($_SESSION[@$session_var]);
?>
<p><a href="./createSimpleSession3.php">next page</a></p>