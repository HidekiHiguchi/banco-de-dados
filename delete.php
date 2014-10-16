<?php
  // conctando ao BD
  include "conecta_mysql.php";

  $tia = $_POST['tia'];
  
  // executando a operação de SQL
  $resultado = mysqli_query($conexao, "DELETE FROM alunos WHERE tia=".$tia) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

  if($resultado === TRUE){
	echo "<br/>Usuário removido com sucesso!";
  } else {
        echo "<br/>Erro na remoção!";
  }
  // fechamento da conexão   
  mysqli_close($conexao);
?>
