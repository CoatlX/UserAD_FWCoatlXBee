                             <form class="needs-validation coatlx_save_movement">
                                <input type="hidden" name = "id" value = "<?php echo $d->id; ?>" >
                                <div class="form-group row">
                                    <div class="col-xl-6 "> 
                                        <label class = "label-control" for="type">Tipo de movimiento:</label>
                                        <select id="type" name="type" class="form-select d-block w-100" required>
                                            <?php foreach ([['none','Selecciona...'],['expense','Gasto'], ['income','Ingreso']] as $option): ?>
                                                <option value="<?php echo $option[0]; ?>" <?php echo $option[0] === $d->type ? 'selected': ''; ?>>
                                                    <?php echo $option[1]; ?></option> 
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        
                                        <label class = "label-control" for="description">Descripción:</label>
                                        <input placeholder="Descripción" class = "form-control"  type="text" id="description" 
                                        name="description" value="<?php echo $d->description; ?>">             
                                    </div> 
                                    <div class="row">
                                        <label class = "label-control mt-2" for="amount">Monto: </label>
                                        <div class="input-group mb-3 w-100">
                                        <span class="input-group-text">$</span>
                                        <input step="any" placeholder="0.00" type="number" 
                                        name="amount"id="amount" class="form-control" value ="<?php echo $d->amount  ?>" required>                                         </div> 
                                    </div>       
                                    <div class="card-footer">
                                        <button class="btn btn-primary" type="submit" style ="width: 100%">Guardar cambios</button>  
                                    </div>
                                </div>
                            </form>