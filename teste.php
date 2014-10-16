<?php
  // conctando ao BD
  include "conecta_mysql.php";
  
  // executando a operação de SQL
  $resultado = mysqli_query($conexao, "SELECT * from alunos") or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
  if($resultado){
      while($row = mysqli_fetch_array($resultado) ){
         echo $row["tia"]." - ".$row["nome"]." - ".$row["nota"]."<br/>";
      }
  }
  // fechamento da conexão   
  mysqli_close($conexao);
?>
