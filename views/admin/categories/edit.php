<h3 class="table-title"><span><?php echo $lang["EDIT"] ?></span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
<label>اسم القسم بالعربية :</label>
 <input type="text" name="name_ar" value="<?php echo $data['name_ar'] ?? false ?>" />
 <input type="hidden" name="id" value="<?php echo $data['id'] ?? false ?>" />
 <label>اسم القسم بالإنجليزية :</label>
 <input type="text" name="name_en" value="<?php echo $data['name_en'] ?? false  ?>" />
 <label>القسم الأب :</label>
 <select name="parent">
    <option value="0">بدون أب</option>
    <?php  
    foreach($data["all"] as $list){
    if($list["id"] != $data['id']){
?>
    <option value="<?php echo $list["id"] ?>"><?php echo $list["name_ar"] ?></option>
    <?php
}
}
?>
 </select>
 <input class="start-btn blue" type="submit" name="edit" value="<?php echo $lang["EDIT"] ?>" />
</form>
</div>