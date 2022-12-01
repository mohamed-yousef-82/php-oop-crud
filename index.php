<?php
session_start();
require_once "db.php";
require_once "abstract-model.php";
require_once "employee.php";
if (isset($_POST['submit'])){
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST,'address',FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_NUMBER_INT);
    $salary = filter_input(INPUT_POST,'salary',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
    // $tax = filter_input(INPUT_POST,'tax',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
    if(isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])){
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    if ($id > 0){
    $user = Employee::getByPK($id);
    $user->name = $name;
    $user->age = $age;
    $user->salary = $salary;
    $user->address = $address;


    // $user->tax = $tax;
}
    }else{
        $user = new Employee($name,$age,$salary,$address);
    }
    if ($user->save() === true){
       $_SESSION['message'] = 'Employee,saved successfuly';
       header('Location: /php-oop-crud');
       Session_write_close();
       exite;

    }else{
        $error = true;
        $_SESSION['message'] = 'Error saved employee'.$name;
    }

    
}
    if(isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])){
        $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
        if ($id > 0){
        $user = Employee::getByPK($id);
        // echo $user;
        }
    }
    
    if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])){
        $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
        if ($id > 0){
            $user = Employee::getByPK($id);
            if($user->delete() === true){
                $_SESSION['message'] = 'Employee deleted successfuly';
                header('Location:/php-oop-crud');
                Session_write_close();
                exite;
            }
            }
    }


$result = Employee::getAll();


?>
<!doctype html>
<html>
<body>
<form method="post">
<fieldset>
<legend>Employee Information</legend>
<?php if(isset($_SESSION['message'])){ ?>
 <p class="message <?= isset($error)? 'error':''?>"><?= $_SESSION['message']?></p>
 <?php 
 unset($_SESSION['message']);
 }
 ?>
 <label>Name :</label>
 <input type="text" name="name" value="<?= isset($user) ? $user->name:'' ?>" />
 <label>Age :</label>
 <input type="text" name="age" value="<?= isset($user) ? $user->age:'' ?>" />
 <label>Sallary :</label>
 <input type="text" name="salary" value="<?= isset($user) ? $user->salary:'' ?>" />
 <label>Address :</label>
 <input type="text" name="address" value="<?= isset($user) ? $user->address:'' ?>" />
 <!-- <label>Tax :</label>
 <input type="text" name="tax" /> -->
 <input type="submit" name="submit" />
</fieldset>
</form>
<?php 
if(false !== $result){
foreach($result as $employee){
    ?>
<p><b>Name :</b><?= $employee->name ?></p>
<p><b>Age :</b><?= $employee->age ?></p>
<p><b>Sallary :</b><?= $employee->salary ?></p>
<p><b>Address :</b><?= $employee->address ?></p>

<a href="/php-oop-crud/?action=edit&id=<?=$employee->id ?>">edit</a>
<a href="/php-oop-crud/?action=delete&id=<?=$employee->id ?>">delete</a>
<?php
}
}else{
    echo "<p>no data</p>";
}
?>
</body>
</html>