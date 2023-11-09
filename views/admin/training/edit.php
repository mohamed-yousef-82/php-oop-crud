<h3 class="table-title"><span><?php echo $lang["EDIT"] ?></span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $data['id'] ?? false ?>" />
 <label>المحتوى بالعربية:</label>
 <textarea name="content_ar"><?php echo $data['content_ar'] ?? false ?></textarea>
 <label>المحتوى بالإنجليزية:</label>
 <textarea name="content_en"><?php echo $data['content_en'] ?? false ?></textarea>
 <input class="start-btn blue" type="submit" name="edit" value="<?php echo $lang["EDIT"] ?>" />
</form>
</div>