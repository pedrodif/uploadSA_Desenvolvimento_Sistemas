<?php

require_once "../funcoes.php";

if (isset($_GET['submit'])) {
    $cnpj = $_GET['pesquisa'];
    $cnpjFinal = trataCPF_CNPJ($cnpj);
    $url = "https://www.receitaws.com.br/v1/cnpj/{$cnpjFinal}";
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resultado = json_decode(curl_exec($ch));
    foreach ($resultado as $key => $elemento) {
        $$key = $elemento;
    }
    curl_close($ch);
} else {
    informaErro("Informe CNPJ para pesquisa.");
}
