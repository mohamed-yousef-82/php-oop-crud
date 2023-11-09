<div class="col-lg-4 col-md-12 right-box">
                            <div class="card">
                                <div class="body search">
                                    <div class="input-group m-b-0">
                                        <form method="post" action="/blog/search" class="d-flex">
                                        <div class="input-group-prepend">
                                            <button type="submit" class="input-group-text"><i class="fa fa-search"></i></span>
                                        </div>
                                        <input type="text" name="search" class="form-control" placeholder="<?php echo $lang["SEARCH"]; ?>...">                                    
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo $lang["SHORTLINKS"]; ?></h2>
                                </div>
                                <div class="body widget">
                                    <ul class="list-unstyled categories-clouds m-b-0">
                                        <li><a href="/"><?php echo $lang["HOME"]; ?></a></li>
                                        <li><a href="/about"><?php echo $lang["WHOUS"]; ?></a></li>
                                        <li><a href="/"><?php echo $lang["PORTFOLIO"]; ?></a></li>
                                        <li><a href="/companies"> <?php echo $lang["COMSERVS"]; ?></a></li>
                                        <li><a href="/training"> <?php echo $lang["TRAINING"]; ?></a></li>
                                        <li><a href="/counting"><?php echo $lang["ACCOUNTING"]; ?></a></li>
                                        <li><a href="/feasibility"><?php echo $lang["FEASIBILITY"]; ?></a></li>
                                        <li><a href="/support"><?php echo $lang["SUPPORT"]; ?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo $lang["LASTARTICLES"]; ?></h2>                        
                                </div>
                                <div class="body widget popular-post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <?php
                                          if ($data) {
                                            foreach(array_slice($data, 0, 3)as $list){

                                            ?>
                                            <div class="sidebar_post">

                                                <div class="img-post">
                                                    <img class="img-fluid mb-3" src="/<?php echo $list["image"] ?>" >                                        
                                                </div>  
                                                <h3>
  <a href="/blog/article/<?php echo $list['id']."/".str_replace(" ", "-", $list["title_".$LN])?>"><?php echo $list["title_".$LN] ?></a>
  </h3>
                                                <a class="btn btn-warning news-btn" href="/blog/article/<?php echo $list['id']."/".str_replace(" ", "-", $list["title_".$LN])?>"><?php echo $lang["DETAILS"]; ?></a>
                                            </div>

                                            <?php
                                            }
                                            } else {
                                              ?>
                                              <p>
                                                <?php echo $lang["NODATA"]; ?>
                                              </p>
                                              <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>