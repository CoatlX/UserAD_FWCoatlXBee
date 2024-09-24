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
                            <form action="process.php" method="POST" class="needs-validation">
                            <div class="form-group row">
                                <div class="col-xl-6 "> 
                                <input class = "form-control "  type="hidden" id="id" name="id"value="">
                                    <label class = "label-control" for="country">Tipo de movimiento:</label>
                                    <select id="country" class=" form-select" required>
                                    <option value="">Selecciona</option>
                                    <option value="expence">Gasto</option>
                                    <option value="income">Ingreso</option>
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                    <label class = "label-control" for="description">Descripción:</label>
                                    <input class = "form-control"  type="text" id="description" name="description">             
                                </div>
                                <div class="row">
                                    <label class = "label-control mt-2" for="description">Monto: </label>
                                    <div class="input-group mb-3 w-100">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span>
                                    </div>
                                </div>       
                                <div class="card-footer">  
                                    <a href="#" class="btn btn-primary " style ="width: 100%">Ver Usuarios</a>  
                                </div>
                                
                            </form>
                        </div>
                    </div>     
                </div>
            </div>
            <div class="col-xl-4">
                    <input class = "form-control"  type="hidden" id="id" name="id"value="">
                                <label class = "label-control" for="country">Tipo de movimiento:</label>
                                <select id="country" class=" form-select d-block w-100" required>
                                <option value="">Selecciona</option>
                                <option value="expence">Gasto</option>
                                <option value="income">Ingreso</option>
                                </select>
                                <input class = "form-control"  type="hidden" id="id" name="id"value="">
                                <label class = "label-control" for="country">Tipo de movimiento:</label>
                                <select id="country" class=" form-select d-block w-100" required>
                                <option value="">Selecciona</option>
                                <option value="expence">Gasto</option>
                                <option value="income">Ingreso</option>
                                </select>
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

                

<?php require_once INCLUDES.'inc_footer.php';?>


