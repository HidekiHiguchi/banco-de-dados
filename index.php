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
        
        <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
</style>
        
        
        <table class="tg">
  <tr>
    <th class="tg-s6z2">Tia</th>
    <th class="tg-031e">Nome</th>
    <th class="tg-031e">Nota</th>
    <th class="tg-031e">Idade</th>
    <th class="tg-031e"><a href="crud.php?tipo_crud=C">Novo</a></th>
  </tr>
  <tr>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><a href="crud.php?tipo_crud=U&tia=XXX">E</a><a href="crud.php?tipo_crud=D&tia=XXX"> X</a></td>
  </tr>
  <tr>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><a href="crud.php?tipo_crud=U&tia=XXX">E</a><a href="crud.php?tipo_crud=D&tia=XXX"> X</a></td>
                            
       //紛らわしい
      
  </tr>
</table>
        
        
    </body>
</html>
