<?php
try{
    $connection = new PDO("mysql://hostname=localhost;dbname=training","root","");
}catch(PDOException $e){
    echo "wrong";
    // throw Exception->get_message();
    // throw new Exception("The value has to be 1 or lower");
    // echo 'Message: ' .$e->getMessage();
}
?>