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
function json_output($json, $die=true){
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json;charset=utf-8');

    if(is_array($json)){
        $json = json_encode($json);
    }
    echo $json;
    if($die){
        die;
    }
return true;

}
function json_build($status=200, $data= null, $msg = ''){
    if(empty($msg || $msg=='')){
        switch($status){
            case 200:
                $msg = 'OK';
                break;
            case 201:
                $msg = 'Created';
                break;
            case 400:
                $msg = 'Invalid request';
                break;
            case 403:
                $msg = 'Access denied';
                break;
            case 404:
                $msg = 'Not found';
                break;
            case 500:
                $msg = 'Internal Server Error';
                break;
            case 550:
                $msg = 'Premission denied';
                break;
            default:
                break;
        }
    }http_response_code($status);
$json=

[
    'status' => $status,
    'error' => false,
    'msg' => $msg,
    'data' => $data,
];

$error_codes = [400,403,404,405,500];

if(in_array($status, $error_codes)){
    $json['error']= true;
}
return json_encode($json);
}
