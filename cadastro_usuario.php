<?php

    require_once "cabecalho.php";
    require_once "funcoes.php";

    if(isset($_POST['criar']))
        require_once "tratativa_cadastro_usuario.php";

?>

<form action="#" method="post">
        
        <div class="form-row">

            <div class="form-group col-md-10">
                <h2>
                    Cadastro de Usuário 
                </h2>
            </div>
        
        </div>

        <div class="form-row">

            <div class="form-group col-md-8">
                <label for="nomeCadastro">Nome Completo</label>
                <input type="text" class="form-control" name="nomeCadastro" id="nomeCadastro" value="<?= isset($nomeCompleto) ? $nomeCompleto : '' ?>">
            </div>

            <div class="form-group col-md-4">
                <label for="emailCadastro">Email</label>
                <input type="email" class="form-control" name="emailCadastro" id="emailCadastro" value="<?= isset($email) ? $email : '' ?>">
            </div>
  
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="senhaCadastro">Senha</label>
                <input type="password" class="form-control" name="senhaCadastro" id="senhaCadastro" value="<?= isset($senha) ? $senha : '' ?>">
            </div>
        </div>

        <div class="form-row">

            <div class="form-group col-md-0">
                <input type="submit" name="criar" value="CRIAR USUÁRIO" class="btn btn-success text-center font-weight-bold">
            </div>

            <div class="form-group col-md-0">
                <a href="index.php"><button type="button" class="btn btn-primary text-light font-weight-bold">VOLTAR</button></a>
            </div>

        </div>

        

    </form>
