<h3 class="table-title"><span><?php echo $lang["EDIT"] ?></span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
<label>العنوان بالعربية :</label>
 <input type="text" name="title_ar" value="<?php echo $data['title_ar'] ?? false ?>" />
 <input type="hidden" name="id" value="<?php echo $data['id'] ?? false ?>" />
 <label>العنوان يالإنجليزية :</label>
 <input type="text" name="title_en" value="<?php echo $data['title_en'] ?? false  ?>" />
 <label>المحتوى بالعربية :</label>
 <textarea  class="textarea" name="content_ar"><?php echo $data['content_ar'] ?? false  ?></textarea>
 <label>المحتوى بالإنجليزية :</label>
 <textarea  class="textarea" name="content_en"><?php echo $data['content_en'] ?? false  ?></textarea>
 <label>القسم :</label>
 <select name="category_id" required>
    <?php  
foreach($data['categories'] as $category){
?>
    <option value="<?php echo $category["id"] ?>" <?php if($category["id"] == $data['category_id']){echo "selected";} ?>><?php echo $category["name_ar"] ?></option>
    <?php
}
?>
 </select>
 <label><?php echo $lang["IMG"] ?> :</label>
 <img style="width:100px" src="/<?php echo $data["image"] ?? false ?>" />

 <input type="file" name="image" />
 <input type="hidden" name="oldfile" value="<?php echo $data['image'] ?? false  ?>" />
 <input class="start-btn blue" type="submit" name="edit" value="<?php echo $lang["EDIT"] ?>" />
</form>
</div>