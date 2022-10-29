<!DOCTYPE html>
<html>
    <head>
        <?php
            include "more_usable/head.php";
        ?>
    </head>
    <body>
        <?php
            include "more_usable/header.php";
        ?>
        <section class="articles">
            <form class="content_block">
                <div class="subblock">
                    <label for="LogIn">Имя пользователя</label>
                    <input type="text" name="login" class="field">
                    <label for="Password">Пароль</label>
                    <input type="password" name="password" class="field">
                    <button class="registration" id="login_btn">Войти</button>
                </div>
            </form>
        </section>
        <?php
            include "more_usable/footer.php";
        ?>
    </body>
</html>