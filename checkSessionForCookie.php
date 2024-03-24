<?php
    //查詢
    //Setting the cookie parameters
    session_set_cookie_params(30 * 60, "/", "test", );
    //Retrieving the cookie parameters
    $res = session_get_cookie_params();
    //Starting the session
    session_start();
    print_r($res);

    echo "</br>";
