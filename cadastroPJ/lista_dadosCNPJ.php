<?php

    session_start();
    include "../conexao.php";
    require_once "../cabecalho.php";


    $query = "SELECT * FROM  dadosCnpj ";
    $resultado = $conexao->query($query);

?>

<div>

    <table class="table table-striped">

        <h2>Lista de Dados</h2>

        <thead>

            <tr>
                <th scope="col">Id</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Matriz/Filial</th>
                <th scope="col">Abertura</th>
                <th scope="col">Razão Social</th>
                <th scope="col">Nome Fantasia</th>
                <th scope="col">Natureza jurídica</th>
                <th scope="col">Atividade Principal</th>
                <th scope="col">Atividades Secundárias</th>
                <th scope="col">Cep</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Número</th>
                <th scope="col">Complemento</th>
                <th scope="col">Bairro/distrito</th>
                <th scope="col">Município</th>
                <th scope="col">Uf</th>
                <th scope="col">Endereço eletrônico</th>
                <th scope="col">Telefone</th>
                <th scope="col">Situação cadastral</th>
                <th scope="col">Abertura Cadastro</th>
                <th scope="col">Data de Criação</th>
                <th scope="col" colspan="2" class="text-center">Ações</th>
            </tr>

        </thead>

        <?php foreach ($resultado as  $value) { ?>

            <tbody>

                <tr>
                    <th scope="row"><?= $value['id'] ?></th>
                    <td><?= $value['cnpj'] ?></td>
                    <td><?= $value['tipo'] ?></td>
                    <td><?= $value['abertura'] ?></td>
                    <td><?= $value['nome'] ?></td>
                    <td><?= $value['fantasia'] ?></td>
                    <td><?= $value['natureza_juridica'] ?></td>
                    <td><?= $value['atividade_principal'] ?></td>
                    <td><?= $value['atividade_secundaria'] ?></td>
                    <td><?= $value['cep'] ?></td>
                    <td><?= $value['logradouro'] ?></td>
                    <td><?= $value['numero'] ?></td>
                    <td><?= $value['complemento'] ?></td>
                    <td><?= $value['bairro'] ?></td>
                    <td><?= $value['municipio'] ?></td>
                    <td><?= $value['uf'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['telefone'] ?></td>
                    <td><?= $value['situacao'] ?></td>
                    <td><?= $value['data_situacao']?></td>
                    <td><?= date("j/m/Y H:i:s", strtotime($value['dtCriacao'])) ?></td>
                    <td><a href="../index.php?id=<?= $value['id'] ?>" class="btn btn-warning text-center text-white font-weight-bold">EDITAR</a></td>
                    <td><a href="deleteCNPJ.php?id=<?= $value['id'] ?>" class="btn btn-danger text-center font-weight-bold">DELETAR</a></td>
                </tr>

            <?php } ?>

            </tbody>

    </table>

</div>

<div class="form-row">

    <div class="form-group" col-md-1>

        <a href="../index.php" class="btn btn-primary text-center font-weight-bold">VOLTAR</a>

    </div>

</div>

<?php

    require_once "../rodape.php";

?>