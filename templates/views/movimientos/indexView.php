<?php 
require_once INCLUDES.'inc_header.php';
?>
     <!-- Fin inc:header.php -->     
  <div class="container maxwidthContainer">
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
                                        <select id="type" name="type" class=" form-select" required>
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
                        </div>
                    </div>     
                </div>
            <div class="col-xl-4">
                <div class="coatlx_wrapper_movements">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Movimientos</span>
                        <span class="badge badge-secondary badge-pill">123</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class="text-success">
                                <h6 class="my-0">Ingreso</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                                <button class="btn btn-sm btn-danger float-right"><i class="fas fa-trash"></i></button>
                                <span class="text-success">$12.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed bg-light">
                            <div class="text-danger">
                                <h6 class="my-0">Gasto</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                                <span class="text-danger">$8.00</span>
                        </li>
                    </ul>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex-justify content-between">
                            <span>Subtotal (MXN)</span>
                            <strong>$17.24</strong>
                        </li>
                        <li class="list-group-item d-flex-justify content-between">
                            <span>Impuestos (16%)</span>
                            <strong>$3.20</strong>
                        </li>
                        <li class="list-group-item d-flex-justify content-between">
                            <span>Total (MXN)</span>
                            <strong>$20.00</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   
<?php require_once INCLUDES.'inc_footer_moves.php';?>


