        <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Movimientos</span>
                        <span class="badge bg-secondary"> <?php echo $d[0]->total; ?></span>
                    </h4>
                    <ul class="list-group mb-3">
                        <?php foreach ($d as $mov): ?>
                            <li class="coatlx_movement list-group-item d-flex justify-content-between lh-condensed 
                            <?php echo $mov->type === 'income' ? '' : 'bg-light';?> " 
                            data-id="<?php echo $mov->id;?>">
                            <div class="text-success">
                                <h6 class="my-0 <?php echo $mov->type === 'income' ? 'text-success' : 'text-danger';?>"
                                ><?php echo $mov->type === 'income' ? 'Ingreso' : 'Gasto'; ?> 
                            </h6>
                                <small class="text-muted"><?php echo $mov->description; ?></small>
                            </div>
                                <button class="btn btn-sm btn-danger float-right coatlx_delete_movement" data-id ="<?php echo $mov->id; ?>"><i class="fas fa-trash"></i></button>
                                <span class="<?php echo $mov->type === 'income' ? 'text-success' : 'text-danger';?>"> 
                                <?php echo $mov->type === 'income' ? '' : '- ';?>
                                <?php echo money($mov->amount); ?></span>
                                </li>
                                <?php endforeach; ?>

                    </ul>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex-justify content-between ">
                            <span>Subtotal (MXN)</span>
                            <strong><?php echo money(($d[0]->total_incomes-$d[0]->total_expenses)*0.84);?></strong>
                        </li>
                        <li class="list-group-item d-flex-justify content-between">
                            <span>Impuestos (16%)</span>
                            <strong><?php echo money(($d[0]->total_incomes -$d[0]->total_expenses)*0.16);?></strong>
                        </li>
                        <li class="list-group-item d-flex-justify content-between">
                            <span>Total (MXN)</span>
                            <strong><?php echo money($d[0]->total_incomes -$d[0]->total_expenses);?></strong>
                        </li>
                    </ul>

                   