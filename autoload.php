<?php
spl_autoload_register(function($classe){
        $classe = str_replace("Blog\\", "", $classe);
        $classe = str_replace("\\", "/", $classe);
        //var_dump($classe);
    
        include_once $classe.".php";
});