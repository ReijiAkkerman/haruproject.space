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
            $validation = false;
            $mysql_command = "USE Users";
            mysqli_query($connection, $mysql_command);
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
                echo "Введенный пользователь уже существует\n";
                exit(1);
            }
        }
        else
            die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_close($connection);
?>