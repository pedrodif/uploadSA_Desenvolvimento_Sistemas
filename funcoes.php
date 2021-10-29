
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

?>