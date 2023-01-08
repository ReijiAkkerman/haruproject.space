<!DOCTYPE html>
<html>
    <head>
        <?php require_once "often/head.php" ?>
    </head>
    <body>
        <section class="Contents">
            <div class="w_ContentsBlock">
                <div class="ContentsBlock">
                    <form action="scheduler" method="POST">
                        <div class="ContentsBlockField">
                            <h6>Логин</h6>
                            <input type="text" name="login" autocomplete="off">
                        </div>
                        <div class="ContentsBlockField">
                            <h6>Пароль</h6>
                            <input type="password" name="password" autocomplete="off">
                        </div>
                        <button class="button" id="login">Войти</button>
                        <button class="button" id="registration">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
            <div class="w_ContentsBlock">
                <div class="ContentsBlock">
                    <h5>Зарегистрируйтесь или войдите,<br>чтобы получить доступ к ресурсам проекта </h5>
                </div>
            </div>
        </section>
    </body>
</html>