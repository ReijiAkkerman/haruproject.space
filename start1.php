<?php
    $connection = mysqli_connect("localhost", "Reiji", "Yasura", "Reiji");
    if($connection) {
        $mysql_command = "SELECT * FROM Diary WHERE id='100'";
        $value = mysqli_query($connection, $mysql_command);
        echo $value;
    }
?>