<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <aside class="menu">
            <a href="sort"><div>SORT</div></a>
            <a href="load"><div>LOAD</div></a>
        </aside>
        <section>
        <form action="load" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload">
            <button name="submit" value="submit">Upload File</button>
        </form>
        </section>
    </body>
</html>