<?php
    $login = $_SESSION["login"];
    $id = $_SESSION["id"];
    $connection = mysqli_connect("localhost", "UsersDistributor", "78737873", "Users");
    if($connection) {
        $mysql_command = "SELECT * FROM users WHERE id='$id'";
        $value = mysqli_query($connection, $mysql_command);
        if($value["login"] == $login) {
            $password = $value["password"];
            mysqli_close($connection);
        }
    }
    $date = date("ymd");
    $time = date("his");
    $sun = date("A");
    $header;
    $text;
    if(isset($_POST["header"]))
        $header = $_POST["header"];
    if(isset($_POST["text"]))
        $text = $_POST["text"];
    $connection1 = mysqli_connect("localhost", "$login", "$password", "$login");
    if($connection1) {
        $mysql_command = "INSERT Diary(date, time, sun, header, text) VALUES ($date, $time, $sun, $header, $text)";
    }
?>