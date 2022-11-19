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
        $mysql_command = "SELECT user FROM mysql.user";
        $result = mysqli_query($connection, $mysql_command);
        foreach($result as $row) {
            if($row["user"] === "UsersDistributor") {
                $validation = 1;
                break;
            }
        }
        if(!isset($validation)) {
            $error = 2;
            goto a;
        }
        else
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
            $error = 3;
            goto a;
        }
        else
            unset($validation);
    }
    if(($login == null) || ($password == null)) {
        $error = 4;
        goto a;
    }
    $mysql_command = "SELECT login, password FROM users";
    $result = mysqli_query($connection, $mysql_command);
    foreach($result as $row) {
        if($row["login"] === "$login") {
            if($row["password"] === "$password")
                $enter_access = 1;
            break;
        }
    }
    if(!$enter_access) {
        $error = 5;
        goto a;
    }
    a:
?>