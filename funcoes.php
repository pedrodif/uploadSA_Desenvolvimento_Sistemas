
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

    function btns($path_dados, $path_index){
    
        echo '<div class="row justify-content-center">
          <a href="'.$path_dados.'.php" class="btn btn-primary text-center ml-3">Ver Dados</a>
          <a href="'.$path_index.'.php" class="btn btn-success text-center ml-3">Cadastrar</a>
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

    function login() {

    if (!isset($_SESSION)) session_start();
        
        if (isset($_POST['submit_login'])) {
            
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['senha'] = $_POST['senha'];
            
            
            if (empty($_SESSION['email']) || empty($_SESSION['senha'])) {
            $_SESSION['erro'] = "Campos usuário ou senha não preenchido";
            header('Location: login.php');
            exit();
        }
    }
   
    if (!empty($_SESSION)) {
        include "conexao.php";
  
        $sql = "SELECT nome FROM usuario WHERE email='" . $_SESSION['email'] . "' AND senha=SHA('" . $_SESSION['senha'] . "')";

        $result = $conexao->query($sql);
        
        if (!$result->num_rows) {
            $_SESSION['erro'] = "Usuário ou senha inválido!";
            header("Location: login.php");
            exit();
        }else{


            foreach ($result as $value) {
                $_SESSION['nome'] = $value['nome'];
            }
    
        }

        $num_rows = $result->num_rows;
    
        $conexao->close();
        
    } else {
        header("Location: login.php");
        exit();
    }
}

?>