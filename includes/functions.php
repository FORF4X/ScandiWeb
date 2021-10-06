<?php 
    function myAutoload($class) {
        $class = strtolower($class);

        $the_path = "includes/{$class}.php";
        
        if(file_exists($the_path)) {
            require_once($the_path);
        } else {
            die("<br>" ."This file named {$class}.php was not found");
        }
    }

    spl_autoload_register('myAutoload');
?>