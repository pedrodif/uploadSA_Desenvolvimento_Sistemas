<?php


    include "conexao.php";

    $array_erro = [];
    empty($_POST['nomeCadastro']) ? $array_erro['nomeCadastro'] = "Campo nome não preenchido" : $nome = trim($_POST['nomeCadastro']);
    empty($_POST['emailCadastro']) ? $array_erro['emailCadastro'] = "Campo email  não preenchido" : $email = trim($_POST['emailCadastro']);
    empty($_POST['senhaCadastro']) ? $array_erro['senhaCadastro'] = "Campo senha não preenchido" : $senha = $_POST['senhaCadastro'];

    if (count($array_erro) > 0) {
        foreach ($array_erro as $value) {
            informaErro($value);
            echo '<br>';
        }
    } else {
        $query = "INSERT INTO usuario values(NULL, '$nome', '$email', SHA1('$senha'), NOW())";
        $resultado = $conexao->query($query);
        if ($resultado) {
            informaSucesso('Usuário criado com sucesso!');
            unset($nomeCompleto, $email, $usuario, $senha);
            $conexao->close();
        } else {
            InformaErro('Não foi possível criar usuário.');
        }
    }

?>