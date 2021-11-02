<?php

    if (isset($_GET['id']))
        $flag = 0;
    else
        $flag = 1;

    require_once "../conexao.php";


    $array_erro = [];

    empty($_POST['nome']) ? $array_erro['nome'] = "Campo nome não preenchido" : $nome = trim($_POST['nome']);

    empty($_POST['email']) ? $array_erro['email'] = "Campo email não preenchido" : $email = trim($_POST['email']);

    empty($_POST['cpf']) ? $array_erro['cpf'] = "Campo cpf não preenchido" : $cpf = trim($_POST['cpf']);

    empty($_POST['dtNascimento']) ? $array_erro['dtNascimento'] = "Campo data de nascimento não preenchido" : $dtNascimento = trim($_POST['dtNascimento']);

    empty($_POST['celular']) ? $array_erro['celular'] = "Campo celular não preenchido" : $celular = trim($_POST['celular']);

    empty($_POST['sexo']) ? $array_erro['sexo'] = "Campo sexo não preenchido" : $sexo = trim($_POST['sexo']);

    empty($_POST['cep']) ? $array_erro['cep'] = "Campo CEP não preenchido" : $cep = trim($_POST['cep']);

    empty($_POST['logradouro']) ? $array_erro['logradouro'] = "Campo logradouro não preenchido" : $logradouro = trim($_POST['logradouro']);

    empty($_POST['numero']) ? $array_erro['numero'] = "Campo número não preenchido" : $numero = trim($_POST['numero']);

    empty($_POST['complemento']) ? $array_erro['complemento'] = "Campo complemento não preenchido" : $complemento = trim($_POST['complemento']);

    empty($_POST['bairro']) ? $array_erro['bairro'] = "Campo bairro não preenchido" : $bairro = trim($_POST['bairro']);

    empty($_POST['municipio']) ? $array_erro['municipio'] = "Campo município não preenchido" : $municipio = trim($_POST['cpf']);

    empty($_POST['uf']) ? $array_erro['uf'] = "Campo UF não preenchido" : $uf = trim($_POST['uf']);

    if (count($array_erro) > 0) {

        foreach ($array_erro as $value) {
            informaErro($value);
            echo '<br>';
        }
    } else {

        $query = '';

        if (!$flag) {

            //alterar os campos para o update 
            $query = "UPDATE dadosCpf SET cpf = '$cpf',
                nome = '$nome', dtNascimento = '$dtNascimento', email = '$email ', celular = '$celular', sexo = '$sexo',
                cep = '$cep', logradouro = '$logradouro', 	numero = '$numero', complemento = '$complemento', bairro = '$bairro', municipio = '$municipio',
                uf = '$uf', 
                WHERE id = {$_POST['id']}";
        } else {
            $query = "INSERT INTO dadosCpf values(NULL, '$cpf',
                '$nome ', '$dtNascimento' , '$email ', '$celular ', $sexo,
                '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$municipio',
                '$uf',  NOW())";
        }

        $resultado = $conexao->query($query);
        if ($resultado) {
            informaSucesso('Operação realizada com sucesso!');

            unset(
                $cpf,
                $nome,
                $dtnascimento,
                $email,
                $celular,
                $sexo,
                $cep,
                $logradouro,
                $numero,
                $complemento,
                $bairro,
                $municipio,
                $uf
            );
            $conexao->close();
            require_once "../rodape.php";
            exit();
        } else {
            informaErro('Não foi possível realizar a operação: ' . $conexao->error);
    }
}
