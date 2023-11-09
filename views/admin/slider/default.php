
<h3 class="table-title"><span>السلايدر</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
    <?php
    $order = 1;
    if($data){
    ?>
<table class="table">
    <thead>
    <tr>
        <th><?php echo $lang["ORDER"] ?></th>
        <th>العنوان بالعربية</th>
        <th>العنوان بالإنجليزية</th>
        <th>الوصف بالعربية</th>
        <th>الوصف بالإنجليزية</th>
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
            <?php echo $list["title_ar"] ?>
            </div>
        </td>
        <td><div class="td-content">
            <?php echo $list["title_en"] ?>
            </div>
        </td>
        <td><div class="td-content"><?php echo $list["content_ar"] ?></div></td>
        <td><div class="td-content"><?php echo $list["content_en"] ?></div></td>
        <td>     
       
            <a class="start-btn orangered" href="/<?php echo $this->scope."/slider/delete/".$list["id"] ?>"><i class="fa fa-trash"></i></a>
            <a class="start-btn green"  href="/<?php echo $this->scope."/slider/edit/".$list["id"] ?>"><i class="fa fa-edit"></i></a>
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

<a class="start-btn blue" href="/<?php echo $this->scope ?>/slider/add"><?php echo $lang["ADDNEW"] ?></a>
<?php if(isset($_SESSION['message'])){ ?>
 <p class="message <?= isset($error)? 'error':''?>"><?= $_SESSION['message']?></p>
 <?php
 unset($_SESSION['message']);
 }
 ?>
