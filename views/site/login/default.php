<?php
if(isset($_SESSION['username'])){
  header('Location:admin');
}
?>
<div class="login-page">
<form class="form" method="POST" action="">
<h3 class="text-center">تسجيل الدخول</h3>
<input class="form-control input-lg" name="username" type="text" placeholder="username" autocomplete="off"  />
<input class="form-control input-lg" name="password" type="password" placeholder="password" autocomplete="off"  />
<?php if (isset($_SESSION['message'])) { ?>
        <p class="message error"><?php echo $_SESSION['message'] ?></p>
        <?php
        unset($_SESSION['message']);
    }
    ?>
<input class="start-btn orangered"   name="login" type="submit" value="<?php echo $lang["LOGIN"]?>" />
</form>
</div>
