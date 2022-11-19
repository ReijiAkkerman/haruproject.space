<?php
    $login = 'Reiji';
    $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4');
    $mysql_command = "DROP USER IF EXISTS '$login'@'localhost'";
    mysqli_query($connection, $mysql_command);
    $mysql_command = "DROP DATABASE IF EXISTS $login";
    mysqli_query($connection, $mysql_command);
    $mysql_command = "DROP USER IF EXISTS 'UsersDistributor'@'localhost'";
    mysqli_query($connection, $mysql_command);
    $mysql_command = "DROP DATABASE IF EXISTS Users";
    mysqli_query($connection, $mysql_command);
    $login;
?>