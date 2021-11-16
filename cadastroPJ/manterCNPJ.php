<?php

require_once "../funcoes.php";
login();
require_once "../cabecalho.php";

$flag = 1;

if (isset($_GET['submit'])) {
    require_once "apiCNPJ.php";
} elseif (isset($_GET['id'])) {
    require_once "seleciona_dadosCNPJ.php";
}

if (isset($_POST['cadastrar']) || isset($_POST['alterar'])) {
    require_once "tratativaCNPJ.php";
}

?>



<h3>BUSCA CNPJ</h3>

<form action="" method="get">

    <div class="form-row d-flex align-items-end">

        <div class="form-group col-md-2">
            <label for="cnpj">Digite o CNPJ:</label>
            <input type="text" class="form-control" name="pesquisa" id="pesquisa">
        </div>

        <div class="form-group col-md-2 ">
            <input type="submit" name="submit" value="BUSCAR" class="btn btn-warning text-center text-white font-weight-bold">
        </div>

        <div class="homeloc">
           <a href="../index.php"><img src="../imgs/home.jpeg" alt="home" class="home"></a>
        </div>

    </div>

</form>

<br><br>

<form action="#" method="post">


    <h5>Dados Cadastrais</h5>
    <br>


    <div class="form-row">

        <div class="form-group col-md-2">
            <label>Número de inscrição</label>
            <input type="text" class="form-control" name="cnpj" value="<?= isset($cnpj) ? $cnpj : ''; ?>">
        </div>

        <div class="form-group col-md-2">
            <label>Matriz/Filial</label>
            <input type="text" class="form-control" name="tipo" value="<?= isset($tipo) ? $tipo : ''; ?>">
        </div>

        <div class="form-group col-md-2">
            <label>Data de abertura</label>
            <input type="text" class="form-control" name="abertura" value="<?= isset($abertura) ? $abertura : ''; ?>">
        </div>

        <div class="form-group col-md-6">
            <label>Nome empresarial</label>
            <input type="text" class="form-control" name="nome" value="<?= isset($nome) ? $nome : ''; ?>">
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label>Nome fantasia</label>
            <input type="text" class="form-control" name="fantasia" value="<?= isset($fantasia) ? (empty($fantasia) ? '-' : $fantasia) : ''; ?>">
        </div>

        <div class="form-group col-md-6">
            <label>Código-Descrição da Natureza Jurídica</label>
            <input type="text" class="form-control" name="naturezaJuridica" value="<?= isset($natureza_juridica) ? $natureza_juridica : ''; ?>">
        </div>

    </div>



    <br>
    <h5>Endereço</h5>
    <br>

    <div class="form-row">

        <div class="form-group col-md-2">
            <label>CEP</label>
            <input type="text" class="form-control" name="cep" value="<?= isset($cep) ? $cep : ''; ?>">
        </div>

        <div class="form-group col-md-6">
            <label>Logradouro</label>
            <input type="text" class="form-control" name="logradouro" value="<?= isset($logradouro) ? $logradouro : ''; ?>">
        </div>

        <div class="form-group col-md-2">
            <label>Número</label>
            <input type="text" class="form-control" name="numero" value="<?= isset($numero) ? $numero : ''; ?>">
        </div>

        <div class="form-group col-md-2">
            <label>Complemento</label>
            <input type="text" class="form-control" name="complemento" value="<?= isset($complemento) ? (empty($complemento) ? '-' : $complemento)  : '-'; ?>">
        </div>

    </div>


    <div class="form-row">

        <div class="form-group col-md-3">
            <label>Bairro/Distrito</label>
            <input type="text" class="form-control" name="bairro" value="<?= isset($bairro) ? $bairro : ''; ?>">
        </div>

        <div class="form-group col-md-3">
            <label>Município</label>
            <input type="text" class="form-control" name="municipio" value="<?= isset($municipio) ? $municipio : ''; ?>">
        </div>

        <div class="form-group col-md-1">
            <label>UF</label>
            <input type="text" class="form-control" name="uf" value="<?= isset($uf) ? $uf : ''; ?>">
        </div>

    </div>


    <br>
    <h5>Contato</h5>
    <br>


    <div class="form-row">

        <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="<?= isset($email) ? $email : ''; ?>">
        </div>

        <div class="form-group col-md-6">
            <label>Telefone</label>
            <input type="text" class="form-control" name="telefone" value="<?= isset($telefone) ? $telefone : ''; ?>">
        </div>

    </div>


    <div class="form-row">

        <div class="form-group col-md-3">
            <label>Situação Cadastral</label>
            <input type="text" class="form-control" name="situacao" value="<?= isset($situacao) ? $situacao : ''; ?>">
        </div>

        <div class="form-group col-md-3">
            <label>Data Cadastro</label>
            <input type="text" class="form-control" name="dtSituacao" value="<?= isset($data_situacao) ? $data_situacao : ''; ?>">
        </div>
    </div>

    <br>

    <div class="form-row">
        <div class="form-group" col-md-1>

            <?php if ($flag) : ?>
                <input type="submit" name="cadastrar" class="btn btn-success text-center" value="CADASTRAR">
            <?php else : ?>
                <input type="submit" name="alterar" class="btn btn-success text-center" value="ALTERAR">
            <?php endif ?>
            <a href="lista_dadosCNPJ.php" class="btn btn-warning text-white text-center">VER DADOS</a>

        </div>
    </div>

</form>



<?php

require_once "../rodape.php";

?>