<?php
    $values = 2;
    try {
        $connection = mysqli_connect("localhost", "UsersDistributor", "78737873", "Users");
    }
    catch (Throwable) {
        $status = 2;
    }
    $login;
    $password;
    if(isset($_POST["login"]))
        $login = $_POST["login"];
    if(isset($_POST["password"]))
        $password = $_POST["password"];
    if(($login != false) && ($password != false)) {
        if($connection) {
            $val_login = false;
            $val_pass = false;
            $mysql_command = "SELECT * FROM users";
            $searching_element = mysqli_query($connection, $mysql_command);
            foreach($searching_element as $row) {
                $temp = $row["login"];
                if($temp === $login)
                    $val_login = true;
                $temp = $row["password"];
                if($temp === $password)
                    $val_pass = true;
                if(($val_login === true) && ($val_pass === true)) {
                    $mysql_command = "SELECT * FROM active_users WHERE login='$login'";
                    $value = mysqli_query($connection, $mysql_command);
                    foreach($value as $row) {
                        if($row["login"] == $login)
                        $id = $row["id"];
                    }
                    session_start();
                    $_SESSION["id"] = $id;
                    $_SESSION["login"] = $login;
                    $status = 0;
                    $CONNECTION = 0;
                }
                else 
                    $status = 4;
            }
        }
    }
    else
        $status = 1;
?>