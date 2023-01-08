<?php
    require_once "app/control/calendar.php";

    $path = explode('/', $_SERVER['REQUEST_URI']);
    switch($path[1]) {
        case '':
            include "app/view/enter.php";
            break;
        case 'scheduler':
            include "app/view/scheduler.php";
            break;
        case 'sort':
            exec('./a.out');
            $fd = fopen('NW.txt', 'r') or die('не удалось открыть файл NW.txt');
            $count = 0;
            while(!feof($fd)) {
                $NW[$count] = fgets($fd);
                $count++;
            }
            fclose($fd);
            $count = 0;
            $fd = fopen('TNW.txt', 'r') or die('не удалось открыть файл TNW.txt');
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
    }
?>