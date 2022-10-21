<!DOCTYPE html>
<html>
    <?php
        include "more_usable/head.php";
    ?>
    <body>
        <?php
            include "more_usable/header.php";
        ?>
        <section class="articles">
            <form class="content_block">
                <div class="subblock">
                    <label for="LogIn">Имя пользователя</label>
                    <input type="text" name="LogIn" class="field">
                    <label for="Password">Пароль</label>
                    <input type="password" name="password" class="field">
                    <button id="registration">Войти</button>
                </div>
            </form>
        </section>
        <?php
            include "more_usable/footer.php";
        ?>
    </body>
</html>