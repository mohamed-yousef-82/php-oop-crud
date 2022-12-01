<?php
class Employee extends AbstractModel
{
 public $id;
 public $name;
 public $age;
 public $address;
 public $salary;
 protected static $tableName = 'employee';
 protected static $tableSchema = array(
           'name' => self::DATA_TYPE_STR,
           'age' => self::DATA_TYPE_INT,
           'salary' => self::DATA_TYPE_DECIMAL,
           'address' => self::DATA_TYPE_STR
        //    'tax' => self::DATA_TYPE_DECIMAL,
 );
//  function mymethod($name,$address){
//  echo "welcome".$name."My address".$address;
// }
protected static $primaryKey = 'id';
public function __construct($name,$age,$salary,$address)
{
    global $connection;
    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
    $this->address = $address;
    // $this->tax = $tax;

}
public function __get($prop)
{
    return $this->$prop;
}
public function setName($name)
{
    $this->name = $name;
}
public function getTableName(){
    return self::$tableName;
}
// public function calculateeSalary(){}
}