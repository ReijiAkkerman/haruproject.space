<?php
    if(!$status) {
        include "Resources/center.php";
    }
    else
        switch($status) {
            case 1:
                include "Resources/errors/status1.php";
                break;
            case 2:
                include "Resources/errors/status2.php";
                break;
            case 3:
                include "Resources/errors/status3.php";
                break;
            case 4:
                include "Resources/errors/status4.php";
                break;
        }
?>