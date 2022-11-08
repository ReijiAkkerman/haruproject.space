<?php
    session_start();
    $login = $_SESSION["login"];
    $id = $_SESSION["id"];
    $connection = mysqli_connect("localhost", "UsersDistributor", "78737873", "Users");
    if($connection) {
        $mysql_command = "SELECT * FROM active_users";
        $value = mysqli_query($connection, $mysql_command);
        foreach($value as $row) {
            if($row["id"] == $id)
                $val_id = 1;
            if($row["login"] == $login)
                $val_login = 1;
        }
        if(isset($val_id) === isset($val_login)) {
            $values = 0;
            $status = 0;
        }
        else {
            $status = 5;
        }
    }
    else {
        $status = 2;
    }
?>