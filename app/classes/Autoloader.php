<?php 

class Autolaoder{
    /**
     * Npetodo encragado de de ejecutar el autocargado r de form estática
     * @return void
     */
    public static function init(){

        spl_autoload_register([__CLASS__,'autoload']);
    }
    private static function autoload($class_name){
        if(is_file(CLASSES.$class_name.'.php')){
            require_once CLASSES.$class_name.'.php';
        }elseif(is_file(CONTROLLERS.$class_name.'.php')){
            require_once CONTROLLERS.$class_name.'.php';
        }elseif(is_file(MODELS.$class_name.'.php')){
            require_once MODELS.$class_name.'.php';
        }
        return;
    }

}
