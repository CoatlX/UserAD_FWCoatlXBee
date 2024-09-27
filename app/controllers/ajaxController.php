<?php 

 class ajaxController extends Controller
 {
    private $accepted_actions = ['add', 'get', 'load', 'update', 'delete'];
    private $required_params = ['hook', 'action'];
    function __construct(){

        foreach($this->required_params as $param){
            if(!isset($_POST[$param])){
                json_output(json_build(403));
            }
        }
        if(!in_array($_POST['action'], $this-> accepted_actions)){
            json_output(json_build(403));
        }

    }
    function index(){

        //json_output(json_build(403));
    }
    function coatlx_add_movement(){

       try {
        $mov = new movementModel();
        $mov->type = $_POST['type'];
        $mov->description = $_POST['description'];
        $mov->amount = (float)$_POST['amount'];
        
        if(!!$id = $mov->add()){
            json_output(json_build(403, null, 'Error al guardar registro'));
        }
        //Se guardó con éxito
        $mov->id = $id;
        json_output(json_build(201, $mov->one(), 'Movimiento agregado con éxito'));
      

       } catch (Exception $e) {
        json_output(json_build(400 , null, $e->getMessage()));
       }
       //json_output(json_build(200));
    }
    function coatlx_get_movements(){

        try {
            $movements = new movementModel();
            $movs = $movements->all();
            $data = get_module('movements', $movs);
            json_output(json_build(200 , $data));
           
           } catch (Exception $e) {
            json_output(json_build(400 , $e->getMessage()));
           }
           //json_output(json_build(200));
       
    }
    function coatlx_delete_movements(){

        try {
            $mov = new movementModel();
            $mov->id = $_POST['id'];
            if(!$mov->delete()){
                json_output(json_build(400 , null, 'Hubo un error'));
            }
            json_output(json_build(200 , null, 'Borrado con éxito'));
           
           } catch (Exception $e) {
            json_output(json_build(400 , $e->getMessage()));
           }
           //json_output(json_build(200));
       
    }

 }
