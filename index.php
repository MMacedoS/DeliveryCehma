<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

define('ROTA_GERAL',"http://$_SERVER[HTTP_HOST]".'/deliverycehma');

require_once 'autoload.php';

$rota=new Rota();

?>