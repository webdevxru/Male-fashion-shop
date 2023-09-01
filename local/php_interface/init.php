<?php
//константа в которой храниться путь к папке local 
define("DEFAULT_TEMPLATE_PATH", "/local/templates/.default");

//функция распечатки
function debug($data){
    echo '<pre>'. print_r($data, 1) . '</pre>';
}