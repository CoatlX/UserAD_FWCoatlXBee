<?php 

class movimientosController extends Controller{
    function __construct()
    {
        
    }

    function index(){
   
            $data =
            [
                'title' => 'Mis Movimientos',
                'bg' => 'dark'
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
 