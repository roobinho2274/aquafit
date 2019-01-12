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
        <title>Lista Aluno</title>

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
            <div class="jumbotron">
                <div class="text-center ">
                    <h3>LISTA DE ALUNOS</h3>
                </div>
                <div class = "container" style="background-color: buttonface" >
                    <?PHP
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>

                    <table class="table table-striped">

                       <thead class="thead-dark">
                            <th>COD</th><th>NOME</th><th>TELEFONE</th><th>DATA DE NASCIMENTO</th><th>---</th><th>---</th><th>---</th>

                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * from aluno";
                            $dados = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_assoc($dados)) {

                                echo '<tr><td>' . $row['cod'] . '</td><td>' . $row['nome'] . '</td><td>' . $row['telefone'] . '</td><td>' . $row['data_nascimento'];
                                echo '<td><form method="post" action = "../Visao/detalheAluno.php"><input type="hidden" value="' . $row['cod'] . '" name = "cod"><input type = "submit" value="Detalhe" class="btn-success"></form></td>';
                                echo '<td><form method="post" action = "../Visao/alterarAluno.php"><input type="hidden" value="' . $row['cod'] . '" name = "cod"><input type = "submit" value="Alterar" class="btn-success"></form></td>';
                                echo '<td><form method="post" action = "deleteAluno.php"><input type="hidden" value="' . $row['cod'] . '" name = "cod"><input type = "submit" value="Deletar" class="btn-success"></form></td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                    <br/>
                    <a class="btn btn-secondary strong form-control" style="width: 10%; margin-left: 45%" href="../Visao/home.php" role="button">Voltar</a>

                    <script src="../js/jquery-3.3.1.slim.min.js"></script>
                    <script src="../js/popper.min.js"></script>
                    <script src="../js/bootstrap.min.js"></script>
                </div>
            </div>
        </main>
    </div>
</body>
</html>