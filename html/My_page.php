<!DOCTYPE html>
<html>
    <head>
        <?php
            if($_POST['pointer'] == 'registration') include "Core/Loging.php";
            else if($_POST['pointer'] == 'login') include "Core/Input.php";
            else include "Core/validation.php";
            include "more_usable/head.php";
        ?>
    </head>
<?php
    include "Core/Resources/body.php";
?>
</html>