<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<<div class="container">
   <div class="row">
      <div class="col-xl-8">
         <div class="card">   
               <div class="card-header">
               <h3>Agrega un nuevo movimiento</h3>
               </div>
                  <div class="card-body">
                  <form action="process.php" method="POST">
                    <div class="form-group row">
                    <div class="col-xl-6"> 
                    <input class = "form-control"  type="hidden" id="id" name="id"value="">
                           <label class = "label-control" for="nombre_usuario">Tipo de movimiento:</label>
                           <input class = "form-control"  type="text" id="nombre_usuario" name="nombre_usuario">      
                    </div>
                    <div class="col-xl-6">
                    <label class = "label-control" for="nombre_red">Descripción:</label>
                    <input class = "form-control"  type="text" id="nombre_red" name="nombre_red">
                    </div>
                
                    </div>
                    <div class="mb-3">
                    <label class = "label-control" for="contrasena"> Monto</label>
                    <input class = "form-control"  type="text" id="contrasena" name="contrasena">
                    </div>       
                  </form>
            </div>
            <div class="card-footer">
                <div class="col-xl-12">
                <a href="usuariosAD.php" class="btn btn-primary btn-sm" style ="width: 100%">Ver Usuarios</a>
                </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
</body>
</html>
