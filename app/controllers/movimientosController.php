<?php 

class movimientosController extends Controller{
    function __construct()
    {
        $db = new Db();
        $db->connect();
    }

    function index(){
   
            $data =
            [
                'title' => 'Mis Movimientos',
                'bg' => 'dar'
            ];
            View::render('index', $data);
         /*   print_r($data);
            $data = to_Object($data);
            echo $data->id;*/
            

    }
    function gastos(){
        $data =
            [
                //'title' => 'CoatlX',
                'bg' => 'd'
            ];

            View::render('gastos', $data);
       // Redirect::to('home');
    }

   
}
 