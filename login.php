<?php

    session_start();
    require_once "funcoes.php";

?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body class="bg-secondary">
    
    <div class="form-row justify-content-center">

        <main class="shadow-lg py-3 px-md-5 mt-5 mb-5 bg-white text-dark rounded border">


            <?php 

                if (!empty($_SESSION['erro']))
                    informaErro($_SESSION['erro']);

            ?>

            <div class="form-group text-center justify-content-center">
                <img src="imgs/icon_logo.png" alt="logo" class="logo">
                
                <h2>Cadastros e Consultas</h2>
            </div>


            <div class="form-group justify-content-center">
                <form action="index.php" method="post">
                    <h4 class="text-center">Login</h4>
            </div>

            <div class="form-group justify-content-center">
                <label for="email">E-mail</label>
                <input type="text" class="form-control <?= isset($_SESSION['email'])? campoEmBranco($_SESSION['email']) : '' ?>" name="email" id="email" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
            </div>

            <div class="form-group justify-content-center">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control <?= isset($_SESSION['senha'])? campoEmBranco($_SESSION['senha']) : '' ?>" id="senha" value="">
            </div>

            <div class="form-group text-center justify-content-center">

                <input type="submit" name="submit_login" value="ENTRAR" class="btn btn-primary font-weight-bold">
                <a href="cadastro_usuario.php" class="btn btn-success text-white font-weight-bold">CADASTRAR USUÁRIO</a>

            </div>

            <div class="form-group justify-content-center">
            
            </div>

            </form>


        </main>

    </div>

</body>
