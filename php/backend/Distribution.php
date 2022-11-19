<?php
    // (string)$login = "Reiji";
    // (int)$id = 1;
    // (string)$var = "Organizer";
    if(isset($_GET["var"])) {
        (string)$var = $_GET["var"];
    setcookie("var", $var, time() + 3600*24*30);
    }
    if(isset($_POST["Enter"])) {
        if($_POST["Enter"] === "Registration") include "../backend/Registration.php";
        else if($_POST["Enter"] === "LogIn") include "../backend/LogIn.php";
    }
    else include "are_cookies.php";
    $connection = mysqli_connect('localhost', 'UsersDistributor', '78737873', 'Users');
    $mysql_command = "SELECT * FROM users";
    $result = mysqli_query($connection, $mysql_command);
    foreach($result as $row) {
        if($row["login"] === $login) 
            if($row["id"] == $id) {
                $enter_access = 1;
                break;
            }
    }
    if($enter_access = 1) {
        switch((string)$var) {
            case "My_page":
                include "../pages/My_page.php";
                break;
            case "Organizer":
                include "../pages/Organizer.php";
        }
    }
    else {
        include "../../index.html";
    }
?>