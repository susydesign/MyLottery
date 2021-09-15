<?php
require_once('db.php');



if(isset($_POST["game_id"])&&isset($_POST["sorsolt"])){
    $m_game_id = $_POST["game_id"];
    $m_sorsolt = $_POST["sorsolt"];
    $m_ma = date("Y.m.d");

    
    $sql_lottery = "SELECT * FROM `lottery` WHERE mikor=$m_ma";
    $result = mysqli_query($conn, $sql_lottery) or die(mysql_error());
    
    if ($result->num_rows > 0) {
        $lottery_row = $result->fetch_assoc();
        echo "Ma már meg volt a sorsolás";
        $msg = array('game_id'=>$lottery_row[game_id],'eredmeny1'=>$lottery_row[eredmeny1],'mikor'=>$lottery_row[mikor]);

    }else{
        echo('Fogadást torolni');
        $sql_lottery = "INSERT INTO `lottery`(`game_id`,`eredmeny1`,˛`mikor`) VALUES ($m_game_id,$m_sorsolt,$m_ma";
        $result = mysqli_query($conn, $sql_lottery) or die(mysql_error());

        $msg = array('game_id'=>$lottery_row[game_id],'eredmeny1'=>$lottery_row[eredmeny1],'mikor'=>$lottery_row[mikor]);
        //Beírni a lottery táblába az eredményt
    }
}

$msg = array('game_id' => $m_game_id,'eredmeny1'=>$m_sorsolt,'mikor'=>$m_ma);

echo json_encode($msg);
//$result->free_result();
//$conn->close();

exit;

?>