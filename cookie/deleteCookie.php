<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
echo "Cookie 'user' is deleted.";
