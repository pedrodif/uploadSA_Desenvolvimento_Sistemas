<?php

  require_once "funcoes.php";
 
  $conexao = new mysqli('localhost:3306', 'root', '', 'dadosCnpjCpf');
   
  if($conexao->connect_error){
      $msg = "Falha ao conectar: ".$conexao->connect_error;
      informaErro($msg);
  }
?>