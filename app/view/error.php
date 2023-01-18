<!DOCTYPE html>
<html>
    <head>
        <?php include "often/head.php" ?>
    </head>
    <body>
        <main class="Contents">
            <div class="w_ContentsBlock">
                <div class="ContentsBlock">
                    <h5>Увы, что-то пошло не так (((</h5>
                    <p><?= var_dump($id) ?></p>
                    <p><?= var_dump($_COOKIE['id']) ?></p>
                </div>
            </div>
        </main>
    </body>
</html>