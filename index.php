<!DOCTYPE html>
<html>
    <?php
        include "html/more_usable/index/head.php";
    ?>
    <body>
        <section class="articles" id="start_page">
            <form class="content_block">
                <div class="subblock">
                    <label for="LogIn">Имя пользователя</label>
                    <input type="text" name="LogIn" class="field">
                    <label for="Password"><a href="#" onclick="return show_hide_password(this);">Пароль</a></label>
                    <input type="password" name="password" class="field" id="view_passwd">
                    <button id="registration">Зарегистрироваться</button>
                    <button id="registration" href="html/My_page.php"><a href="html/My_page.php">Войти</a></button>
                </div>
            </form>
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