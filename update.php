<?php
  // conctando ao BD
  include "conecta_mysql.php";

  $nome = $_POST['nome'];
  $tia = $_POST['tia'];
  $nota = $_POST['nota'];
  
  // executando a operação de SQL
  $resultado = mysqli_query($conexao, "UPDATE alunos SET nome='".$nome."', nota=".$nota." WHERE tia=".$tia) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

  if($resultado === TRUE){
	echo "<br/>Usuário atualizado com sucesso!";
  } else {
        echo "<br/>Erro na atualização!";
  }
  // fechamento da conexão   
  mysqli_close($conexao);
?>
