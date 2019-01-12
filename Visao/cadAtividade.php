
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css" >
        <link rel="stylesheet" href="../css/personalisado.css" >

        <title>Cadastro Atividade</title>

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
                    <h3>CADASTRO DE NOVAS ATIVIDADES</h3>
                </div>
                <div class = "container" style="background-color: #CCFFFF" >
                    <?PHP
                    if (isset($_SESSION['msn'])) {
                        echo $_SESSION['msn'];
                        unset($_SESSION['msn']);
                    }
                    ?>
                    <form action="../Controle/cadAtividade.php" method="POST">
                        <br/>
                        <div class="text-center"><strong>INFORMAÇÕES</strong></div>
                        <br>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">*Descrição :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required  name="descricao">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">*Máximo de alunos :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required  name="nAl">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">CADASTRAR</button>
                        <input class="btn btn-primary" type="reset" value="LIMPAR">
                    </form>
                </div>
            </div>
        </main>
        <a href="../Visao/home.php"<button class="btn btn-primary">VOLTAR</button></a>
        <script src="../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>