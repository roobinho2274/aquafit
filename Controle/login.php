<?php

//session_start();
//Inclui o arquivo que contém a conexão
include_once ("../conexao.php");
if (isset($_SESSION['ativa'])) {
    if ($_SESSION['ativa'] == 0) {
        $_SESSION['msn'] = "<div class='alert alert-danger' role='alert'> Falha na conexao com banco!</div>";
        // header('location: .../index.php');
    }

//Pega dos dados que vem de index.php atráves do metódo post usando filtro
    $usuario = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING);
//Chama função que verifica usuário no banco e retorna o tipo de usuário

    $query = "SELECT * FROM usuarios WHERE usuarios.login LIKE '" . $usuario .
            "' AND usuarios.senha LIKE '" . $senha . "'";

    echo $query;
    $result = mysqli_query($con, $query);
    $r = mysqli_fetch_assoc($result);
    if ($r == false) {
        $_SESSION['msn'] = "<div class='alert alert-danger' role='alert'> Usuário ou senha inválidos!</div>";
        header('location: ../index.php');
    } else {
        header('location: ../Visao/home.php');
    }
}