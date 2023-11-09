<div id="main-content" class="blog-page single">
            <h3 class="fullimg-width"><a href=""> <?php echo $data["title_".$LN] ?? false ?></a></h3>
                <div class="container">
                <div class="singlepage">
<?php
if ($data) {

  ?>
 <div class="blogpost">
  <img style="width:100px" src="/<?php echo $data["image"] ?>" alt="">
  <h4><?php echo $data["title_".$LN] ?></h4>
  <p><?php echo $data["content_".$LN] ?></p>
 </div>

  <?php

} else {
  ?>
  <p>
    <?php echo $lang["NODATA"]; ?>
  </p>


  <?php
}
?>
