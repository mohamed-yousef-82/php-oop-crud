
<h3 class="table-title"><span>أقسام سابقة الأعمال</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
    <?php
    $order = 1;
    if($data){
    ?>
<table class="table">
    <thead>
    <tr>
        <th><?php echo $lang["ORDER"] ?></th>
        <th>اسم القسم بالعربية</th>
        <th>اسم القسم بالإنجليزية</th>
        <th>القسم الأب</th>
        <th><?php echo $lang["ACTION"] ?></th>
    </tr>
    </thead>
<?php  

foreach($data as $list){


?>

    <tr>
    <td>
            <?php echo $order ?>
        <td><div class="td-content">
            <?php echo $list["name_ar"] ?>
            </div>
        </td>
        <td><div class="td-content">
            <?php echo $list["name_en"] ?>
            </div>
        </td>
        <td><div class="td-content">
            
            <?php
            foreach($data as $list2){
                if($list["parent"]==$list2["id"]){
                    echo $list2["name_ar"];
                }
            }

        ?>
            </div>
        </td>
        <td>     
       
            <a class="start-btn orangered" href="/<?php echo $this->scope."/categories/delete/".$list["id"] ?>"><i class="fa fa-trash"></i></a>
            <a class="start-btn green"  href="/<?php echo $this->scope."/categories/edit/".$list["id"] ?>"><i class="fa fa-edit"></i></a>
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

<a class="start-btn blue" href="/<?php echo $this->scope ?>/categories/add"><?php echo $lang["ADDNEW"] ?></a>
<?php if(isset($_SESSION['message'])){ ?>
 <p class="message <?= isset($error)? 'error':''?>"><?= $_SESSION['message']?></p>
 <?php
 unset($_SESSION['message']);
 }
 ?>
