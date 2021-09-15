<?php
    $servername = "nl1-ss4.a2hosting.com";
    $username = "susydesi_admin";
    $password = "9199OrZso";
    $dbname = "susydesi_mytimelotto";  

    $con = mysqli_connect($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


?>
