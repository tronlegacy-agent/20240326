<?php
session_start();
$_SESSION['session_var'] = "hello world";
echo 'the content of $_SESSION[\'session_var\']'.' is '.$_SESSION['session_var'].'<br/>';
?>
<a href="createSimpleSession2.php">next page</a>