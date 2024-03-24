<?php
session_start();
echo 'the content of $_SESSION[\'session_var\'] is '.@$_SESSION['session_var'].'<br \>';
session_destroy();