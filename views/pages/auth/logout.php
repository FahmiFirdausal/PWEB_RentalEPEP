<?php
    session_start();

    if (isset($_SESSION["username"])) {
        session_destroy();
        header("Location: /php-auth-sass-main/views/pages/auth/sign-in.php");
    }else{
        header("Location: /php-auth-sass-main/views/pages/auth/sign-in.php");
    }
