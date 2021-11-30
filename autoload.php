<?php

spl_autoload_register(function($new){
    if(file_exists('rota/'.$new.'.php')){
        require_once 'rota/'.$new.'.php';
    }elseif(file_exists('controller/'.$new.'.php')){
        require_once 'controller/'.$new.'.php';
    }elseif(file_exists('Rota/'.$new.'.php')){

    }
});



?>