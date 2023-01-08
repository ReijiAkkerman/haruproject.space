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
            <a href="scheduler"><div>MAIN</div></a>
        </aside>
        <main>
            <h1><?php if(isset($error_load)) echo $error_load; if(isset($error_name)) echo "<br>$error_name" ?></h1>
            <form action="load" method="post" enctype="multipart/form-data">
                <h3>NW.txt</h3>
                <input type="file" name="file1"><br>
                <h3>TNW.txt</h3>
                <input type="file" name="file2"><br><br><br>
                <button name="submit" value="submit">Upload File</button>
            </form>
        </main>
    </body>
</html>