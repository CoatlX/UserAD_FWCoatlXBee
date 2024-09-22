<?php 
class homeController extends Controller{
    function __construct()
    {
        
    }

    function index(){
     /*   echo 'Bienvenido<br>';
        echo CONTROLLER.'<br>';
        echo METHOD.'<br>'.'<br>';¨*/
       // $this->probando();
       /*Para insertar
       try {
        $new_user = new usuariosModel();
        $new_user->user_name = 'Lithliana A López';
        $new_user->user_account = 'lalopez';
        $new_user->user_acc_pas = 'Lil1th#';
        $new_user->depto = 'Venta';
        $id = $new_user->add();
        echo $id;
        } catch (Exception $e) {
            echo $e->getMessage();
        }*/
        /*Para actualizar
        try {
            $new_user = new usuariosModel();
            $new_user->id = 5;
            $new_user->user_name = 'Auxiliar Auditoria Interna';
            $new_user->user_account = 'auxaudi';
            $new_user->user_acc_pas = 'Auxaud1$';
            $new_user->depto = 'Administración';
            $id = $new_user->update();
            echo $id;
            } catch (Exception $e) {
                echo $e->getMessage();
            }*/
        

       
   
            $data =
            [
                //'title' => 'CoatlX Framework',
                'bg' => 'dark'
            ];
            View::render('coatlx', $data);
         /*   print_r($data);
            $data = to_Object($data);
            echo $data->id;*/
            

    }
    function test(){
        $data =
            [
                //'title' => 'CoatlX',
                'bg' => 'd'
            ];
      echo 'Probando la Base de Datos <br><br><br>';
      echo '<pre>';
        try {
            //Mostrar resultados de tabla
       /*     $sql = 'SELECT * FROM tbl_ad_pass WHERE id=:id AND user_name=:user_name';
            $resultado = Db::query($sql,['id'=> 127, 'user_name' => 'Alipio Gömez']);
            print_r($resultado);
            //Insertar un registro en la tabla
            $sql = 'INSERT INTO tbl_ad_pass (user_name, user_account, user_acc_pas, depto)
            VALUES (:user_name, :user_account, :user_acc_pas, :depto)';
            $registrar =
            [
                'user_name' => 'Gerarda López',
                'user_account' => 'glopez',
                'user_acc_pas' => 'Lapell1zcu$',
                'depto' => 'Administración'

            ];  
            $id = Db::query($sql, $registrar);
            print_r($id);
            //Actualizar un registro en la tabla
            $sql = 'UPDATE tbl_ad_pass SET user_name=:user_name WHERE id=:id';
            $registrar_actualizar =
            [
                'user_name' => 'Tigrillo López',
                'id' => 138
            ];  
            print_r(Db::query($sql, $registrar_actualizar));
            //Borrar un regsitro
            $sql = 'DELETE FROM tbl_ad_pass WHERE id=:id LIMIT 1';
            print_r(Db::query($sql,['id'=> 140]));
            //Alterar tabla
            $sql = 'ALTER TABLE tbl_ad_pass ADD COLUMN fecha_login VARCHAR(255) NULL AFTER depto';
            print_r(Dd::query($sql,[]));*/
            
        } catch (Exception $e) {
            echo 'Hubo un error: '.$e->getMessage();
            //throw $th;
        }

      echo '</pre>';
            View::render('test', $data);
       // Redirect::to('home');
    }

    function flash(){

        $nots = [
            'Uno',
        /*    'Dos',
            'Tres'*/
        ];
        $data =
            [
                //'title' => 'CoatlX',
                'bg' => 'dark'
            ];
        
        Flasher::new('A ver si ahora si sale','success');
        View::render('flash',$data);

     /*   echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';*/

       die;
        
    }

}