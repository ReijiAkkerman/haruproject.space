<?php
    $path = explode('/', $_SERVER['REQUEST_URI']);
    switch($path[1]) {
        case 'handle':
            include "page.html";
            break;
        case 'test':

            break;
    }

    function _get_data():mixed {
        $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
        $result = mysqli_query($connection, 'SELECT header, start_timelabel FROM ReijiAkkerman_calendar');
        foreach($result as $row) {
            $header = $row['header'];
            $timelabel = $row['start_timelabel'];
            $str = "";
        }
    }