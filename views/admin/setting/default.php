<h3 class="table-title"><span>
        الإعدادات
    </span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">

  <div class="panel">
  <form class="form add-form" method="post"  enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $data['id'] ?? false ?>" />
 <label>رقم الواتساب:</label>
 <input type="text" name="whatsapp" value="<?php echo $data['whatsapp'] ?? false ?>" />
 <label>البريد الإلكتروني:</label>
 <input type="text" name="email" value="<?php echo $data['email'] ?? false ?>" />
 <label>رابط الفيسبوك:</label>
 <input type="text" name="facebook" value="<?php echo $data['facebook'] ?? false ?>" />
 <label>رابط تويتر:</label>
 <input type="text" name="twitter" value="<?php echo $data['twitter'] ?? false ?>" />
 <label>رابط اليوتيوب:</label>
 <input type="text" name="youtube" value="<?php echo $data['youtube'] ?? false ?>" />
 <label>رابط لينكدان:</label>
 <input type="text" name="linkedin" value="<?php echo $data['linkedin'] ?? false ?>" />
 <label>رابط انستجرام:</label>
 <input type="text" name="instagram" value="<?php echo $data['instagram'] ?? false ?>" />
 <input class="start-btn blue" type="submit" name="edit" value="<?php echo $lang["EDIT"] ?>" />
</form>
  </div>

  <?php if (isset($_SESSION['message'])) { ?>
        <p class="message <?= isset($error) ? 'error' : '' ?>"><?= $_SESSION['message'] ?></p>
        <?php
        unset($_SESSION['message']);
    }
    ?>
  <!-- <a class="start-btn green" href="<?php echo PAGEPATH . "/edit/" . $data["id"] ?>">تعديل الإعدادات</a> -->


                    

      