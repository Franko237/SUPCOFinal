<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("Location: connection.php");
        exit;
    }

    //On supprime une variable
    unset($_SESSION["user"]);

    header("Location: index.php");