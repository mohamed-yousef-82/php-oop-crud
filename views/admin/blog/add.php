<h3 class="table-title"><span><?php echo $lang["ADDNEW"] ?></span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post" enctype="multipart/form-data">
 <label>العنوان بالعربية :</label>
 <input type="text" name="title_ar" value="" />
 <label>العنوان يالإنجليزية :</label>
 <input type="text" name="title_en" value="" />
 <label>المحتوى بالعربية :</label>
 <textarea  class="textarea" name="content_ar"></textarea>
 <label>المحتوى بالإنجليزية :</label>
 <textarea  class="textarea" name="content_en"></textarea>
 <label><?php echo $lang["IMG"] ?> :</label>
 <input type="file" name="image" />
 <input class="start-btn blue" type="submit" name="add" value="<?php echo $lang["ADDNEW"] ?>" />
</form>
</div>
