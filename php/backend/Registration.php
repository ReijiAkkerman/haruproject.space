<?php
    $login = "Reiji";
    $password = "Yasura";
    if(isset($_POST["login"]))
        $login = $_POST["login"];
    if(isset($_POST["password"]))
        $password = $_POST["password"];
    try {
        $connection = mysqli_connect('localhost', 'UsersDistributor', '78737873', 'Users');
    }
    catch (Throwable $e) {
        mysqli_report(MYSQLI_REPORT_OFF);
        $connection = @mysqli_connect('localhost', 'root', 'KisaragiEki4');
        if($connection) {
            $mysql_command = "SELECT user FROM mysql.user";
            $result = mysqli_query($connection, $mysql_command);
            foreach($result as $row) {
                if($row["user"] === "UsersDistributor") {
                    $validation = 1;
                    break;
                }
            }
            if(!isset($validation)) {
                $mysql_command = "CREATE USER IF NOT EXISTS 'UsersDistributor'@'localhost' IDENTIFIED BY '78737873'";
                mysqli_query($connection, $mysql_command);
            }
            if(isset($validation))
                unset($validation);
            $mysql_command = "SHOW DATABASES";
            $result = mysqli_query($connection, $mysql_command);
            foreach($result as $row) {
                if($row["Database"] === "Users") {
                    $validation = 1;
                    break;
                }
            }
            if(!isset($validation)) {
                $mysql_command = "CREATE DATABASE Users";
                mysqli_query($connection, $mysql_command);
                $mysql_command = "USE Users";
                mysqli_query($connection, $mysql_command);
                $mysql_command = "CREATE TABLE users(id INT PRIMARY KEY AUTO_INCREMENT, login TINYTEXT, password TINYTEXT)";
                mysqli_query($connection, $mysql_command);
                $mysql_command = "GRANT SELECT, INSERT, UPDATE, DELETE ON `Users`.* TO 'UsersDistributor'@'localhost'";
                mysqli_query($connection, $mysql_command);
                $mysql_command = "FLUSH PRIVILEGES";
                mysqli_query($connection, $mysql_command);
            }
            if(isset($validation))
                unset($validation);
            mysqli_close($connection);
            unset($connection);
            $connection = @mysqli_connect('localhost', 'UsersDistributor', '78737873', 'Users');
        }
    }
    if(($login == null) || ($password == null)) {
        $error = 4;
        goto a;
    }
    $mysql_command = "SELECT login FROM users";
    $result = mysqli_query($connection, $mysql_command);
    foreach($result as $row) {
        if($row["login"] === $login) {
            $validation = 1;
            break;
        }
    }
    if(isset($validation)) {
        $error = 1;
        unset($validation);
        goto a;
    }
    else {
    $mysql_command = "INSERT users(login, password) VALUES ('$login', '$password')";
    mysqli_query($connection, $mysql_command);
    mysqli_close($connection);
    $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4');
    $mysql_command = "CREATE DATABASE IF NOT EXISTS $login";
    mysqli_query($connection, $mysql_command);
    $mysql_command = "CREATE USER '$login'@'localhost' IDENTIFIED BY '$password'";
    mysqli_query($connection, $mysql_command);
    $mysql_command = "GRANT SELECT, INSERT, DELETE, UPDATE ON '$login'.* TO '$login'@'localhost'";
    mysqli_query($connection, $mysql_command);
    $mysql_command = "FLUSH PRIVILEGES";
    mysqli_query($connection, $mysql_command);
    $mysql_command = "USE $login";
    mysqli_query($connection, $mysql_command);
    $mysql_command = "CREATE TABLE Diary(id INT PRIMARY KEY AUTO_INCREMENT, cur_time INT, header TINYTEXT, text TEXT)";
    mysqli_query($connection, $mysql_command);
    mysqli_close($connection);
    }
    $connection = mysqli_connect('localhost', 'UsersDistributor', '78737873', 'Users');
    $mysql_command = "SELECT * FROM users WHERE login = '$login'";
    $result = mysqli_query($connection, $mysql_command);
    foreach($result as $row) {
        if($row["login"] === $login) 
            $id = $row["id"];
    }
    setcookie("login", $login, time() + 3600*24*30);
    setcookie("id", $id, time() + 3600*24*30);
    (string)$var = "My_page";
    setcookie("var", "My_page", time() + 3600*24*30);
    mysqli_close($connection);
    $enter_access = 1;
    a:
?>