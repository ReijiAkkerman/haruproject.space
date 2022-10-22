<?php
    $connection = mysqli_connect("localhost", "root", "KisaragiEki4");
    if(!$connection)
        die("Copnnection failed: " . mysqli_connect_error());
    echo "Подключение успешно установлено\n";
    mysqli_close($connection);
?>