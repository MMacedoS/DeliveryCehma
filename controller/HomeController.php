<?php

class HomeController
{
    public function index()
    {
        require_once 'View/index.php';
    }

    public function hora()
    {
        
            date_default_timezone_set('America/Sao_Paulo');
            $cH = date('H');
            $cM = date('i');
            $cS = date('s');
            echo $cH.':'.$cM.':'.$cS;

    }
}


?>