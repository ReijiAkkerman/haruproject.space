<?php
    $validation = 0;
    $connection = mysqli_connect("localhost", "UsersDistrubitor", "78737873", "Users");
    if($connection) {
        $mysql_command = "SELECT login, password FROM users";
        $connectionmysqli_query($connection, $mysql_command);
        
    }
?>