<?php
require_once './model/dados.php';
class HomeController
{
    public function index()
    {
        require_once 'View/script.php';
    }

    public function pedidos()
    {
        require_once 'View/index.php';
    }

    public function hora()
    {
        $con=new Dados();
        $dados=$con->getAllDados();
        $aberto=0;
        $fechado=0;
        $preparacao=0;

        foreach ($dados as $key => $value) {
           if($value['status']=='aberto'){
               $aberto++;
           }elseif($value['status']=='preparando'){
                $preparacao++;
           }else{
                $fechado++;
           }
        }
        
            // date_default_timezone_set('America/Sao_Paulo');
            // $cH = date('H');
            // $cM = date('i');
            // $cS = date('s');
            echo json_encode(array($aberto,$preparacao,$fechado));


    }

    public function busca($params)
    {
        $con=new Dados();
        if(@$_POST['busca']){

            $dados=$con->buscatexto($_POST['status'],$_POST['busca']);        

       
            echo json_encode($dados);
        }else{
        
        $dados=$con->buscaDados($params);        

       
            echo json_encode($dados);
        }

    }
}


?>