<!DOCTYPE html>
<html>
    <head>
        <?php
            if($_POST['pointer'] == 'registration') include "Core/Loging.php";
            else if($_POST['pointer'] == 'login') include "Core/Input.php";
            
            include "more_usable/head.php";
        ?>
    </head>
    <body>
        <?php
            include "more_usable/header.php";
        ?>
        <section class="articles">
            <?php
                include "Core/Main_content.php";
            ?>
        </section>
        <?php
            include "more_usable/footer.php";
        ?>
    </body>
</html>