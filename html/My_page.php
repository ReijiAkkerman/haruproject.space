<!DOCTYPE html>
<html>
    <head>
        <?php
            if($_POST['pointer'] == 'registration') include "../html/Core/Loging.php";
            else if($_POST['pointer'] == 'login') include "../html/Core/Input.php";
            include "more_usable/head.php";
        ?>
    </head>
    <body>
        <?php
            include "more_usable/header.php";
        ?>
        <section>
            <?php
                include "Core/Main_content.php";
            ?>
        </section>
        <?php
            include "more_usable/footer.php";
        ?>
    </body>
</html>