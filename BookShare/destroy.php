<?php
    session_start();
    session_destroy();
    session_start();
    //$_SESSION["Name"]="Login";
    header("Location: index.php");
    exit();
?>