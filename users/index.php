<?php
    session_start();
    $_SESSION;

    include("connection.php");
    include("functions.php");
    
    $user_data = check_login($con);

    if($user_data)
    {
        header("Location: http://localhost/urls/");
    }

?>
