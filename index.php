<?php
session_start();
if(isset($_SESSION['msn']))
    {
    echo $_SESSION['msn'];
    unset($_SESSION['msn']);
    }
?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css" >

        <title>LOGIN</title>
    </head>
    <body>

        <div class = "container" >
            <h2 style="align-content: center">Login</h2>
            <form action="Controle/login.php" method="POST">
                <div class="form-group" >
                    <label >Usuário</label>
                    <input type="text" class="form-control" placeholder="Login" name = "user">
                    <small id="usurHelp" class="form-text text-muted">Atenção aos caracteres maiúsculos e minúsculos</small>
                </div>
                <div class="form-group">
                    <label >Senha</label>
                    <input type="password" class="form-control" placeholder="Password" name = "pwd">
                </div>
                <input type="submit" class="btn btn-success" value="ENTRAR">
            </form>

            <script src="js/jquery-3.3.1.slim.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
