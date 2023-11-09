<div class="row stats">
      <div class="box box-1">
        <div class="stat">
          <i class="fa fa-balance-scale" aria-hidden="true"></i>
          <p>الخدمات</p>
          <span><a href="/admin">6</a></span>
        </div>
      </div>
      <div class="box box-1">
        <div class="stat">
          <i class="fa fa-users" aria-hidden="true"></i>
          <p>المستخدمين</p>
          <span><a href="/admin/users"><?php echo $data['userscount'] ?></a></span>
        </div>
      </div>
      <div class="box box-1">
        <div class="stat">
          <i class="fa fa-pencil" aria-hidden="true"></i>
          <p>المدونة</p>
          <span><a href="/admin/blog"><?php echo $data['blogscount'] ?></a></span>
        </div>
      </div>
      <div class="box box-1">
        <div class="stat">
          <i class="fa fa-cubes" aria-hidden="true"></i>
          <p>سابقة الأعمال</p>
          <span><a href="/admin/works"><?php echo $data['workscount'] ?></a></span>
        </div>
      </div>
      <div class="box box-1">
        <div class="stat">
          <i class="fa fa-image" aria-hidden="true"></i>
          <p>السلايدر</p>
          <span><a href="/admin/slider"><?php echo $data['slidercount'] ?></a></span>
        </div>
      </div>
    </div>

    <div class="row top-space">
    <div class="box box-1">
<div class="panel">
      <h3 class="section-title"><i class="fa fa-folder-open" aria-hidden="true"></i>أحدث المقالات</h3>
          <ul>
          <?php
          if($data['blog']){
          foreach($data['blog'] as $list){


            ?>
            <li class="dash-row">
            <span><?php echo $list['title_ar']; ?></span>
            <div class="dash-details">
            <img style="width:80px;height:70px;" src="<?php echo $list['image']; ?>" />
            <div class="dash-control">

          </div>
          <div style="display:flex;align-items:flex-start;">
          <a class="start-btn orangered" href="/<?php echo $this->scope."/blog/delete/".$list["id"] ?>"><i class="fa fa-trash"></i></a>
            <a class="start-btn green"  href="/<?php echo $this->scope."/blog/edit/".$list["id"] ?>"><i class="fa fa-edit"></i></a>
            <a class="start-btn dark dash-active" target="_blank"  href="/<?php echo "blog/article/".$list["id"] ?>"><i class="fa fa-eye"></i></a>
          </div>


          </div>
          </li>
          <?php
                    }
                  }else{
                    echo "<p>لا يوجد بيانات لعرضها</p>";
                  }
          ?>
          </ul>
        </div>
</div>
<div class="box box-1">
<div class="panel">
      <h3 class="section-title"><i class="fa fa-folder-open" aria-hidden="true"></i>أحدث الأعمال</h3>
          <ul>
          <?php
          if($data['works']){
          foreach($data['works'] as $list){


            ?>
            <li class="dash-row">
            <span><?php echo $list['title_ar']; ?></span>
            <div class="dash-details">
            <img style="width:80px;height:70px;" src="<?php echo $list['image']; ?>" />
            <div class="dash-control">

          </div>
          <div style="display:flex;align-items:flex-start;">
          <a class="start-btn orangered" href="/<?php echo $this->scope."/works/delete/".$list["id"] ?>"><i class="fa fa-trash"></i></a>
            <a class="start-btn green"  href="/<?php echo $this->scope."/works/edit/".$list["id"] ?>"><i class="fa fa-edit"></i></a>
            <a class="start-btn dark dash-active" target="_blank"  href="/<?php echo "works/article/".$list["id"] ?>"><i class="fa fa-eye"></i></a>
          </div>


          </div>
          </li>
          <?php
                    }
                  }else{
                    echo "<p>لا يوجد بيانات لعرضها</p>";
                  }
          ?>
          </ul>
        </div>
</div>
</div>