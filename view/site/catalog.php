    <!-- banner part start-->
    <section >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h4>Bảng tin</h4>
                        <h2><?php if(isset($cat)) echo $cat[0]->name ?></h2>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- blog_part part end-->


  <!--================Blog Area =================-->
  <section class="blog_area section_padding">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">
                    <?php foreach($cat as $show): ?>
                      <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-10">
                          <article class="blog_item">

                        
                        <div class="blog_details">
                         <img src="upload/post/<?=$show->img?>"/>
                          <span style="color:#999999"><?=$show->name?> | <?=$show->update_at?></span>
                            <a class="d-inline-block" href="tin-tuc/<?=$show->title_ko?>-<?=$show->id?>.html">
                                <h2><?=$show->title?></h2>
                            </a>
                            <p><?=$show->description?></p>
                            <ul class="blog-info-link">
                              <li><a href="#"><i class="far fa-user"></i> tin liên quan</a></li>
                              <li><a href="#"><i class="far fa-comments"></i> 03 bình luận</a></li>
                            </ul>
                        </div>
                      </article>
                        </div>
                      </div>
                    <?php endforeach ?>
                      

                      <!-- <nav class="blog-pagination justify-content-center d-flex">
                          <ul class="pagination">
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Previous">
                                      <i class="ti-angle-left"></i>
                                  </a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link">1</a>
                              </li>
                              <li class="page-item active">
                                  <a href="#" class="page-link">2</a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Next">
                                      <i class="ti-angle-right"></i>
                                  </a>
                              </li>
                          </ul>
                      </nav> -->
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                     <?php require"view/site/boxsearch.php"; ?>
                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Cầu thủ liên quan</h4>
                        <ul class="list cat-list">
                         
                           <li>
                              <a href="<?=$show->name_ko?>-<?=$show->id?>.info" class="d-flex">
                                 <p><?=$show->name?></p>
                                 
                              </a>
                           </li>
                           
                        </ul>
                     </aside>
                     <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Tin liên quan cùng giải đấu</h3>
                        
                        <div class="media post_item">
                           <img src="upload/post/<?=$show->img?>" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                           <div class="media-body">
                              <a href="tin-tuc/<?=$show->title_ko?>-<?=$show->id?>.html">
                                 <h4><?=$show->title?></h4>
                              </a>
                              <p></p>
                           </div>
                        </div>
                     

                     </aside>
                     <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Thẻ tags</h4>
                        <ul class="list">
                           
                           <li>
                              <a href=""><?=$show->name?></a>
                           </li>
                        

                        </ul>
                     </aside>
                     <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Tin liên quan</h4>
                        <ul class="instagram_row flex-wrap">
                           <li>
                              <a href="#">
                              <img src="public/template/img/gallery/hinh1.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <img src="public/template/img/gallery/hinh2.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <img src="public/template/img/gallery/hinh3.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <img src="public/template/img/gallery/hinh4.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <img src="public/template/img/gallery/hinh5.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <img src="public/template/img/gallery/hinh6.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                        </ul>
                     </aside>

          </div>
      </div>
  </section>
  <!--================Blog Area =================-->