<?php
    $counter = 0;
    if($values === 2) {
        $connection = mysqli_connect("localhost", "$login", "$password", "$login");
        if($connection) {
            $mysql_command = "SELECT * FROM Diary";
            $result = mysqli_query($connection, $mysql_command);
            foreach($result as $row) {
                $counter++;
                if($counter) {
                    $values = 1;
                    break;
                }
            }
            if($values === 2)
                $values = 0;
        }
        else 
            include "errors/status2.php";
    }
    if(!$values) { 
        include "components/values0.php";
    }
    else { 
        include "components/values1.php";
        include "components/toolbar.php";
    }
?>