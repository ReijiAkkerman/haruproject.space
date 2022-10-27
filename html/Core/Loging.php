<?php
    $status = 0;
    try {
        $connection = mysqli_connect("localhost", "UsersDistributor", "78737873", "Users");
    }
    catch(Throwable) {
        $status = 2;
        goto b;
    }
    $login;
    $password;
    if(isset($_POST["login"]))
        $login = $_POST["login"];
    if(isset($_POST["password"]))
        $password = $_POST["password"];
    if(($login) && ($password)) {
        if($connection) {
            $validation = false;
            $mysql_command = "SELECT * FROM users";
            $searching_login = mysqli_query($connection, $mysql_command);
            foreach($searching_login as $row) {
                $temp = $row["login"];
                if($temp === $login)
                    $validation = true;
            }
            if($validation == false) {
                $mysql_command = "INSERT users(login, password) VALUES ('$login', '$password')";
                mysqli_query($connection, $mysql_command);
            }
            else {
                $status = 3;
                mysqli_close($connection);
                goto a;
            }
        }
        if($status === 0) {
            mysqli_close($connection);
            try {
                $connection1 = mysqli_connect("localhost", "root", "KisaragiEki4");
            }
            catch(Throwable) {
                $status = 2;
                $connection1 = mysqli_connect("localhost", "UsersDistributor", "78737873", "Users");
                $mysql_command = "DELETE FROM users WHERE login='$login'";
                mysqli_query($connection1, $mysql_command);
                mysqli_close($connection1);
                goto b;
            }
        }
        if($connection1) {
            $mysql_command = "CREATE USER IF NOT EXISTS '$login'@'localhost' IDENTIFIED BY '$password'";
            mysqli_query($connection1, $mysql_command);
            $mysql_command = "CREATE DATABASE IF NOT EXISTS $login";
            mysqli_query($connection1, $mysql_command);
            $mysql_command = "GRANT SELECT, DELETE, INSERT, UPDATE ON `$login`.* TO '$login'@'localhost'";
            mysqli_query($connection1, $mysql_command);
            $mysql_command = "FLUSH PRIVILEGES";
            mysqli_query($connection1, $mysql_command);
        }
    }
    else {
        $status = 1;
    }
    a:
    b:
    if($status === 0)
        mysqli_close($connection1);
?>