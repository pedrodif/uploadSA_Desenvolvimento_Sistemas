<?php

    if (isset($_GET['id']))
        $flag = 0;
    else
        $flag = 1;

    include "../conexao.php";


    $array_erro = [];

    empty($_POST['cnpj']) ? $array_erro['cnpj'] = "Campo CNPJ não preenchido" : $cnpj = trim($_POST['cnpj']);

    empty($_POST['tipo']) ? $array_erro['tipo'] = "Campo matriz/filial não preenchido" : $tipo = trim($_POST['tipo']);

    empty($_POST['abertura']) ? $array_erro['abertura'] = "Campo data de abertura não preenchido" : $abertura = trim($_POST['abertura']);

    empty($_POST['nome']) ? $array_erro['nome'] = "Campo nome não preenchido" : $nome = trim($_POST['nome']);

    empty($_POST['fantasia']) ? $array_erro['fantasia'] = "Campo nome fantasia não preenchido" : $fantasia = trim($_POST['fantasia']);

    empty($_POST['naturezaJuridica']) ? $array_erro['naturezaJuridica'] = "Campo natureza jurídica não preenchido" : $natureza_juridica = trim($_POST['naturezaJuridica']);

    empty($_POST['cep']) ? $array_erro['cep'] = "Campo CEP não preenchido" : $cep = trim($_POST['cep']);

    empty($_POST['logradouro']) ? $array_erro['logradouro'] = "Campo logradouro não preenchido" : $logradouro = trim($_POST['logradouro']);

    empty($_POST['numero']) ? $array_erro['numero'] = "Campo número não preenchido" : $numero = trim($_POST['numero']);

    empty($_POST['complemento']) ? $array_erro['complemento'] = "Campo complemento não preenchido" : $complemento = trim($_POST['complemento']);

    empty($_POST['bairro']) ? $array_erro['bairro'] = "Campo bairro não preenchido" : $bairro = trim($_POST['bairro']);

    empty($_POST['municipio']) ? $array_erro['municipio'] = "Campo município não preenchido" : $municipio = trim($_POST['cnpj']);

    empty($_POST['uf']) ? $array_erro['uf'] = "Campo UF não preenchido" : $uf = trim($_POST['uf']);

    empty($_POST['email']) ? $array_erro['email'] = "Campo email não preenchido" : $email = trim($_POST['email']);

    empty($_POST['telefone']) ? $array_erro['telefone'] = "Campo telefone não preenchido" : $telefone = trim($_POST['telefone']);

    empty($_POST['situacao']) ? $array_erro['situacao'] = "Campo situação não preenchido" : $situacao = trim($_POST['situacao']);

    empty($_POST['dtSituacao']) ? $array_erro['dtSituacao'] = "Campo data de cadastro não preenchido" : $data_situacao = trim($_POST['dtSituacao']);

    if (count($array_erro) > 0) {

        foreach ($array_erro as $value) {
            informaErro($value);
            echo '<br>';
        }
    } else {

        $query = '';

        if (!$flag) {

            $query = "UPDATE dadosCnpj SET cnpj = '$cnpj', tipo = '$tipo',
                abertura = '$abertura', nome = '$nome', fantasia = '$fantasia ', natureza_juridica = '$natureza_juridica',
                cep = '$cep', logradouro = '$logradouro', 	numero = '$numero', complemento = '$complemento', bairro = '$bairro', municipio = '$municipio',
                uf = '$uf', email = '$email', telefone = '$telefone', situacao = '$situacao', data_situacao = '$data_situacao'
                WHERE id = {$_GET['id']}";
        } else {
            $query = "INSERT INTO dadosCnpj values(NULL, '$cnpj', '$tipo',
                '$abertura', '$nome', '$fantasia ', '$natureza_juridica',
                '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$municipio',
                '$uf', '$email', '$telefone', '$situacao', '$data_situacao',  NOW())";
            }

        $resultado = $conexao->query($query);
        if ($resultado) {
            informaSucesso('Operação realizada com sucesso!');

            unset(
                $cnpj,
                $tipo,
                $abertura,
                $nome,
                $fantasia,
                $natureza_juridica,
                $cep,
                $logradouro,
                $numero,
                $complemento,
                $bairro,
                $municipio,
                $uf,
                $email,
                $telefone,
                $situacao,
                $data_situacao
            );
            $conexao->close();

            require_once "../rodape.php";
            btns('lista_dadosCNPJ', '../index');
            exit();
        } else {
            informaErro('Não foi possível realizar a operação: ' . $conexao->error);
        }
    }

?>
