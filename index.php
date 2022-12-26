<?php
    // $path = explode('/', $_SERVER['REQUEST_URI']);
    // switch($path[1]) {
    //     case 'sort':
    //         exec('./a.out');
    //         $fd = fopen('NW.txt', 'r') or die('не удалось открыть файл NW.txt');
    //         $count = 0;
    //         while(!feof($fd)) {
    //             $NW[$count] = fgets($fd);
    //             $count++;
    //         }
    //         fclose($fd);
    //         $count = 0;
    //         $fd = fopen('TNW.txt', 'r') or die('не удалось открыть файл TNW.txt');
    //         while(!feof($fd)) {
    //             $TNW[$count] = fgets($fd);
    //             $count++;
    //         }
    //         fclose($fd);
    //         $amount = $count;
    //         $count = 0;
    //         include "app/view/small_ver/sort.php";
    //         break;
    //     case 'load':
    //         if(isset($_POST['submit'])) {
    //             $target_dir = "./";
    //             $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    //             move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    //         }
    //         include "app/view/small_ver/load.php";
    //         break;
    // }
    // switch($path[1]) {
    //     case '':
    //         include "app/view/enter.php";
    //         break;
    // }
    include "app/view/scheduler.php";
?>