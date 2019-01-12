<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css" >
        <link rel="stylesheet" href="../css/personalisado.css" >

        <title>AQUAFIT</title>
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
                <div class="container">

                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Cadastro</h5>
                                <blockquote class="blockquote text-center">
                                    <a type="button" class="btn btn-primary btn-lg btn-block" href="../Visao/cadAlunos.php">Cadastrar Aluno</a>
                                    <a type="button" class="btn btn-primary btn-lg btn-block" href="../Visao/cadTurmas.php">Cadastrar Turma</a>
                                    <a type="button" class="btn btn-primary btn-lg btn-block" href="../Visao/cadAtividade.php">Nova atividade</a>
                                    <a type="button" class="btn btn-primary btn-lg btn-block" href="../Visao/cadPagamentos.php">Pagamentos</a>

                                </blockquote>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Consulta</h5>
                                <blockquote class="blockquote text-center">
                                    <a type="button" class="btn btn-primary btn-lg btn-block" href="../Visao/listaTurmas.php">Turmas</a>
                                    <a type="button" class="btn btn-primary btn-lg btn-block" href="../Visao/listaPagamentos.php">Pagamentos</a>
                                    <a type="button" class="btn btn-primary btn-lg btn-block" href="../Visao/listaAlunos.php">Alunos</a>
                                    <a type="button" class="btn btn-primary btn-lg btn-block" href="../Visao/listaAtividades.php">Atividades</a>
                                </blockquote>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
    </body>
</html>