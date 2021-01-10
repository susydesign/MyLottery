<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> 
    <link rel="icon" href="../images/logo.png" type="image/x-icon"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>MytimeLotto-Login</title>
    <link rel="stylesheet"  type="text/css" href="../css/loginphp.css"/>
</head>
<body class="bg">
    <header>
        <div id="l_fejlec" class="conatainer-fluid">
            <div class="row">
                <div class="l_fejlec01" class="col-md-4">
                    <a href="../index.php">Home</a>
                    <a href="../about-us.html">About Us</a>
                    <a href="..revards.html">Rewards</a>
                    <a href="../news.html">News</a>
                    <a href="../contact.html">Contact Us</a>
                </div>
                           
                <div class="l_fejlec02" class="col-md-4">
                    <div class="p-2">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                <th>
                                    <img src="../images/logo.png" alt=""/>
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>
                                    <div id="info">
                                        <p>Login...</p>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    
                <div class="l_fejlec03" class="col-md-4"></div>

            </div>    
        </div>
    </header>

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

//        echo "User name: $username";
//        $sql    = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
        $sql = "SELECT users.user_id,users.username,users.password,wallet.user_id,wallet.amunt, wallet.bonus, wallet.bonus1, wallet.bonus2, wallet.bonus3, wallet.bonus4 FROM `users` INNER JOIN `wallet` ON users.user_id=wallet.user_id WHERE users.username='$username' AND users.password='$password'";

        $result = mysqli_query($conn, $sql) or die(mysql_error());
       
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row[user_id];
            $_SESSION['username'] = $row[username];
            $_SESSION['amunt'] = $row[amunt];
            $_SESSION['bonus'] = $row[bonus];
            $_SESSION['bonus1'] = $row[bonus1];
            $_SESSION['bonus2'] = $row[bonus2];
            $_SESSION['bonus3'] = $row[bonus3];
            $_SESSION['bonus4'] = $row[bonus4];



/*            Az infoba be kéne írnia a userneve
            echo "<Br>Global: ".$_SESSION['username'];
            echo "<h1>Amunt: ".$_SESSION['amunt']."</h1>";
*/
            ?>
            <form class="form" method="post" name="logout">
                <input type="submit" value="Logout" name="submit" class="login-button"/>
                <a class="btn btn-secondary" style="margin-top: 20px; color:#FFD655" href="../index.php">Home</button>
            </form>
            <?php

            if (isset($_POST['logout'])) {
                echo "<h1>Logout...</h1>";
                session_destroy();
                unset($_SESSION["user_id"]);
                unset($_SESSION["username"]);
                unset($_SESSION["amunt"]);
                unset($_SESSION["bonus"]);
                unset($_SESSION["bonus1"]);
                unset($_SESSION["bonus2"]);
                unset($_SESSION["bonus3"]);
                unset($_SESSION["bonus4"]);
                header("Location:../index.php");
            }
            if (isset($_POST['vissza'])) {
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
        unset($_SESSION["amunt"]);
        unset($_SESSION["bonus"]);
        unset($_SESSION["bonus1"]);
        unset($_SESSION["bonus2"]);
        unset($_SESSION["bonus3"]);
        unset($_SESSION["bonus4"]);
/*        echo "<Br>Global: ".$_SESSION['username'];
        echo " userID: ".$_SESSION['user_id'];
*/        
        ?>




        <form class="form" method="post" name="login">
            <h1 class="login-title">Login to MyTime Lotto</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
            <input type="password" class="login-input" name="password" placeholder="Password"/>
            <input type="submit" value="Login" name="submit" class="login-button"/>
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