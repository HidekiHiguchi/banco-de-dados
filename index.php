<!DOCTYPE html>
<html>
    <head>
        <title>CRUD</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="crud.php" method="POST">
            <input type="radio" name="tipoCRUD" value="C" checked/>Create<br/>
            <input type="radio" name="tipoCRUD" value="R"/>Read<br/>
            <input type="radio" name="tipoCRUD" value="U"/>Update<br/>
            <input type="radio" name="tipoCRUD" value="D"/>Delete<br/>
            <input type="submit" value="START"/>
        </form>
    </body>
</html>