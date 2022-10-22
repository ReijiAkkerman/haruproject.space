<!DOCTYPE html>
<html>
    <?php
        include "html/more_usable/index/head.php";
    ?>
    <body>
        <section class="articles" id="start_page">
            <div class="content_block">
                <div class="subblock">
                    <form action="html/My_page.php" method="POST">
                        <label for="login">Имя пользователя</label>
                        <input type="text" name="login" class="field" autocomplete="off">
                        <label for="Password"><a href="#" onclick="return show_hide_password(this);">Пароль</a></label>
                        <input type="password" name="password" class="field" id="view_passwd">
                        <button class="registration">Зарегистрироваться</button>
                    </form>
                    <form action="html/My_page.php" method="POST">
                        <input type="text" name="login" class="hidden">
                        <input type="text" name="password" class="hidden">
                        <button class="registration" id="login"><a href="html/My_page.php">Войти</a></button>
                    </form>
                </div>
            </div>
            <article class="content_block">
                <div class="subblock">
                    <h2>
                        Зарегистрируйтесь или войдите, чтобы получить доступ к ресурсам проекта.
                    </h2>
                    <h3>
                        После регистрации вам будут доступны следующие возможности:
                    </h3>
                    <ul>
                        <li>Удобный планировщик</li>
                        <li>Список дел</li>
                        <li>Личный дневник</li>
                        <li>Хранение личных информационных ресурсов</li>
                        <li>Использование открытых ресурсов других пользователей</li>
                    </ul>
                </div>
            </article>
        </section>
    </body>
</html>