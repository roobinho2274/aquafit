<?php

session_start(); //Inicializa a sessão
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

        <title>Cadastro Aluno</title>

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
                    <h3>FORMULARIO PARA CADASTRO DE ALUNOs</h3>
                </div>
                <div class = "container" style="background-color: #CCFFFF" >
                    <?PHP
                    if (isset($_SESSION['msn'])) {
                        echo $_SESSION['msn'];
                        unset($_SESSION['msn']);
                    }
                    ?>
                    <form action="../Controle/cadAl.php" method="POST">
                        <br/>
                        <div class="text-center"><strong>INFORMAÇÕES PESSOAIS</strong></div>
                        <br>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">*NOME :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" required  name="nome">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">*CPF :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" required  name="cpf">
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">SEXO</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" value="Masculino">
                                        <label class="form-check-label" for="gridRadios1">
                                            MASCULINO
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" value="Feminino">
                                        <label class="form-check-label" for="gridRadios2">
                                            FEMININO
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" value="Outros">
                                        <label class="form-check-label" for="gridRadios2">
                                            OUTROS
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">*Data nascimento:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputEmail3" required  name="dataNascimento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ENDEREÇO</label>
                        </div>
                        <div class="form-group row">
                            <div class="col-10">
                                <input type="text" class="form-control" placeholder="LOGRADOURO" required name="logradouro">
                            </div>
                            <div class="col-2">
                                <input type="number" class="form-control" placeholder="NUMERO" required name="numeroresidencia">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="BAIRRO" required name="bairro">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="COMPLEMENTO"  name="complemento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="CIDADE" required name="cidade">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="CEP" required required name="cep">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" placeholder="UF" required name="estado">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">*TELEFONE :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" required name="telefone">
                            </div>
                        </div>
                        <hr>
                        <div class="text-center"><strong>INFORMAÇÕES FUNCIONAIS</strong></div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Já frequentou aula de natação ou hidroginástica?</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="modalidade" value="1">
                                        <label class="form-check-label" for="gridRadios1">
                                            Sim, Natação
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="modalidade" value="2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Sim, Hidroginástica
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="modalidade" value="0">
                                        <label class="form-check-label" for="gridRadios3">
                                            Não
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tempo em meses:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="tempo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Local(academia):</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="onde">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Em qual período(mes/ano):</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"name="periodo">
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Caso seja natação, qual seu nível?</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nivel" value="1">
                                        <label class="form-check-label" >
                                            Adaptação
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nivel" value="2">
                                        <label class="form-check-label">
                                            Aprendizagem Técnica
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nivel" value="3">
                                        <label class="form-check-label" >
                                            Aperfeiçoamento
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Motivo da inscrição?</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="motivo" value="1">
                                        <label class="form-check-label" >
                                            Aprender a nadar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="motivo" value="2">
                                        <label class="form-check-label">
                                            Concelho médico
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="motivo" value="3">
                                        <label class="form-check-label" >
                                            Condicionamento físico
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="motivo" value="4">
                                        <label class="form-check-label">
                                            Outros
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

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