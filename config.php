<?php
   spl_autoload_register(function($nameClass){
    $dir = "Class";
    $filename = $dir . DIRECTORY_SEPARATOR . $nameClass . ".php";
    if(file_exists($filename)){
        require_once("$filename");
    }
   });
?>