<?php
    echo "<h1>Server oldalon rögzítve</h1><br>";
    
    
    $fuser = $_POST['fuser'];
    $fogad1 = $_POST['fogad1'];
    $fogad2 = $_POST['fogad2'];
    $fogad3 = $_POST['fogad3'];
    $fogad4 = $_POST['fogad4'];
    
    
    
    echo "user : $user<br>";
    echo "Óra-perc fogadás : $fogad1<br>";
    echo "Hét fogadadas    : $fogad2<br>";
    echo "Hónap fogadadas  : $fogad3<br>";
    echo "Év fogadadas     : $fogad4<br>";

?>