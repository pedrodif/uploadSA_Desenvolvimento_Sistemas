<?php

    session_start();
    require_once "funcoes.php";
    require_once "cabecalho.php";

?>

<div class="form-row justify-content-center">

    <main class="shadow-lg py-3 px-md-5 mt-5 mb-5 bg-white text-dark rounded border">


        <?php 

            if (!empty($_SESSION['erro']))
                informaErro($_SESSION['erro']);

        ?>
        <div class="form-group justify-content-center">
            <form action="index.php" method="post">
                <h1 class="text-center">Login</h1>
        </div>

        <div class="form-group justify-content-center">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= campoEmBranco($_SESSION['email']) ?>" name="email" id="email" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
        </div>

        <div class="form-group justify-content-center">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control <?= campoEmBranco($_SESSION['senha']) ?>" id="senha" value="">
            <!-- é necessário manter o value aqui?  -->
        </div>

        <div class="form-group justify-content-center">
            <input type="submit" name="submit_login" value="Entrar" class="btn btn-primary">
        </div>
        </form>

    </main>

</div>


<?php

    require_once "rodape.php";

?>
