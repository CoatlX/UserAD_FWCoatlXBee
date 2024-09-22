<?php 
function en_core(){
    return 'ESTOY DENTRO DE CORE FUNCTIONS';
}

function to_Object($array){

    return json_decode(json_encode($array));
    //json_encode($array); Convierte un arreglo en formato json
    //json_decode(json_encode($array)); convierte un json en Objeto

}
function get_sitename(){

    return 'CoatlX Framework';
}

function now(){//Fecha actual
    return date('Y-m-d H-i-s');
}
