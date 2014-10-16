<?php
    $opcao = $_POST['tipoCRUD'];
    switch($opcao)
    {
        case "C":
            $formulario = "<h3>CRIAR</h3>
                <form action='create.php' method='POST'>
                    TIA: <input type='text' name='tia'/><br/>
                    NOME: <input type='text' name='nome'/><br/>
                    NOTA: <input type='text' name='nota'/><br/>
                    <input type='submit' value='INSERIR'/>
                </form>";
        break;
        
                
        case "R":
            $formulario = "<h3>BUSCAR</h3>
                <form action='read.php' method='POST'>
                    <input type='submit' value='BUSCAR'/>
                </form>";
        break;
        
        case "U":
            $formulario = "<h3>ATUALIZAR</h3>
                <form action='update.php' method='POST'>
                    TIA: <input type='text' name='tia'/><br/>
                    NOME: <input type='text' name='nome'/><br/>
                    NOTA: <input type='text' name='nota'/><br/>
                    <input type='submit' value='ATUALIZAR'/>
                </form>";
        break;
        
        case "D":
           $formulario = "<h3>APAGAR</h3>
                <form action='delete.php' method='POST'>
                    TIA: <input type='text' name='tia'/><br/>
                    <input type='submit' value='REMOVER'/>
                </form>";
        break; 
    }
    echo $formulario;

?>