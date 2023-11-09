<h3 class="table-title"><span><?php echo $lang["EDIT"] ?></span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label><?php echo $lang["NAME"] ?> :</label>
 <input type="text" name="username" value="<?php echo $data['username'] ?? false ?>" />
 <input type="hidden" name="id" value="<?php echo $data['id'] ?? false ?>" />
 <label><?php echo $lang["EMAIL"] ?> :</label>
 <input type="text" name="email" value="<?php echo $data['email'] ?? false  ?>" />
 <label><?php echo $lang["PASSWORD"] ?> :</label>
 <input type="text" name="password" value="<?php echo $data['password'] ?? false  ?>" />
 <label><?php echo $lang["IMG"] ?> :</label>
 <img style="width:100px" src="<?php echo $list["image"] ?>" />
 <input type="file" name="image" />
 <input class="start-btn blue" type="submit" name="edit" value="<?php echo $lang["EDIT"] ?>" />
</form>
</div>
