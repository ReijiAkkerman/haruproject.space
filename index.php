<?php
    require_once "app/core/calendar.php";
    require_once "app/core/auth.php";

    // $path[1] = 'scheduler';

    $path = explode('/', $_SERVER['REQUEST_URI']);
    switch($path[1]) {
        case '':
            if(isset($_COOKIE['id']))
                header("Location: scheduler");
            else
            include "app/view/enter.php";
            break;
        case 'scheduler':
            if(isset($_COOKIE['id']))
                $id = $_COOKIE['id'];
            if(isset($id) && ($id != null && $id != false)) {
                // $id = 'f030132eb2fad3a6a6b98f41ad24545a';
                $is_admin = _define_admin($id);
                include "app/control/view_calendar.php";
                // include "app/view/test.php";
                include "app/view/scheduler.php";
            }
            else header("Location: error");
        break;
        case 'sort':
            exec('./a.out');
            try {
                $fd = fopen('NW.txt', 'r');
            }
            catch(Throwable) {
                $error_exec = 'не удалось открыть файл NW.txt';
            }
            if($fd == false) 
                $error_exec = 'не удалось открыть файл NW.txt';
            if(isset($error_exec)) {
                include "app/view/small_ver/error_sort.php";
                break;
            }
            $count = 0;
            while(!feof($fd)) {
                $NW[$count] = fgets($fd);
                $count++;
            }
            fclose($fd);
            $count = 0;
            try {
                $fd = fopen('TNW.txt', 'r');
            }
            catch(throwable) {
                $error_exec = 'не удалось открыть файл TNW.txt';
            }
            if($fd == false) 
                $error_exec = 'не удалось открыть файл TNW.txt';
            if(isset($error_exec)) {
                include "app/view/small_ver/error_sort.php";
                break;
            }
            while(!feof($fd)) {
                $TNW[$count] = fgets($fd);
                $count++;
            }
            fclose($fd);
            $amount = $count;
            $count = 0;
            include "app/view/small_ver/sort.php";
            break;
        case 'load':
            if(isset($_POST['submit'])) {
                if(!empty($_FILES["file1"]["name"])) {
                    $label1 = 0;
                    $filename1 = basename($_FILES["file1"]["name"]);
                    $label2 = 0;
                    if($filename1 != 'NW.txt') $label2 = 1;
                }
                else $label1 = 1;
                if(!empty($_FILES["file2"]["name"])) {
                    $filename2 = basename($_FILES["file2"]["name"]);
                    $label2 = 0;
                    if($filename2 != 'TNW.txt') $label2 = 1;
                }
                else $label1 = 1;
                if($label1 == 1) $error_load = "Файл не передан!!!";
                if($label2 == 1) $error_name = "Имя одного из файлов не соответствует указанному!!!";
                if(($label1 == 0) && ($label2 == 0)) {
                    $target_dir = "./";
                    $target_file1 = $target_dir . $filename1;
                    $target_file2 = $target_dir . $filename2;
                    move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file1);
                    move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file2);
                }
            }
            include "app/view/small_ver/load.php";
            break;
        case 'registration':
            if(isset($_POST['login']))
                $login = $_POST['login'];
            if(isset($_POST['password']))
                $password = $_POST['password'];
            if(isset($login) && isset($password)) 
                if(!empty($login) && !empty($password)) {
                    $is_login = _validate_login($login);
                    if($is_login)
                        $validation = false;
                    else {
                        $temp = (string)time();
                        $id_str = $login . $temp;
                        $id = md5($id_str);
                        $validation = _registration($login, $password, $temp, $id);
                    }
                }
                else
                    header("Location: error");
            if($validation) {
                setcookie('id', $id, time() + (3600 * 24 * 30));
                header("Location: scheduler");
            }
            else header("Location: error");
            break;
        case 'login':
            if(isset($_POST['login']))
                $login = $_POST['login'];
            if(isset($_POST['password']))
                $password = $_POST['password'];
            if(isset($login) && isset($password))
                if(!empty($login) && !empty($password)) {
                    $is_login = _validate_login($login);
                    if($is_login)
                        try {
                            $validation = _validate_password($login, $password);
                        }
                        catch(Throwable) {
                            header("Location: error");
                        }
                    else
                        $validation = false;
                    if($validation) {
                        $id = _get_id($login, $password);
                        setcookie('id', $id, time() + (3600 * 24 * 30));
                        header("Location: scheduler");
                    }
                    else
                        header("Location: error");
                }
            else
                header("Location: error");
            break;
        case 'error':
            include "app/view/error.php";
            break;
        case 'quit':
            _unset_all_cookies();
            header("Location: /");
            break;
        case 'handle':
            if($_POST['header'])
                $header = $_POST['header'];
            if($_POST['description'])
                $description = $_POST['description'];
            if($_POST['checkbox'])
                $checkbox = $_POST['checkbox'];
            if($checkbox == 'on') $checkbox = 1;
            else $checkbox = 0;
            if($_POST['hour_start'])
                $hour_start = $_POST['hour_start'];
            if($_POST['minute_start'])
                $minute_start = $_POST['minute_start'];
            if($_POST['hour_end'])
                $hour_end = $_POST['hour_end'];
            if($_POST['minute_end'])
                $minute_end = $_POST['minute_end'];
            if($_POST['year_start'])
                $year_start = $_POST['year_start'];
            if($_POST['month_start'])
                $month_start = $_POST['month_start'];
            if($_POST['day_start'])
                $day_start = $_POST['day_start'];
            if($_POST['year_end'])
                $year_end = $_POST['year_end'];
            if($_POST['month_end'])
                $month_end = $_POST['month_end'];
            if($_POST['day_end'])
                $day_end = $_POST['day_end'];
            if($_COOKIE['id'])
                $id = $_COOKIE['id'];
            
            $login = _get_login($id);

            $start_timelabel = (string)mktime($hour_start, $minute_start, 0, $month_start, $day_start, $year_start);
            $end_timelabel = (string)mktime($hour_start, $minute_start, 0, $month_start, $day_start, $year_start);
            $creation_timelabel = (string)time();
            _add_entry($header, $description, $start_timelabel, $end_timelabel, $creation_timelabel, $checkbox, $login);

            $temp_str = _send_entry($login);
            echo $temp_str;
            break;
        case 'test':
            echo "hello";
            break;
    }