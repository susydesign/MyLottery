<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet"  type="text/css" href="./css/loginphp.css"/>
</head>
<body>
<?php
        session_start();
        require('./php/db.php');
        $munka_id=session_id();
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
        $sql    = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql) or die(mysql_error());
       
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<br><h1>Sikeres Bejelentkezés: $row[username]";
            $_SESSION['username'] = $row[username];

            ?>
            <form class="form" method="post" name="logout">
                <input type="submit" value="logout" name="logout" class="logot-button"/>
            </form>
            <?php
            if (isset($_POST['logout'])) {
                session_destroy();
                unset($_SESSION["id"]);
                unset($_SESSION["name"]);
                header("Location:login.php");

            }
        }else{
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='../login.php'>Login</a> again.</p>
                  </div>";

        };



    }else{
        ?>
        <form class="form" method="post" name="login">
            <h1 class="login-title">Login to MayTime Lotto</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
            <input type="password" class="login-input" name="password" placeholder="Password"/>
            <input type="submit" value="Login" name="submit" class="login-button"/>
            <p class="link"><a href="./php/registration.php">New Registration</a></p>
        </form>
        <?php
    }     
    


    ?>
</body>
</html>