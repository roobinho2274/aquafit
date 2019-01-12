<?php

session_start();
include_once ("..\conexao.php");


//Atribuindo valor recebido por POST aos variaveis
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$dataNasc = filter_input(INPUT_POST, 'dataNascimento');
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

$logradouro = filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_STRING);
$numeroresidencia = filter_input(INPUT_POST, 'numeroresidencia', FILTER_SANITIZE_NUMBER_INT);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);

$modalidade = filter_input(INPUT_POST, 'modalidade', FILTER_SANITIZE_STRING);
if ($modalidade == "")
    $modalidade = 0;
$tempo = filter_input(INPUT_POST, 'tempo', FILTER_SANITIZE_NUMBER_INT);
if ($modalidade == 0)
    $tempo = 0;
$onde = filter_input(INPUT_POST, 'onde', FILTER_SANITIZE_STRING);
if ($modalidade == 0)
    $onde = "nulo";
$periodo = filter_input(INPUT_POST, 'periodo', FILTER_SANITIZE_STRING);
if ($modalidade == 0)
    $periodo = "nulo";
$nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_NUMBER_INT);
if ($nivel == "")
    $nivel = 0;
$motivo = filter_input(INPUT_POST, 'motivo', FILTER_SANITIZE_NUMBER_INT);
if ($motivo == "")
    $motivo = 0;

//Monta a Query SQL que vai retornar o maior ID na tabela Aluno
$queryId = "SELECT MAX(cod) FROM aluno";

//Recebe através da Função executa o maior indice cadastrado em Disciplina
$r = mysqli_query($con, $queryId);
$idBd = mysqli_fetch_assoc($r);
echo $idBd['MAX(cod)'] . "<br><br><br>";
//Incrementa o valor recebido para realizar o novo cadastro
$id = $idBd['MAX(cod)'] + 1;
//Monta a Query de inserção no Banco com os dados do POST e o ID calculado na linha anterior
$query = "INSERT INTO `aluno` (`cod`, `nome`, `cpf`, `data_nascimento`, `telefone`,`rua`, `numero`,"
        . "`complemento`, `bairro`, `cidade`, `estado`, `cep`,`modalidade`, `tempoFrequente`, `local`,`periodo`, `nivel`, `motivo`) VALUES"
        . "('$id', '$nome', '$cpf', '$dataNasc', '$telefone','$logradouro', $numeroresidencia, '$complemento', '$bairro', "
        . "'$cidade', '$estado', '$cep', $modalidade, $tempo, '$onde','$periodo',$nivel, $motivo);";

echo $query;
echo "<br><br><br>";
$res = mysqli_query($con, $query);
echo "<br><br><br>";
if ($res) {
    echo $_SESSION['msn'] = "<div class='alert alert-success' role='alert'>Aluno inserido com sucesso</div>";
    header("Location: ../Visao/cadAlunos.php");
} else {
    echo mysqli_errno($con) . $_SESSION['msn'] = "<div class='alert alert-danger' role='alert'>Falha ao inserir o aluno</div>";
    header("Location: ../Visao/cadAlunos.php");
}
 