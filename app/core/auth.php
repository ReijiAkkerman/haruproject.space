<?php
    function _registration($login, $password):bool {
        $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
        if($connection) {
            mysqli_query($connection, 'CREATE TABLE IF NOT EXISTS ' . $login . '_calendar(id INT PRIMARY KEY AUTO_INCREMENT, header TINYTEXT, content TEXT, start_year SMALLINT, start_month TINYINT, start_day TINYINT, start_hour TINYINT, start_minute TINYINT, end_year SMALLINT, end_month TINYINT, end_day TINYINT, end_hour TINYINT, end_minute TINYINT, creation_year SMALLINT, creation_month TINYINT, creation_day TINYINT, creation_hour TINYINT, creation_minute TINYINT, done BOOL, result_type TINYTEXT, result_content TEXT, result_int INT, during_day BOOL)');
            mysqli_query($connection, 'CREATE TABLE IF NOT EXISTS auth(id INT PRIMARY KEY AUTO_INCREMENT, login TINYTEXT, password TINYTEXT)');
            mysqli_query($connection, "INSERT INTO auth(login, password) VALUES('$login', '$password')");
            return true;
        }
        else
            return false;
    }

    _registration('ReijiAkkerman', 'Okuderayuuko0');