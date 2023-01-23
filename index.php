<?php
    require_once "app/core/calendar.php";
    require_once "app/core/auth.php";

    // $path = [];
    // $path[1] = 'scheduler';
    // $login = 'ReijiAkkermannn';
    // $password = 'Yasuraokahanabi3';
    // $id = '1';
    // $validation = 1;

    $path = explode('/', $_SERVER['REQUEST_URI']);
    switch($path[1]) {
        case '':
            if(isset($_COOKIE['id']))
            header("Location: scheduler");
            else
            include "app/view/enter.php";
            break;
        case 'scheduler':
            calendar_default();

            if(isset($_COOKIE['id']))
                $id = $_COOKIE['id'];
            if(isset($id) && ($id != null && $id != false))
                include "app/view/scheduler.php";
            else header("Location: error");
        break;
        case 'sort':
            exec('./a.out');
            $fd = fopen('NW.txt', 'r') or $error_exec = 'не удалось открыть файл NW.txt';
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
            $fd = fopen('TNW.txt', 'r') or $error_exec = 'не удалось открыть файл TNW.txt';
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
        case 'date':
            header("Location: scheduler");
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
    }
?>