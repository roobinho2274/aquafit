<?php

session_start(); //Inicializa a sessão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "aquafit";

//Criar a conexão
$con = mysqli_connect($servidor, $usuario, $senha, $dbname);

//Testa Conexão
if ($con) {
    if (isset($_SESSION['ativa'])) {
        unset($_SESSION['ativa']);
    }
    $_SESSION['ativa'] = 1;
}else{
    if (isset($_SESSION['ativa'])) {
        unset($_SESSION['ativa']);
    }
    $_SESSION['ativa'] = 0;
}
?>