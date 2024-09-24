<?php 
//require_once INCLUDES.'inc_header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X_UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php echo isset($d->title) ? $d->title.' - '.get_sitename() : 'Bienvenido - '
    .get_sitename() ?></title>
</head>
<body class="<?php echo isset($d->bg) && $d->bg === 'dark' ? 'bg-dark' : 'bg-light' ?>" 
style="padding: 50px 0px;">
   
    <div class = "container">
    <div class="row justify-content-md-center">
        <div class="col-xl-12 text-center position-absolute end-0 offset-xl-3">
            <img src="<?php echo IMAGES.'coatlx-logo-mod.png' ?> " alt="CoatlX White" 
            style = "width: 200px;">
            <h2 class="text-white mt-1 mb-3"><span class="text-danger">CoatlX</span> Framework </h2>
        </div>
    </div>
    
     <!-- Fin inc:header.php -->
      
   !--<div class="container position-absolute">
   <div class="row justify-content-md-center ">
      <div class="col-xl-7">
        <!--   <div class="card">   -->
             <div class="card-header">
               <h3>Agrega un nuevo movimiento</h3>
               </div>
                  <div class="card-body">
                  <form action="process.php" method="POST" class="needs-validation">
                    <div class="form-group row">
                    <div class="col-xl-6"> 
                    <input class = "form-control"  type="hidden" id="id" name="id"value="">
                           <label class = "label-control" for="country">Tipo de movimiento:</label>
                           <select id="country" class=" form-select d-block w-100" required>
                           <option value="">Selecciona</option>
                           <option value="expence">Gasto</option>
                           <option value="income">Ingreso</option>
                           </select>
                    </div>
                    <div class="col-xl-6">
                    <label class = "label-control" for="nombre_red">Descripción:</label>
                    <input class = "form-control"  type="text" id="nombre_red" name="nombre_red">
                    </div>
                        </div>
                        <label class = "label-control" for="contrasena"> Monto</label>
                        <div class="input-group mb-3">
                              <span class="input-group-text">$</span>
                              <input type ="number"  class="form-control" aria-label="Amount (to the nearest dollar)">
                              <span class="input-group-text">.00</span>
                        </div>
                    </div>       
               <div class="card-footer">  
                  <a href="usuariosAD.php" class="btn btn-primary " style ="width: 100%">Ver Usuarios</a>  
               </div>
               </form>
            </div>
            <div class="col-xl-4">
            <input class = "form-control"  type="hidden" id="id" name="id"value="">
                           <label class = "label-control" for="country">Tipo de movimiento:</label>
                           <select id="country" class=" form-select d-block w-100" required>
                           <option value="">Selecciona</option>
                           <option value="expence">Gasto</option>
                           <option value="income">Ingreso</option>
                           </select>
            </div>
         </div>
         
      </div>
   </div>

<?php require_once INCLUDES.'inc_footer.php';?>

</body>
</html>
