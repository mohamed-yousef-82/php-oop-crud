
<h3 class="table-title"><span><?php echo $lang["BLOG"] ?></span><i class="fa fa-building" aria-hidden="true"></i></h3>
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
        <th>المحتوى بالعربية</th>
        <th>المحتوى بالإنجليزية</th>
        <th><?php echo $lang["IMG"] ?></th>
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
        <td><img class="td-img" src="/<?php echo $list["image"] ?>" /></td>
        <td>     
       
            <a class="start-btn orangered" href="/<?php echo $this->scope."/blog/delete/".$list["id"] ?>"><i class="fa fa-trash"></i></a>
            <a class="start-btn green"  href="/<?php echo $this->scope."/blog/edit/".$list["id"] ?>"><i class="fa fa-edit"></i></a>
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
<ul class='pages'>
    <?php
    echo $this->pagination;
    ?>
</ul>
<a class="start-btn blue" href="/<?php echo $this->scope ?>/blog/add"><?php echo $lang["ADDNEW"] ?></a>
<?php if(isset($_SESSION['message'])){ ?>
 <p class="message <?= isset($error)? 'error':''?>"><?= $_SESSION['message']?></p>
 <?php
 unset($_SESSION['message']);
 }
 ?>
