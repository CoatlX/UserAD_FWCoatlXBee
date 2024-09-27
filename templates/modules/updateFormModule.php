        <form class="needs-validation coatlx_save_movement">
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
                                        <input placeholder="Descripción" class = "form-control"  type="text" id="description" 
                                        name="description" value="<?php echo $d->description ?>">             
                                    </div> 
                                    <div class="row">
                                        <label class = "label-control mt-2" for="amount">Monto: </label>
                                        <div class="input-group mb-3 w-100">
                                        <span class="input-group-text">$</span>
                                        <input step="any" placeholder="0.00" type="number" 
                                        name="amount"id="amount" class="form-control" value ="<?php echo $d->amount  ?>" >                                         </div> 
                                    </div>       
                                    <div class="card-footer">
                                        <button class="btn btn-primary" type="submit" style ="width: 100%">Agregar</button>  
                                    </div>
                                </div>
                            </form>