<?php 

 
class movementModel extends Model{

public $id;
public $type;
public $description;
public $amount;
public $created_at;
public $updated_at;


/**
 * Método para agregar u
 * 
 * 
 */

public function add(){

    $sql = 'INSERT INTO movements (type, description, amount, created_at)
    VALUES (:type, :description, :amount, :created_at)';
    $data =
    [
        'type'        => $this->type,
        'description' => $this->description,
        'amount'      => (float)$this->amount,
        'created_at'  => now()

    ];  
    try {
    return $this->id = parent::query($sql, $data) ? $this->id : false;
    } catch (Exception $e) {
        echo 'Hubo un error: '.$e->getMessage();
            }        
}

public function all()
{
    $sql = 'SELECT *,
    (SELECT COUNT(id) FROM movements) AS total,
    (SELECT SUM(amount) FROM movimientos WHERE type = "income") AS total_incomes,
    (SELECT SUM(amount) FROM movimientos WHERE type = "expense") AS total_expenses
    FROM movimientos
    ORDER BY id DESC';
    try {
        return ($rows = parent::query($sql,'')) ? $rows : false;
    } catch (Exception $e) {
        throw $e;
    }
}

public function one(){
    $sql = 'SELECT * FROM movements WHERE id=:id LIMIT 1';
    try {
        return ($rows = parent::query($sql, ['id' => $this->id])) ? $rows[0] : false;
    } catch (Exception $e) {
        throw $e;
    }
}

public function update(){
    $sql = 'UPDATE movements SET type=:type, description=:description, amount=:amount, 
    created_at=:created_at WHERE id=:id';
    $data =
    [
        'type'        => $this->type,
        'description' => $this->description,
        'amount'      => (float)$this->amount,
        'created_at'  => now()
    ];  
    try {
    return $this->id = parent::query($sql, $data) ? $this->id : false;
    } catch (Exception $e) {
        echo 'Hubo un error: '.$e->getMessage();
            }        
}

public function delete(){

    $sql = 'DELETE FROM movements WHERE id=:id LIMIT 1';
    $data =
    [
        'id' => $this->id
    ];
        try {
            return ($rows = parent::query($sql)) ? $rows : false;
        } catch (Exception $e) {
            throw $e;
        }
    }
}