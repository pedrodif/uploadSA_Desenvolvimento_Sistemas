<?php
require_once "cabecalho.php";

?>

<div class="form-row  justify-content-center">
    <div class="card" style="width: 18rem;">
        <img src="imgs/cpf.jpg" class="card-img-top" alt="CPF">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Pessoa Física</h5>
            <a href="cadastroPF/manterCPF.php" class="btn btn-success font-weight-bold">ACESSE</a>
        </div>
    </div>

    <div class="card ml-4" style="width: 18rem;">
        <img src="imgs/cnpj.jpg" class="card-img-top" alt="CNPJ">
        <div class="card-body">
            <h5 class="card-title">Cadastro Nacional de Pessoa Jurídica</h5>
            <a href="cadastroPJ/manterCNPJ.php" class="btn btn-success font-weight-bold">ACESSE</a>
        </div>
    </div>
</div>

<?php

require_once "rodape.php";
?>
