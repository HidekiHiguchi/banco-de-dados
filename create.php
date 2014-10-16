<?php
  // conctando ao BD
  include "conecta_mysql.php";

  $nome = $_POST['nome'];
  $tia = $_POST['tia'];
  $nota = $_POST['nota'];
  
  // executando a operação de SQL
  $resultado = mysqli_query($conexao, "INSERT INTO alunos(nome, tia, nota) VALUES ('".$nome."',".$tia.",".$nota.")") or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

  if($resultado === TRUE){
	echo "<br/>Usuário inserido com sucesso!";
  } else {
        echo "<br/>Erro na inserção!";
  }
  // fechamento da conexão   
  mysqli_close($conexao);
?>
