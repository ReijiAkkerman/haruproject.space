<!DOCTYPE html>
<html>
    <head>
        <?php require_once "often/head.php" ?>
    </head>
    <body>
        <main class="Contents">
            <div class="w_ContentsBlock">
                <div class="ContentsBlock">
                    <form action="" method="POST">
                        <div class="ContentsBlockField">
                            <h6>Логин</h6>
                            <input type="text" name="login" autocomplete="off">
                        </div>
                        <div class="ContentsBlockField">
                            <h6>Пароль</h6>
                            <input type="password" name="password" autocomplete="off">
                        </div>
                        <button class="button" id="login" onclick="_changeAction(this.id);">Войти</button>
                        <button class="button" id="registration" onclick="_changeAction(this.id);">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
            <div class="w_ContentsBlock">
                <div class="ContentsBlock">
                    <h5>Зарегистрируйтесь или войдите,<br>чтобы получить доступ к ресурсам проекта </h5>
                </div>
            </div>
        </main>
        <script src="js/enter_buttons.js"></script>
    </body>
</html>