<?php
session_start();

include_once ("../conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css" >
        <link rel="stylesheet" href="../css/personalisado.css" >
        <title>Aluno</title>

    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color: blue">
                <div class="container">

                    <a class="navbar-brand" href="../Visao/home.php"><img src="../imagens/logo.jpg" class="img-fluid "alt="Responsive image" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="../index.php" class="btn btn-secondary btn-lg " tabindex="-1" role="button" aria-disabled="true">Sair</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main role="main">


            <div class = "container" style="background-color: buttonface" >


                <?php
                $codigo = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_NUMBER_INT);
                $sql = "SELECT * from aluno WHERE cod = $codigo";
                $dados = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($dados);
                ?>
                <div class="jumbotron">
                    <h1 class="display-7">DADOS DO ALUNO</h1>
                    <p class="lead">
                        <b>NOME:</b> <?PHP echo $row['nome'] ?><br>
                        <b>CPF:</b> <?PHP echo $row['cpf'] ?><br>
                        <b>DATA DE NASCIMENTO:</b> <?php echo $row['data_nascimento'] ?><br>
                        <b>TELEFONE:</b> <?PHP echo$row['telefone'] ?><br><br><hr>
                    <b>ENDEREÇO</b><br>
                    <b>RUA:</b><?PHP echo $row['rua'] ?> <b>Nº:</b> <?PHP echo $row['numero'] ?> 
                    <b>COMPLEMENTO: </b><?PHP echo $row['complemento'] ?> <br>
                    <b>BAIRRO: </b><?PHP echo $row['bairro'] ?> <br>
                    <b>CEP:</b> <?PHP echo $row['bairro'] ?> <b>CIDADE:</b><?PHP echo $row['cidade'] ?> 
                    <b>UF:</b> <?PHP echo $row['estado'] ?><br>
                    </p>
                    <hr class="my-4">
                    <p>
                        <?php
                        if ($row['modalidade'] == 1)
                            echo "=> Já praticou " . $row['tempoFrequente'] . " meses de natação na academia " . $row['local'] . " no perído de "
                            . $row['periodo'];
                        else if ($row['modalidade'] == 2)
                            echo "=> Já praticou " . $row['tempoFrequente'] . " meses de hidroginástica na academia " . $row['local'] . " no perído de "
                            . $row['periodo'];
                        if ($row['modalidade'] == 1)
                            echo"<br><br>=> O aluno está em nível de Adaptação em Natação!";
                        else if ($row['modalidade'] == 2)
                            echo"<br><br>=> O aluno está em nível de Aprendizagem Técnica em Natação!";
                        else if ($row['modalidade'] == 3)
                            echo"<br><br>=> O aluno está em nível de Aperfeiçoamento Técnico em Natação!";
                        if ($row['motivo'] == 1)
                            echo"<br><br>=> Objetiva aprender a nadar!";
                        else if ($row['motivo'] == 2)
                            echo"<br><br>=> Se inscreveu com aconcelhamento médico!";
                        else if ($row['motivo'] == 3)
                            echo"<br><br>=> Objetiva condicionamento físico!";
                        ?>
                    </p>

                </div>                          

                <a class="btn btn-secondary strong form-control" style="width: 10%; margin-left: 45%" href="../Visao/listaAlunos.php" role="button">Voltar</a>

                <script src="../js/jquery-3.3.1.slim.min.js"></script>
                <script src="../js/popper.min.js"></script>
                <script src="../js/bootstrap.min.js"></script>
            </div>
        </main>
    </div>
</body>
</html>