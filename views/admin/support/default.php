<h3 class="table-title"><span>
        <?php echo $lang["SUPPORT"] ?>
    </span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
        if ($data) {
            ?>
  <div class="panel">
    <h3 class="panel-title">المحتوى بالعربية</h3>
    <div class="content">
    <pre>
    <?php echo $data["content_ar"] ?? "لا يوجد محتوي لعرضه" ?>
    </pre>
    </div>
  </div>
  <div class="panel">
    <h3 class="panel-title">المحتوى بالإنجليزية</h3>
    <div class="content">
    <pre>
    <?php echo $data["content_en"] ?? "No Data To Show" ?>
     </pre>
    </div>
  </div>
  <?php if (isset($_SESSION['message'])) { ?>
        <p class="message <?= isset($error) ? 'error' : '' ?>"><?= $_SESSION['message'] ?></p>
        <?php
        unset($_SESSION['message']);
    }
    ?>
  <a class="start-btn green" href="<?php echo PAGEPATH . "/edit/" . $data["id"] ?>">تعديل المحتوى</a>


                    

            <?php

        } else {
            ?>
            <p><?php echo $lang["NODATA"];?></p>
 
                <a class="start-btn blue" href="<?php echo PAGEPATH ?>/add"><?php echo $lang["ADDNEW"] ?></a>

            <?php
        }
        ?>

