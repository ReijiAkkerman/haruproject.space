<?php
    $connection = mysqli_connect("localhost", "root", "KisaragiEki4", "Users");
    $mysql_command = "SELECT * FROM users";
    $entries = mysqli_query($connection, $mysql_command);
    $counter = 0;
    $counter1 = 0;
    $count = 0;
    $count_max = 2;
    $max_value = 5;
    $step = 2;
    a:
    foreach($entries as $row) {
        $temp = degrees();
        if($temp === 0) {
            $counter++;
            continue;
        }
        else if($temp === 1)
            break;
        else {
            echo $row["login"] . "\n";
            $counter1++;
            $counter++;
        }
    }
    echo "\n\n\n";
    if($counter1 < $max_value) {
        $count += $step;
        $count_max += $step;
        $counter = 0;
        goto a;
    }


    function degrees() {
        global $count;
        global $count_max;
        global $counter;
        if($counter < $count) 
            return 0;
        else if(($counter >= $count) && ($counter < $count_max))
            return 2;
        else
            return 1;
    }
?>