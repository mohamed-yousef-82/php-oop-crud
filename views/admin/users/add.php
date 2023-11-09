<h3 class="table-title"><span><?php echo $lang["ADDNEW"] ?></span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post" enctype="multipart/form-data">
 <label><?php echo $lang["NAME"] ?> :</label>
 <input type="text" name="username" value="" />
 <label><?php echo $lang["EMAIL"] ?> :</label>
 <input type="email" name="email" value="" />
 <label><?php echo $lang["PASSWORD"] ?> :</label>
 <input type="password" name="password" value="" />
 <input type="file" name="image" />
 <input class="start-btn blue" type="submit" name="add" value="<?php echo $lang["ADDNEW"] ?>" />
</form>
</div>
