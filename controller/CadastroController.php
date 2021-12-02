<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
require_once './model/dados.php';
class CadastroController{
   
    
    public function inserir()
    {
        $con=new Dados();
        $nome=$_POST['nome'];
        $matricula=$_POST['matricula'];
        $telefone=$_POST['telefone'];
        $email=$_POST['email'];
        $pedido=$_POST['pedido'];

        $resposta=$con->insertDados($nome,$matricula,$email,$telefone,$pedido);   
                if($resposta){   
                    echo json_encode($resposta."dados cadastrados com sucesso!");
                }else{
                    echo json_encode($resposta."erro ao cadastrar os dados! tente novamente");
                }
    }


    public function verifica()
    {
        $con=new Dados();
        
        $matricula=$_POST['matricula'];
        
        $email=$_POST['email'];

        $resposta=$con->verificaDados($matricula,$email);      
        if(count($resposta)>0){
        echo json_encode("usuario existente");
        }
    }

    
}


?>