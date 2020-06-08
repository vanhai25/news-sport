    <!-- banner part start-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Thẻ tag: <?php if(isset($tags)) echo $tags[0]->name ?></h2>
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
                    <?php foreach($tags as $show): ?>
                      <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-10">
                          <article class="blog_item">

                        
                        <div class="blog_details">
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
                        <h4 class="widget_title">Tin tức trong ngày</h4>
                        <ul class="list cat-list">
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Việt Nam đối đầu ThaiLand</p>
                                 <p>(37)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Việt Nam đối đầu ThaiLand</p>
                                 <p>(10)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Việt Nam đối đầu ThaiLand</p>
                                 <p>(03)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Việt Nam đối đầu ThaiLand</p>
                                 <p>(11)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Việt Nam đối đầu ThaiLand</p>
                                 <p>(21)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Việt Nam đối đầu ThaiLand</p>
                                 <p>(21)</p>
                              </a>
                           </li>
                        </ul>
                     </aside>
                     <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                           <img src="public/img/aboutvn.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                           <div class="media-body">
                              <a href="single-index.php?act=single-blog">
                                 <h3>Việt Nam đối đầu ThaiLand...</h3>
                              </a>
                              <p>January 12, 2019</p>
                           </div>
                        </div>
                        <div class="media post_item">
                           <img src="public/img/aboutvn3.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">                              
                           <div class="media-body">
                              <a href="single-index.php?act=single-blog">
                                 <h3>Việt Nam đối đầu ThaiLand...</h3>
                              </a>
                              <p>02 Hours ago</p>
                           </div>
                        </div>
                        <div class="media post_item">
                           <img src="public/img/aboutvn2.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">                              
                           <div class="media-body">
                              <a href="single-index.php?act=single-blog">
                                 <h3>Việt Nam đối đầu ThaiLand...</h3>
                              </a>
                              <p>03 Hours ago</p>
                           </div>
                        </div>
                        <div class="media post_item">
                           <img src="public/img/tin.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                           <div class="media-body">
                              <a href="single-index.php?act=single-blog">
                                 <h3>Việt Nam đối đầu ThaiLand...</h3>
                              </a>
                              <p>01 Hours ago</p>
                           </div>
                        </div>
                     </aside>
                     <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tìm kiếm hot</h4>
                        <ul class="list">
                           <li>
                              <a href="#">quang hải</a>
                           </li>
                           <li>
                              <a href="#">bóng đá</a>
                           </li>
                           <li>
                              <a href="#">football</a>
                           </li>
                           <li>
                              <a href="#">travel</a>
                           </li>
                           <li>
                              <a href="#">vòng loại wc2020</a>
                           </li>
                           <li>
                              <a href="#">2020</a>
                           </li>
                           <li>
                              <a href="#">bàn thắng</a>
                           </li>
                           <li>
                              <a href="#">công phượngk</a>
                           </li>
                        </ul>
                     </aside>
                     <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Tin liên quan</h4>
                        <ul class="instagram_row flex-wrap">
                           <li>
                              <a href="#">
                              <img src="public/img/gallery/hinh1.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <img src="public/img/gallery/hinh2.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <img src="public/img/gallery/hinh3.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <img src="public/img/gallery/hinh4.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <img src="public/img/gallery/hinh5.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <img src="public/img/gallery/hinh6.jpg" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                              </a>
                           </li>
                        </ul>
                     </aside>
                     <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <form action="#">
                           <div class="form-group">
                              <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder = 'Enter email' required >
                           </div>
                           <button class="button rounded-0 primary-bg text-white w-100" type="submit">Subscribe</button>
                        </form>
                     </aside>
                  </div>
               </div>
          </div>
      </div>
  </section>
  <!--================Blog Area =================-->