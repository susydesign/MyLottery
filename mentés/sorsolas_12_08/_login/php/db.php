<?php
    $servername = "nl1-ss4.a2hosting.com";
    $username = "susydesi_admin";
    $password = "9199OrZso";
    $dbname = "susydesi_mytimelotto";  

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
