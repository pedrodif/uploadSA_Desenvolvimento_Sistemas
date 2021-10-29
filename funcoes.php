
<?php 

    function trataCPF_CNPJ($valor){
        $resul = trim($valor);
        $arraySimbolos = array('.', ',', '-', '/');
        $resul = str_replace($arraySimbolos, "", $resul);
        return $resul;
    }

?>