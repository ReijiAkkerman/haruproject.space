<!DOCTYPE html>
<html>
    <head>
        <?php require_once "often/head.php" ?>
    </head>
    <body>
        <header>
            <ul class="commonInfo">
                <li>Уровень: 0</li>
                <li>Самореализация: 15%</li>
            </ul>
            <ul class="commonMoney">
                <li id="Finances">Финансы: 3000 rub</li>
                <li id="Debts">Долги: 200000 rub</li>
            </ul>
            <ul class="commonTasks">
                <li>Английский язык</li>
            </ul>
            <ul class="commonSkills">
                <li>Английский язык</li>
            </ul>
        </header>
        <nav class="Menu">
            <ul>
                <a href="#"><li>Английский язык</li></a>
                <a href="#"><li>Планировщик</li></a>
                <a href="#"><li>Цели</li></a>
            </ul>
        </nav>
        <main class="mainWindow">
            <div class="Detailes">
                <div class="DetailesToolbar">
                    <button class="DetailesToolbarItem">Кн-ка</button>
                    <button class="DetailesToolbarItem">Кн-ка</button>
                    <button class="DetailesToolbarItem">Кн-ка</button>
                </div>
            </div>
            <div class="Calendar">
                <?php for($i = 0; $i < 56; $i++) { ?>
                    <button class="item" ></button>
                <?php } ?>
            </div>
        </main>
        <footer>

        </footer>
        <script src=""></script>
    </body>
</html>