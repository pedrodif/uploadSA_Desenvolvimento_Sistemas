<?php

require_once "../funcoes.php";
login();
require_once "../cabecalho.php";

$flag = 1;

if (isset($_POST['cadastrar']) || isset($_POST['alterar'])) {
    require_once "tratativaCPF.php";
} elseif (isset($_GET['id'])) {
    require_once "seleciona_dadosCPF.php";
}

?>

<h2>CADASTRO PESSOA FÍSICA</h2>
<br>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="<?= isset($nome) ? $nome : '' ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" value="<?= isset($email) ? $email : '' ?>">
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="dtnascimento">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" value="<?= isset($cpf) ? $cpf : '' ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="dtnascimento">Data de Nascimento</label>
            <input type="date" class="form-control" name="dtnascimento" id="dtnascimento" value="<?= isset($dtnascimento) ? $dtnascimento : '' ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="salario">Celular</label>
            <input type="text" name="celular" class="form-control" id="celular" value="<?= isset($celular) ? $celular : '' ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="modalidades">Sexo</label><br>
            <select type="text" name="sexo" class="form-control " id="sexo" value="<?= isset($sexo) ? $sexo : '' ?>">
                <option name="sexo" value="feminino">Feminino</option>
                <option name="sexo" value="masculino">Masculino</option>
                <option name="sexo" value="outros">Outros</option>
            </select>
        </div>
    </div>

    <br>

    <h5>Endereço</h5>
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
            <input type="text" class="form-control" name="complemento" value="<?= isset($complemento) ? $complemento : ''; ?>">
        </div>

        <div class="form-group col-md-5">
            <label>Bairro/Distrito</label>
            <input type="text" class="form-control" name="bairro" value="<?= isset($bairro) ? $bairro : ''; ?>">
        </div>

        <div class="form-group col-md-5">
            <label>Município</label>
            <input type="text" class="form-control" name="municipio" value="<?= isset($municipio) ? $municipio : ''; ?>">
        </div>

        <div class="form-group col-md-2">
            <label>UF</label>
            <input type="text" class="form-control" name="uf" value="<?= isset($uf) ? $uf : ''; ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group" col-md-1>

            <?php if ($flag) : ?>
                <input type="submit" name="cadastrar" class="btn btn-success text-center" value="CADASTRAR">
            <?php else : ?>
                <input type="submit" name="alterar" class="btn btn-success text-center" value="ALTERAR">
            <?php endif ?>
            <a href="lista_dadosCPF.php" class="btn btn-warning text-center text-white">VER DADOS</a>

        </div>
    </div>


</form>

<?php

require_once "../rodape.php";

?>