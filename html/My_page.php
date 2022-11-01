<!DOCTYPE html>
<html>
    <head>
        <?php
            $CONNECTION = 1;
            if($_POST['pointer'] == 'registration') include "Core/Loging.php";
            else if($_POST['pointer'] == 'login') include "Core/Input.php";
            else include "Core/validation.php";
            if(!$CONNECTION) include "more_usable/head.php";
        ?>
    </head>
<?php
    if(!$CONNECTION) include "Core/Resources/body.php";
?>
</html>