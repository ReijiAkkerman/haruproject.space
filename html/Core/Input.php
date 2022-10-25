<?php
    $connection = mysqli_connect("localhost", "UsersDistributor", "78737873");
    $login;
    $password;
    if(isset($_POST["login"]))
        $login = $_POST["login"];
    if(isset($_POST["password"]))
        $password = $_POST["password"];
    if(($login != false) || ($password != false)) {
        if($connection) {
            $val_login = false;
            $val_pass = false;
            $mysql_command = "USE Users";
            mysqli_query($connection, $mysql_command);
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
                    echo "Логин и пароль введены верно\n";
                    exit(0);
                }
                else {
                    echo "Неверный логин или пароль\n";
                    exit(1);
                }
            }
        }
        else
            die("Connection failed" . mysqli_connect_error());
    }
    else {
        echo "Данные введены не польностью\n";
    }
?>