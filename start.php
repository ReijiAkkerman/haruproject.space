<?php
    $login = ["Reiji"];
    $connection = mysqli_connect("localhost", "root", "KisaragiEki4");
    for((int) $i = 0; (int) $i < 1; (int) $i++) {
        $mysql_command = "DROP USER IF EXISTS '$login[$i]'@'localhost'";
        mysqli_query($connection, $mysql_command);
        $mysql_command = "DROP DATABASE IF EXISTS $login[$i]";
        mysqli_query($connection, $mysql_command);
        $mysql_command = "USE Users";
        mysqli_query($connection, $mysql_command);
        $mysql_command = "DELETE FROM users WHERE password='Yasura'";
        mysqli_query($connection, $mysql_command);
        $mysql_command = "DELETE FROM active_users WHERE password='Yasura'";
        mysqli_query($connection, $mysql_command);
        $mysql_command = "DELETE FROM last_user WHERE password='Yasura'";
    }
    mysqli_close($connection);
?>