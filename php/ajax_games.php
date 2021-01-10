<?php
    session_start();
    require_once('db.php');
    
    $sql_games = "SELECT * FROM `games`";
    $result = mysqli_query($conn, $sql_games) or die(mysql_error());
    if ($result->num_rows > 0) {
        $games_row = $result->fetch_assoc();
        $m_game_id = $games_row[game_id];
        $m_game_name = $games_row[game_name];
        $m_game_price = $games_row[game_price];
    }
    
    $msg = array('game_id' => $m_game_id, 'game_name'=>$m_game_name, 'game_price'=> $m_game_price);
    echo json_encode($msg);
    exit;
    
?>