<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        echo "<br><h1>aut_sessin is work</h1>"
        exit();
    }
?>