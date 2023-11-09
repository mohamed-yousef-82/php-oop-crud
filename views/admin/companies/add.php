<h3 class="table-title"><span><?php echo $lang["ADDNEW"] ?></span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post" enctype="multipart/form-data">
<label>المحتوى بالعربية:</label>
 <textarea class="textarea ar" name="content_ar"></textarea>
 <label>المحتوى بالإنجليزية:</label>
 <textarea  class="textarea" name="content_en"></textarea>
 <input class="start-btn blue" type="submit" name="add" value="<?php echo $lang["ADDNEW"] ?>" />
</form>
</div>
