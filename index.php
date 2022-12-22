<?php
    $path = explode('/', $_SERVER['REQUEST_URI']);
    switch($path[1]) {
        case 'read':
            $fd = fopen('NW.txt', 'r') or die('не удалось открыть файл NW.txt');
            $count = 0;
            while(!feof($fd)) {
                $NW[$count] = fgets($fd);
                $count++;
            }
            fclose($fd);
            $count = 0;
            $fd = fopen('TNW.txt', 'r') or die('не удалось открыть файл TNW.txt');
            while(!feof($fd)) {
                $TNW[$count] = fgets($fd);
                $count++;
            }
            fclose($fd);
            $amount = $count;
            $count = 0;
            break;
        case 'sort':
            exec('./a.out');
            break;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <aside class="download">
            <input type="file">
        </aside>
        <aside class="menu">
            <a href="read"><div>READ</div></a>
            <a href="sort"><div>SORT</div></a>
            <button id="next" type="button">NEXT</button>
        </aside>
        <section>
            <div id="english">
                <?php 
                    if(isset($amount))
                    for($i = 0; $i < $amount; $i++) {
                        echo "<pre>$NW[$i]</pre>";
                    }
                ?>
            </div>
            <div id="russian">
                <?php 
                    if(isset($amount))
                    for($i = 0; $i < $amount; $i++) {
                        echo "<pre>$TNW[$i]</pre>";
                    }
                ?>
            </div>
        </section>
        <script src="next.js"></script>
        <script src="back.js"></script>
    </body>
</html>