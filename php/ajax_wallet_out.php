<?php
    session_start();
    require_once('db.php');

    if(isset($_POST["user_id"])&&isset($_POST["amunt"])){
      
      $sql_wallet = "UPDATE `wallet` SET amunt = amunt-".$_POST["amunt"]." WHERE user_id=".$_POST["user_id"]."";
      $result = mysqli_query($conn, $sql_wallet) or die(mysql_error());
      if ($result->num_rows > 0) {
          $wallet_row = $result->fetch_assoc();
          $m_amunt = $wallet_row[amunt];
          $m_bonus = $wallet_row[bonus];
          $m_bonus1 = $wallet_row[bonus1];
          $m_bonus2 = $wallet_row[bonus2];
          $m_bonus3 = $wallet_row[bonus3];
          $m_bonus4 = $wallet_row[bonus4];
      }
      
      
      $msg = array('user_id' => $m_userId, 'amunt'=>$m_amunt, 'bonus'=> $m_bonus, 'bonus1'=>  $m_bonus1, 'bonus2' =>$m_bonus2, 'bonus3'=>$m_bonus3, 'bonus4'=>$m_bonus4);
      
        echo json_encode($msg);
      
      exit;
    }
    
    
?>