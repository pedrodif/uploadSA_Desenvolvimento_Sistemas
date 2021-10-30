<?php 

    require_once "cabecalho.php";
    require_once "funcoes.php";

    $flag = 1;

    if (isset($_GET['submit'])){
        require_once "apiCNPJ.php";
    }
    
    if(isset($_POST['cadastrar']) || isset($_POST['alterar'])){
        require_once "tratativaCNPJ.php";
    }

?>

    <h1>Busca CNPJ</h1>
    <form action="" method="get">

        <div class="form-row">

            <div class="form-group col-md-2">
                <label for="cnpj">Digite o CNPJ:</label>
                <input type="text" class="form-control" name="cnpj" id="cnpj">
            </div>

            <div class="form-group col-md-2">
                <input type="submit" name="submit" value="Buscar" class="btn btn-warning text-center text-white">
            </div>

        </div>

    </form>

    <br><br>

    <form action="#" method="post">

        <div class="form-row">

            <div class="form-group col-md-2">
                <label>NÚMERO DE INSCRIÇÃO</label>
                <input type="text" class="form-control" name="cnpj" value="<?= isset($cnpj)?$cnpj:''; ?>">
            </div>

            <div class="form-group col-md-2">
                <label>MATRIZ/FILIAL</label>
                <input type="text" class="form-control" name="tipo" value="<?= isset($tipo)?$tipo:''; ?>">
            </div>

            <div class="form-group col-md-2">
                <label>DATA DE ABERTURA</label>
                <input type="text" class="form-control" name="abertura" value="<?= isset($abertura)?$abertura:''; ?>">
            </div>

            <div class="form-group col-md-6">
                <label>NOME EMPRESARIAL</label>
                <input type="text" class="form-control" name="nome" value="<?= isset($nome)?$nome:''; ?>">
            </div>

        </div>

        <div class="form-row">

            <div class="form-group col-md-6">
                <label>TÍTULO DO ESTABELECIMENTO (NOME DE FANTASIA)</label>
                <input type="text" class="form-control" name="fantasia" value="<?= isset($fantasia)?$fantasia:''; ?>">
            </div>

            <div class="form-group col-md-6">
                <label>CÓDIGO E DESCRIÇÃO DA NATUREZA JURÍDICA</label>
                <input type="text" class="form-control" name="naturezaJuridica" value="<?= isset($natureza_juridica)?$natureza_juridica:''; ?>">
            </div>

        </div>


        <div class="form-row">

            <div class="form-group col-md-6">
                <label>CÓDIGO E DESCRIÇÃO DA ATIVIDADE ECONÔMICA PRINCIPAL</label>
                <?php iterable : foreach ($atividade_principal as $value) { ?>
                <input type="text" class="form-control" name="atvPrincipal" value="<?= $value->code.'-'.$value->text ?>">
                <?php } ?>
            </div>

            <div class="form-group col-md-6">
                <label>CÓDIGO E DESCRIÇÃO DAS ATIVIDADES ECONÔMICAS SECUNDÁRIAS</label>
                <?php foreach ($atividades_secundarias as $value) { ?>
                <input type="text" class="form-control" name="atvSecundaria" value="<?= $value->code.'-'.$value->text ?>">
                <?php } ?>
            </div>
        
        </div>

        <div class="form-row">  

            <div class="form-group col-md-2">        
                <label>CEP</label>
                <input type="text" class="form-control" name="cep" value="<?= isset($cep)?$cep:''; ?>">
            </div>

            <div class="form-group col-md-6">
                <label>LOGRADOURO</label>
                <input type="text" class="form-control" name="logradouro" value="<?= isset($logradouro)?$logradouro:''; ?>">
            </div>

            <div class="form-group col-md-2">
                <label>NÚMERO</label>
                <input type="text" class="form-control" name="numero" value="<?= isset($numero)?$numero:''; ?>">
            </div>

            <div class="form-group col-md-2">
                <label>COMPLEMENTO</label>
                <input type="text" class="form-control" name="complemento" value="<?= isset($complemento)?$complemento:''; ?>">
            </div>

        </div>


        <div class="form-row">       
             
            <div class="form-group col-md-3"> 
                <label>BAIRRO/DISTRITO</label>
                <input type="text" class="form-control" name="bairro" value="<?= isset($bairro)?$bairro:''; ?>">
            </div>

            <div class="form-group col-md-3"> 
                <label>MUNICÍPIO</label>
                <input type="text" class="form-control" name="municipio" value="<?= isset($municipio)?$municipio:''; ?>">
            </div>

            <div class="form-group col-md-1"> 
                <label>UF</label>
                <input type="text" class="form-control" name="uf" value="<?= isset($uf)?$uf:''; ?>">
            </div>

        </div>


        <div class="form-row">    

            <div class="form-group col-md-6"> 
                <label>ENDEREÇO ELETRÔNICO</label>
                <input type="email" class="form-control" name="email" value="<?= isset($email)?$email:''; ?>">
            </div>

            <div class="form-group col-md-6"> 
                <label>TELEFONE</label>
                <input type="text" class="form-control" name="telefone" value="<?= isset($telefone)?$telefone:''; ?>">
            </div>

        </div>


        <div class="form-row">  

            <div class="form-group col-md-3">     
                <label>SITUAÇÃO CADASTRAL</label>
                <input type="text" class="form-control" name="situacao" value="<?= isset($situacao)?$situacao:''; ?>">
            </div>

            <div class="form-group col-md-3"> 
                <label>DATA DA SITUAÇÃO CADASTRAL</label>
                <input type="text" class="form-control" name="dtSituacao" value="<?= isset($data_situacao)?$data_situacao:''; ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group" col-md-1>
                
                <?php if ($flag): ?>
                <input type="submit" name="cadastrar" class="btn btn-success text-center" value="Cadastrar">
                <?php else: ?>
                <input type="submit" name="alterar" class="btn btn-success text-center" value="Alterar">
                <?php endif ?>
                <a href="lista_dados.php" class="btn btn-dark text-center">Ver Dados</a>

            </div> 
         </div>

    </form>

<?php 

    require_once "rodape.php";

?>