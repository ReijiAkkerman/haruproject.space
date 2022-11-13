<?php
    if($connection = mysqli_connect("localhost", "UsersDistributor", "78737873", "Users")) {

    }
    else {
        $connection = mysqli_connect("localhost", "root", "KisaragiEki4");
        $mysql_command = "SELECT user FROM mysql.user";
        $result = mysqli_query($connection, $mysql_command);
        foreach($result as $row) {
            if($row["user"] == "UsersDistributor") 
                $validation = 1;
            if($validation === 1)
                break;
        }
        $mysql_command = "SELECT DATABASES";
        $result = mysqli_query($connection, $mysql_command);
        foreach($result as $row) {
            if()
        }
    }
?>