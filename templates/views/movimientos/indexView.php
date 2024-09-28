<?php 
require_once INCLUDES.'inc_header.php';
?>
     <!-- Fin inc:header.php -->     
  <div class="container maxwidthContainer">
    <div class="row">
    <div class="col-12">
        <div class="card mb-3">
            <div class="card-header"><h5>Opciones del sitema</h5></div>
                <div class="card-body">
                    <form class="coatlx_save_options">
                        <div class="form-group row">
                        <div class="col-4">
                            <label for="use_taxes">Calcular Impuestos</label>
                                <select name="use_taxes" id="use_taxes" class="form-control">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>                
                                </select>
                        </div>
                        <div class="col-4">
                            <label for="taxes">Impuestos</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "> %</span>
                                </div>
                                <input type="text" name="taxes" id="taxes" class = "w-100 form-control">
                            </div>
                        </div> 
                        <div class="col-4">
                            <label for="use_taxes">Moneda</label>
                                <select name="coin" id="coin" class="form-control">
                                    <?php foreach (get_coins() as $coin): ?>
                                        <option value="<?php echo $coin; ?>"
                                        <?php echo get_option('coin') === $coin ? 'selected' : ''; ?> </option> 
                                    <?php endforeach; ?>            
                                </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
        </div>
    </div>
    </div>
        <div class="row d-flex justify-content-center";" >
            <div class="col-xl-8">
                <div class="card">   
                        <div class="card-header">
                        <h3>Agrega un nuevo movimiento</h3>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation coatlx_add_movement">
                                <div class="form-group row">
                                    <div class="col-xl-6 "> 
                                        <input class = "form-control "  type="hidden" id="id" name="id"value="">
                                        <label class = "label-control" for="type">Tipo de movimiento:</label>
                                        <select id="type" name="type" class="form-select d-block w-100" required>
                                        <option value="none">Selecciona...</option>
                                        <option value="expense">Gasto</option>
                                        <option value="income">Ingreso</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        
                                        <label class = "label-control" for="description">Descripción:</label>
                                        <input placeholder="Descripción" class = "form-control"  type="text" id="description" name="description">             
                                    </div>
                                    <div class="row">
                                        <label class = "label-control mt-2" for="amount">Monto: </label>
                                        <div class="input-group mb-3 w-100">
                                        <span class="input-group-text">$</span>
                                        <input step="any" placeholder="0.00" type="number" 
                                        name="amount"id="amount" class="form-control">
                                        </div> 
                                    </div>       
                                    <div class="card-footer">
                                        <button class="btn btn-primary" type="submit" style ="width: 100%">Agregar</button>  
                                    </div>
                                </div>
                            </form>

                            <div class="coatlx_wrapper_update_form"><!-- AJAX fill--> </div>
                        </div>
                    </div>     
                </div>
            <div class="col-xl-4">
                <div class="coatlx_wrapper_movements">
                <!--Se LLENA CON AJAX-->
                </div>
            </div>
        </div>
    </div>
   
<?php require_once INCLUDES.'inc_footer_moves.php';?>


