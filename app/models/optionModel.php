<?php 

class optionModel extends Model{

    public $id;
    public $opcion;
    public $val;
    public $created_at;
    public $updated_at;
    
    
    /**
     * Método para agregar un movimiento
     * 
     * 
     */
    public function add(){
    
        $sql = 'INSERT INTO options (opcion, val, created_at)
        VALUES ( :opcion, :val, :created_at)';
        $data =
        [   
            'opcion'     => $this->opcion,
            'val'        => $this->val,
            'created_at' => now()
    
        ];  
        try {
        return $this->id = parent::query($sql, $data) ? $this->id : false;
        } catch (Exception $e) {
            echo 'Hubo un error: '.$e->getMessage();
                }        
    }

    public function all()
    {
        $sql = 'SELECT * FROM options ORDER BY id DESC';     
        try {
            return ($rows = parent::query($sql)) ? $rows : false;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function one(){
        $sql = 'SELECT * FROM options WHERE opcion= :opcion LIMIT 1';
        try {
            return ($rows = parent::query($sql,['opcion'=>$this->opcion])) ? $rows[0] : false;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function update(){
        $sql = 'UPDATE options SET val= :val WHERE opcion= :opcion';
        $data =
        [
            'opcion'     => $this->opcion,
            'val'        => $this->val
        ];  
        try {
        return $this->id = parent::query($sql, $data) ? $this->id : false;
        } catch (Exception $e) {
            echo 'Hubo un error: '.$e->getMessage();
                }        
    }

    public function delete(){

        $sql = 'DELETE FROM options WHERE opcion= :opcion LIMIT 1';

            try {
                return ($rows = parent::query($sql ,['opcion' => $this->opcion])) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }
  public static function search($opcion)
    {
            $self = new self();
            $self->opcion = $opcion;
            return ($res = $self->one()) ? $res['val'] : false;

    }
    public static function save($opcion, $val)
    {
            $self         = new self();
            $self->opcion = $opcion;
            $self->val    = $val;
        
            if(!$opcion = $self->one()){
            return ($self->id = $self->add()) ? $self->id : false;
        }
        return $self->update();
    }
}