<!DOCTYPE html>
<html>
    <?php
        include "scripts/index/head.php";
    ?>
    <body>
        <!-- <?php
            include "scripts/index/header.php";
        ?> -->
        <section class="articles">
            <form class="content_block">
                <div class="subblock">
                    <label for="LogIn">Имя пользователя</label>
                    <input type="text" name="LogIn" class="field">
                    <label for="Password">Пароль</label>
                    <input type="password" name="password" class="field">
                    <button id="registration">Зарегистрироваться</button>
                </div>
            </form>
            <article class="content_block">
                <div class="subblock">
                    <h2>
                        Зарегистрируйтесь, чтобы получить доступ к ресурсам проекта.
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
            <article class="content_block">
                <div class="subblock">
                    <h2>Войдите, если вы уже имеете аккаунт</h2>
                    <form action="Log_In.php">
                        <label for="Login">Имя пользователя</label>
                        
                    </form>
                </div>
            </article>
        </section>
        <?php
            include "scripts/footer.php";
        ?>
    </body>
</html>