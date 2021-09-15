<?php
    $m_akcio =$_POST["akcio"];

    session_destroy();
    unset($_SESSION["user_id"]);
    unset($_SESSION["username"]);
//    header("Location:login.php");
    echo json_encode(['code=>200']);
    exit;
    
?>