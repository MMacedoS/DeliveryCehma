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

        $resposta=$con->insertDados($nome,$matricula,$email,$telefone);      
        echo json_encode("dados cadastrados com sucesso!");
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