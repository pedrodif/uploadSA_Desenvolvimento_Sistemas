
<?php 

    function trataCPF_CNPJ($valor){
        $resul = trim($valor);
        $arraySimbolos = array('.', ',', '-', '/');
        $resul = str_replace($arraySimbolos, "", $resul);
        return $resul;
    }

    function informaErro($msg){
        echo '<div class="alert alert-danger" role="alert">';
        echo $msg;
        echo '</div>';
    }


    function informaSucesso($msg){
        echo '<div class="alert alert-success" role="alert">';
        echo $msg;
        echo '</div>';
    }

    function btns(){
    
        echo '<div class="row justify-content-center">
          <a href="lista_dadosCNPJ.php" class="btn btn-primary text-center ml-3">Ver Dados</a>
          <a href="index.php" class="btn btn-success text-center ml-3">Cadastrar</a>
        </div>';
    
    }


    function campoEmBranco($campo){
        if (isset($campo)) {
            if (empty($campo))
                return 'is-invalid';
            else
                return $campo;
        } else
            return '';
    }

?>