<?php
    require_once('db.php');
    
    echo "<h1>Server oldalon rögzítve</h1><br>";
        
    $fuserId = $_POST['fuser'];
//    $fogad1 = "'".$_POST['fogad1']."'";
    $fogad1 = "'".$_POST['fogad1']."'";
    $fogad2 = $_POST['fogad2'];
    $fogad3 = $_POST['fogad3'];
    $fogad4 = $_POST['fogad4'];
    
    
    $jatek_id = "1";
    $jatek_price = 0;
    $jatek_name = "Hour";
    $aktdate=getdate();
    $fogaddate="$aktdate[year]-$aktdate[mon]-$aktdate[mday] $aktdate[hours]:$aktdate[minutes]:$aktdate[seconds]";
    $fogDate="'".$fogaddate."'";
    
    //mennyibe kerül a játék - games tábla beolvasása
    $sql_games="SELECT * FROM `games` WHERE game_id=$jatek_id";  
    $result = mysqli_query($conn, $sql_games) or die(mysql_error());
    if ($result->num_rows > 0) {
        $game_row = $result->fetch_assoc();
        $jatek_name=$game_row[game_name];
        $jatek_price = $game_row[price];
    }

    //Csökkentjük a pénztárcát.
    $sql_wall = "UPDATE `wallet` SET `amunt`= amunt-$jatek_price,`bonus`= bonus+1,`bonus1`= bonus1+1 WHERE user_id=$fuserId";

    $sql_plays="INSERT INTO `plays`(`user_id`, `game_id`, `tipp1`,`osszeg`,`mikor`) VALUES ($fuserId,$jatek_id,$fogad1,$jatek_price,$fogDate)";

    if ($fogad4 != "") {
        $jatek_id = "4";
        $fogad4 = "'".$_POST['fogad4']."'";
        //mennyibe kerül a játék - games tábla beolvasása
        $sql_games="SELECT * FROM `games` WHERE game_id=$jatek_id";  
        $result = mysqli_query($conn, $sql_games) or die(mysql_error());
        if ($result->num_rows > 0) {
            $game_row = $result->fetch_assoc();
            $jatek_name=$game_row[game_name];
            $jatek_price = $game_row[price];
        }
  
        $sql_plays="INSERT INTO `plays`(`user_id`, `game_id`, `tipp1`,`tipp4`, `osszeg`,`mikor`) VALUES ($fuserId,$jatek_id,$fogad1,$fogad4,$jatek_price,$fogDate)";
        //Csökkentjük a pénztárcát.
        $sql_wall = "UPDATE `wallet` SET `amunt`= amunt-$jatek_price,`bonus`= bonus+1,`bonus4`= bonus4+1 WHERE user_id=$fuserId";

    } elseif ($fogad3 != ""){
        $jatek_id = "3";
        $fogad3 = "'".$_POST['fogad3']."'";
        //mennyibe kerül a játék - games tábla beolvasása
        $sql_games="SELECT * FROM `games` WHERE game_id=$jatek_id";  
        $result = mysqli_query($conn, $sql_games) or die(mysql_error());
        if ($result->num_rows > 0) {
            $game_row = $result->fetch_assoc();
            $jatek_name=$game_row[game_name];
            $jatek_price = $game_row[price];
        }

        $sql_plays="INSERT INTO `plays`(`user_id`, `game_id`, `tipp1`,`tipp3`, `osszeg`,`mikor`) VALUES ($fuserId,$jatek_id,$fogad1,$fogad3,$jatek_price,$fogDate)";
        //Csökkentjük a pénztárcát.
        $sql_wall = "UPDATE `wallet` SET `amunt`= amunt-$jatek_price,`bonus`= bonus+1,`bonus3`= bonus3+1 WHERE user_id=$fuserId";



    }elseif ($fogad2 !=""){
        $jatek_id = "2";
        $fogad2 = "'".$_POST['fogad2']."'";
            //mennyibe kerül a játék - games tábla beolvasása
        $sql_games="SELECT * FROM `games` WHERE game_id=$jatek_id";  
        $result = mysqli_query($conn, $sql_games) or die(mysql_error());
        if ($result->num_rows > 0) {
            $game_row = $result->fetch_assoc();
            $jatek_name=$game_row[game_name];
            $jatek_price = $game_row[price];
        }

        $sql_plays="INSERT INTO `plays`(`user_id`, `game_id`, `tipp1`,`tipp2`, `osszeg`,`mikor`) VALUES ($fuserId,$jatek_id,$fogad1,$fogad2,$jatek_price,$fogDate)";
        //Csökkentjük a pénztárcát.
        $sql_wall = "UPDATE `wallet` SET `amunt`= amunt-$jatek_price,`bonus`= bonus+1,`bonus2`= bonus2+1 WHERE user_id=$fuserId";

    }
    
    $_SESSION['amunt'] = $row[amunt];
    $_SESSION['bonus'] = $row[bonus];
    $_SESSION['bonus1'] = $row[bonus1];
    $_SESSION['bonus2'] = $row[bonus2];
    $_SESSION['bonus3'] = $row[bonus3];
    $_SESSION['bonus4'] = $row[bonus4];



    echo "user ID: $fuserId<br>";
    echo "Óra-perc fogadás : $fogad1<br>";
    echo "Hét fogadadas    : $fogad2<br>";
    echo "Hónap fogadadas  : $fogad3<br>";
    echo "Év fogadadas     : $fogad4<br>";
    echo "Fogadás időpontja: $fogDate<br>";
    echo "Játék típus: $jatek_name";



    //tároljuk a fogadást a plays táblába

    echo "<br>$sql_games<br>";
    $result = mysqli_query($conn, $sql_plays) or die(mysql_error());
    echo "<br>OK: ".$sql_plays;
    $result = mysqli_query($conn, $sql_wall) or die(mysql_error());
    echo "<br>OK: ".$sql_wall;
    $sql_wall="SELECT * FROM wallet WHERE user_id=$fuserId";
    $result = mysqli_query($conn, $sql_wall) or die(mysql_error());
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['amunt'] = $row[amunt];
        $_SESSION['bonus'] = $row[bonus];
        $_SESSION['bonus1'] = $row[bonus1];
        $_SESSION['bonus2'] = $row[bonus2];
        $_SESSION['bonus3'] = $row[bonus3];
        $_SESSION['bonus4'] = $row[bonus4];
    }

    echo "<br>Wallet: ".$_SESSION['amunt'];

?>