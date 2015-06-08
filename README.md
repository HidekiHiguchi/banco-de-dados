Banco de dados 
========

* Criar um arquivo banco.sql que cria a tabela alunos com os atributos descritos abaixo:

tia  | nome | nota | idade |
-----|------|------|-------|

* Modificar a página index para que ela mostre uma página conforme o exemplo abaixo:

Tia | Nome | Nota | Idade | **NOVO** |
----|------|------|-------|----------|
123 | Joao | 10   | 23    | **E** **X** |
456 | Maria | 10   | 23    | **E** **X** |

Onde **NOVO** é um link para a página `crud.php?tipo_crud=C`
**E** é um link para a página `crud.php?tipo_crud=U&tia=XXX` onde XXX é o tia do aluno da linha, no caso do Joao, o link seria `crud.php?tipo_crud=U&tia=123`
e **X** é um link para a página `crud.php?tipo_crud=D&tia=XXX` onde XXX é o tia do aluno da linha, no caso do Joao, o link seria `crud.php?tipo_crud=D&tia=123`

* Modificar a página crud.php para permitir que os parâmetros listados acima sejam passados via URL ao invés de formulário
* Modificar a página crud.php para preencher automaticamente os dados do aluno quando for o usuário for atualizá-lo
* Modificar a página crud.php para incluir o campo idade
* Modificar a página crud.php para remover o aluno sem necessitar confirmação e retornar a index.php após isso.
* Modificar todas as páginas que forem necessárias para garantir o funcionamento correto em função das mudanças anteriores.





