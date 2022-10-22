<?php
    $validation = true;
    $login;
    $password;
    if(isset($_POST["login"]))
        $login = $_POST["login"];
    if(isset($_POST["password"]))
        $password = $_POST["password"];
        echo "login = $login<br>password = $password";
    // if(!$login)
    //     $validation = false;
    // if(!$password)
    //     $validation = false;
    // if($validation == false)
    //     exit(1);
?>