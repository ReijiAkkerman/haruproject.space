<?php
    function _registration($login, $password, $timelabel, $hash):bool {
        $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
        if($connection) {
            mysqli_query($connection, 'CREATE TABLE IF NOT EXISTS ' . $login . '_calendar(id INT PRIMARY KEY AUTO_INCREMENT, header TINYTEXT, content TEXT, start_timelabel INT, end_timelabel INT, creation_timelabel INT, done BOOL, during_day BOOL)');
            mysqli_query($connection, 'CREATE TABLE IF NOT EXISTS auth(id INT PRIMARY KEY AUTO_INCREMENT, login TINYTEXT, password TINYTEXT, timelabel INT, hash TINYTEXT)');
            mysqli_query($connection, "INSERT INTO auth(login, password, timelabel, hash) VALUES('$login', '$password', '$timelabel', '$hash')");
            mysqli_close($connection);
            return true;
        }
        return false;
    }

    function _validate_login($login):bool {
        $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
        if($connection) {
            try {
                $result = mysqli_query($connection, "SELECT login FROM auth WHERE login = '$login'");
                mysqli_close($connection);
            }
            catch(Throwable) {
                mysqli_close($connection);
                return false;
            }
            if($result) 
                foreach($result as $row) {
                    if($row['login'] == "$login") return true;
                }
        }
        return false;
    }

    function _validate_password($login, $password):bool {
        $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
        if($connection) {
            try {
                $result = mysqli_query($connection, "SELECT password FROM auth WHERE login = '$login'");
                mysqli_close($connection);
            }
            catch(Throwable) {
                mysqli_close($connection);
                return false;
            }
            if($result)
                foreach($result as $row) {
                    if($row['password'] == "$password") return true;
                }
        }
        return false;
    }

    function _return_last_session($hash):bool {
        $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
        if($connection) {
            try {
                $result = mysqli_query($connection, "SELECT hash FROM auth WHERE hash = '$hash'");
                mysqli_close($connection);
            }
            catch(Throwable) {
                mysqli_close($connection);
                return false;
            }
            if($result)
                foreach($result as $row) {
                    if($row['hash'] == "$hash") return true;
                }
        }
        return false;
    }

    function _get_id($login, $password):string|bool {
        $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
        if($connection) {
            try {
                $result = mysqli_query($connection, "SELECT login, hash FROM auth WHERE login = '$login'");
                mysqli_close($connection);
            }
            catch(Throwable) {
                mysqli_close($connection);
                return false;
            }
            if($result) 
                foreach($result as $row) {
                    if($row['login'] == "$login") return $row['hash'];
                }
        }
        return false;
    }

    function _define_admin($hash):bool {
        $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
        if($connection) {
            $result = mysqli_query($connection, "SELECT hash FROM auth WHERE login = 'ReijiAkkerman'");
            mysqli_close($connection);
        }
        foreach($result as $row) {
            if($row['hash'] == "$hash") return true;
        }
        return false;
    }

    function _unset_all_cookies() {
        setcookie('id', '', time() - 3600);
    }