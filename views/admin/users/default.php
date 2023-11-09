
<h3 class="table-title"><span><?php echo $lang["USERS"] ?></span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<table class="table">
    <thead>
    <tr>
        <th><?php echo $lang["ORDER"] ?></th>
        <th><?php echo $lang["NAME"] ?></th>
        <th><?php echo $lang["EMAIL"] ?></th>
        <th><?php echo $lang["IMG"] ?></th>
        <th><?php echo $lang["ACTION"] ?></th>
    </tr>
    </thead>
<?php  
$order = 1;
if($data){
foreach($data as $list){
?>

    <tr>
    <td>
            <?php echo $order ?>
        <td>
            <?php echo $list["username"] ?>
    </td>
        <td><?php echo $list["email"] ?></td>
        <td><img style="width:100px" src="../<?php echo $list["image"] ?>" /></td>
        <td>     
       
            <a class="start-btn orangered" href="<?php echo PAGEPATH."/delete/".$list["id"] ?>"><i class="fa fa-trash"></i></a>
            <a class="start-btn green"  href="<?php echo PAGEPATH."/edit/".$list["id"] ?>"><i class="fa fa-edit"></i></a>
</td>
    </tr>

<?php
$order++;
}
}else{
    ?>
    <p><?php echo $lang["NODATA"] ?></p>
    <?php
}
?>
</table>
<a class="start-btn blue" href="<?php echo PAGEPATH ?>/add"><?php echo $lang["ADDNEW"] ?></a>
<?php if(isset($_SESSION['message'])){ ?>
 <p class="message <?= isset($error)? 'error':''?>"><?= $_SESSION['message']?></p>
 <?php
 unset($_SESSION['message']);
 }
 ?>
