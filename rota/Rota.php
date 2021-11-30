<?php

class Rota
{
    public function __construct()
    {
     $this->run();
    }

    public function run(){
        if(isset($_GET['pag']))
        {
            $url=$_GET['pag'];
        }

        if(isset($url))
        {
            $paramentros=[];
            $url=explode('/',$url);
            $controller= $url[0].'Controller';
            array_shift($url);

            if(isset($url[0]) && !empty($url))
            {
                $metode=$url[0];
                array_shift($url);
            }else{
                $metode='index';
                
            }
            if(count($url)>0){
                $paramentros=$url;
            }
            
        }else
        {
            $controller="HomeController";
            $metode="index";
            $paramentros=[];
        }

        $camninho='deliverycehma/Controller/'.$controller.'.php';

        if(!file_exists($camninho) && !method_exists($controller,$metode))
        {
            $controller="HomeController";
            $index="index";
            $paramentros=[];

        }

        $control=new $controller;
        call_user_func_array(array($control,$metode),$paramentros);

    }
    
}



?>