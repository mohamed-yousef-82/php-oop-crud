<div id="main-content" class="blog-page single">
            <h3 class="fullimg-width"><a href=""> <?php echo $lang["PORTFOLIO"] ?></a></h3>
                <div class="container">
                <div class="categories">
                <div class="row">
                <div class="col-lg-10 col-md-10">
                <div class="row">

<?php

if ($this->categories) {
  foreach($this->categories as $list){
    ?>
    <div class="col-md-4">
      <a class="catlink" href="/works/category/<?php echo $list['id']."/".str_replace(" ", "-", $list["name_".$LN])?>">
      <i class="fa-regular fa-folder-open"></i>
            <?php echo $list["name_".$LN] ?>
            
    </a>
    </div>
    <?php
  }
  ?>
</div>
</div>
<?php
} else {
  ?>
  <p class="nodatamsg">
    <?php echo $lang["NODATA"]; ?>
  </p>
  <?php
}
?>
</div>
