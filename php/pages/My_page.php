<!DOCTYPE html>
<html>
    <head>
        <?php
            include "../common/head.html";
        ?>
    </head>
    <body>
        <?php
            if(isset($error)) {
                switch($error) {
                    case 1:
                        include "error/1.php";
                        break;
                    case 2:
                        include "error/2.php";
                        break;
                    case 3:
                        include "error/3.php";
                        break;
                    case 4:
                        include "error/4.php";
                        break;
                    case 5:
                        include "error/5.php";
                        break;
                }
            }
            else if (isset($enter_access)) {
                include "../common/header.html";
                include "../pages/content/My_page/main_content.php";
            }
            else
                include "error/0.php";
        ?>
    </body>
</html>