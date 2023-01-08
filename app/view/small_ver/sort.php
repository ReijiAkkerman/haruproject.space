<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/small_ver/style.css">
    </head>
    <body>
        <aside class="menu">
            <a href="sort"><div>SORT</div></a>
            <button id="next" type="button">NEXT</button>
            <a href="load"><div>LOAD</div></a>
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
        <script src="js/next.js"></script>
    </body>
</html>