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
    (SELECT SUM(amount) FROM movements WHERE type = "income") AS total_incomes,
    (SELECT SUM(amount) FROM movements WHERE type = "expense") AS total_expenses
    FROM movements
    ORDER BY id DESC';
    try {
        return ($rows = parent::query($sql, null)) ? $rows : false;
    } catch (Exception $e) {
        throw $e;
    }
}

public function one(){
    $sql = 'SELECT * FROM movements WHERE id= :id LIMIT 1';
    try {
        return ($rows = parent::query($sql, ['id' => $this->id])) ? $rows[0] : false;
    } catch (Exception $e) {
        throw $e;
    }
}

public function update(){
    $sql = 'UPDATE movements SET type = :type, description = :description, amount = :amount, 
    created_at = :created_at WHERE id = :id';
    $data =
    [
        'id'           =>$this->id,
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

    $sql = 'DELETE FROM movements WHERE id= :id LIMIT 1';
    $data =
    [
        'id' => $this->id
    ];
        try {
            return (parent::query($sql, $data)) ? true : false;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function all_by_date($date = null)
{
    $date = $date === null ? now() : $date;
    $sql = 'SELECT *,
    (SELECT COUNT(id) FROM movements  WHERE 
    MONTH (created_at) = MONTH (:current_date) AND 
    YEAR(created_at) = YEAR(:current_date))  AS total,
    (SELECT SUM(amount) FROM movements WHERE 
    type = "income" AND
    MONTH (created_at) = MONTH (:current_date) AND 
    YEAR(created_at) = YEAR(:current_date)) AS total_incomes,
    (SELECT SUM(amount) FROM movements WHERE 
    type = "expense" AND
    MONTH (created_at) = MONTH (:current_date) AND 
    YEAR(created_at) = YEAR( :current_date)) AS total_expenses
    FROM movements
    WHERE MONTH (created_at) = MONTH (:current_date) AND YEAR(created_at) = YEAR( :current_date)
    ORDER BY id DESC';
    try {
        return ($rows = parent::query($sql, ['current_date'=> $date])) ? $rows : false;
    } catch (Exception $e) {
        throw $e;
    }
}
}
