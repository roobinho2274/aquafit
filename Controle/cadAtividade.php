<?php

include_once ("..\conexao.php");

//Atribuindo valor recebido por POST aos variaveis
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$numeroalunis = filter_input(INPUT_POST, 'nAl', FILTER_SANITIZE_NUMBER_INT);


//Monta a Query SQL que vai retornar o maior ID na tabela Aluno
$queryId = "SELECT MAX(codigo) FROM modalidade";

//Recebe através da Função executa o maior indice cadastrado em Disciplina
$r = mysqli_query($con, $queryId);
$idBd = mysqli_fetch_assoc($r);
echo $idBd['MAX(codigo)'] . "<br><br><br>";
//Incrementa o valor recebido para realizar o novo cadastro
$id = $idBd['MAX(codigo)'] + 1;
//Monta a Query de inserção no Banco com os dados do POST e o ID calculado na linha anterior
$query = "INSERT INTO `modalidade` (`codigo`, `descricao`, `qtdMaxAlunos`) VALUES ('$id', '$descricao', '$numeroalunis')";

echo $query;
echo "<br><br><br>";
$res = mysqli_query($con, $query);
echo "<br><br><br>";
if ($res) {
    echo mysqli_error($con) . $_SESSION['msn'] = "<div class='alert alert-success' role='alert'>Cadastrado com sucesso</div>";
    header("Location: ../Visao/home.php");
} else {
    echo "aqui2" . $_SESSION['msn'] = "<div class='alert alert-danger' role='alert'>Falha ao cadastrar</div>";
    header("Location: ../Visao/cadAtividade.php");
}
 