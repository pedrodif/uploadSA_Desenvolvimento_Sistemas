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
                <th scope="col">CPF</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Celular</th>
                <th scope="col">Sexo</th>
                <th scope="col">Cep</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Número</th>
                <th scope="col">Complemento</th>
                <th scope="col">Bairro/distrito</th>
                <th scope="col">Município</th>
                <th scope="col">UF</th>
                <th scope="col">Data de Criação</th>
                <th scope="col" colspan="2" class="text-center">Ações</th>
            </tr>

        </thead>

        <?php foreach ($resultado as  $value) { ?>

            <tbody>

                <tr>
                    <th scope="row"><?= $value['id'] ?></th>
                    <td><?= $value['cpf'] ?></td>
                    <td><?= $value['nome'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= date("j/m/Y", strtotime($value['dtnascimento'])) ?></td>
                    <td><?= $value['celular'] ?></td>
                    <td><?= $value['sexo'] ?></td>
                    <td><?= $value['cep'] ?></td>
                    <td><?= $value['logradouro'] ?></td>
                    <td><?= $value['numero'] ?></td>
                    <td><?= $value['complemento'] ?></td>
                    <td><?= $value['bairro'] ?></td>
                    <td><?= $value['municipio'] ?></td>
                    <td><?= $value['uf'] ?></td>
                    <td><?= date("j/m/Y H:i:s", strtotime($value['dtCriacao'])) ?></td>
                    <td><a href="../index.php?id=<?= $value['id'] ?>" class="btn btn-warning text-center text-white">Editar</a></td>
                    <td><a href="deleteCPF.php?id=<?= $value['id'] ?>" class="btn btn-danger text-center">Deletar</a></td>
                </tr>

            <?php } ?>

            </tbody>

    </table>

</div>

<div class="form-row">

    <div class="form-group" col-md-1>

        <a href="index.php" class="btn btn-primary text-center">Voltar</a>

    </div>

</div>

<?php

require_once "../rodape.php";

?>