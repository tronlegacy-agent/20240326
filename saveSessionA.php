<?php
session_start();
echo "儲存名為 CMRDB 的 SESSION <br \>";
$_SESSION['name']="CMRDB";
@$url="<a href='saveSessionB.php?sessid=$sessid'>下一頁</a>";
    echo $url; 