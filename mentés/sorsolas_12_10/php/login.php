<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <title>MytimeLotto-Login</title>
    <link rel="stylesheet"  type="text/css" href="../css/loginphp.css"/>
</head>
<body>
    <div class="bg"></div>
<?php


        session_start();
        require_once('db.php');
        $megkeres=FALSE;
        $user_name='';
        $user_password='';
        if(isset($_POST['username'])){
            $user_name=$_POST['username'];
            if ($user_name!=''){
                if(isset($_POST['password'])){
                    $user_password=md5($_POST['password']);
                    $megkeres=TRUE;
                };
            };
        };

    if($megkeres){
        $username = stripslashes($user_name);  
        $username = mysqli_real_escape_string($conn, $user_name);
        $password = stripslashes($user_password);
        $password = mysqli_real_escape_string($conn, $user_password);

        echo "User name: $username";

        $sql    = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql) or die(mysql_error());
       
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<br><h1>Sikeres Bejelentkezés: $row[username]";
            $_SESSION['user_id'] = $row[user_id];
            $_SESSION['username'] = $row[username];

            echo "<Br>Global: ".$_SESSION['username'];
            echo " userID: ".$_SESSION['user_id'];
            ?>
            <form class="form" method="post" name="logout">
                <input type="submit" value="Logout" name="submit" class="login-button"/>
                <a class="mylBtn btnS glow btnBlack" href="../index.php">Back</button>
            </form>
            <?php





            if (isset($_POST['logout'])) {
                echo "<h1>Logout...</h1>";
                session_destroy();
                unset($_SESSION["user_id"]);
                unset($_SESSION["username"]);
                header("Location:../index.php");

            }
        }else{
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";

        };



    }else{
        unset($_SESSION["user_id"]);
        unset($_SESSION["username"]);
        echo "<Br>Global: ".$_SESSION['username'];
        echo " userID: ".$_SESSION['user_id'];
        ?>




        <form class="form" method="post" name="login">
            <h1 class="login-title">Login to MayTime Lotto</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
            <input type="password" class="login-input" name="password" placeholder="Password"/>
            <input type="submit" value="Login" name="submit" class="login-button"/>
            <a class="back-button" href="../index.php">Back</button>
            <p class="link"><a href="registration.php">New Registration</a></p>
        </form>
        <?php
    }     
    
function lout() {
    echo "<h1>Logout...</h1>";
    session_destroy();
    unset($_SESSION["user_id"]);
    unset($_SESSION["username"]);
    header("Location:../login.php");
}

    ?>
</body>
</html>