<?php
class AbstractModel
{
    const DATA_TYPE_BOOL = PDO::PARAM_BOOL;
    const DATA_TYPE_STR = PDO::PARAM_STR;
    const DATA_TYPE_INT = PDO::PARAM_INT;
    const DATA_TYPE_DECIMAL = 4;

  
    private function prepareValues(PDOStatement &$stmt)
    {
        foreach (static::$tableSchema as $columnName => $type)
        {
           if($type == 4){
           $sanitizedValue = filter_var($this->$columnName,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
           $stmt->bindValue(":{$columnName}",$sanitizedValue);
           }else{
            $stmt->bindValue(":{$columnName}",$this->$columnName,$type);
           }
        }

    }
    
    private static function buildNameParametersSQL()
    {
         $namedParams = '';
         foreach (static::$tableSchema as $columnName => $type){
         $namedParams .= $columnName.'=:'. $columnName .',';
         }
         return trim($namedParams,',');
         
    }
 
    private function create()
    {
        global $connection;
        $sql = 'INSERT INTO '.static::$tableName.' SET '.self::buildNameParametersSQL();
        $stmt = $connection->prepare($sql);
        $this -> prepareValues($stmt);
        return $stmt->execute();
    }
    private function update()
    {
        global $connection;
        $sql = 'UPDATE '.static::$tableName.' SET '.self::buildNameParametersSQL().' WHERE '.static::$primaryKey .'='.$this->{static::$primaryKey};
        $stmt = $connection->prepare($sql);
        $this -> prepareValues($stmt);
        return $stmt->execute();
    }
    public function save(){
        return $this->{static::$primaryKey} === null ? $this->create() : $this -> update();
    }
    public function delete()
    {
        global $connection;
        $sql = 'DELETE FROM '.static::$tableName.' WHERE '.static::$primaryKey .' = '.$this->{static::$primaryKey};
        $stmt = $connection->prepare($sql);
        return $stmt->execute();
    }
    public static function getAll()
    {
        global $connection;
        $sql = 'SELECT * FROM '.static::$tableName;
        $stmt = $connection->prepare($sql);
        $stmt -> execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, get_called_class(),array_keys(static::$tableSchema));
        return (is_array($results) && !empty($results)) ? $results : false;
        //return $stmt->execute() === true ? $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, get_called_class(),array_keys(static::$tableSchema)) : false;
        echo static::$primaryKey;
        echo static::$tableName;
    }
    public static function getByPK($pk)
    {
        global $connection;
        $sql = 'SELECT * FROM '.static::$tableName.' WHERE '.static::$primaryKey .'="'.$pk.'"';
        $stmt = $connection->prepare($sql);
        if($stmt->execute() === true){
            $obj = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, get_called_class(),array_keys(static::$tableSchema));
            return array_shift($obj);
        }
        return false;
    }
  
    
}