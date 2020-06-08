      

      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="public/template/img/aboutvn3.jpg" alt="">
                     </div>
                     <div class="blog_details">
                        <h2><?=$post->title?>
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                           <li><a href="<?=$news->name_ko?>"><i class="far fa-user"></i> <?=$post->name?></a></li>
                           <li><a href="#"><i class="far fa-comments"></i> <?=count($cm)?> Bình luận</a></li>
                        </ul>
                        <p class="excert">
                           <b><?=$post->description?></b><br>
                           <?=$post->content?>
                        </p>
                     </div>
                  </div>
                  <div class="navigation-top">
                     <div class="d-sm-flex justify-content-between text-center">


                        <div class="col-sm-4 text-center my-2 my-sm-0">
                           <!-- <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class="social-icons">
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                           <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                     </div>
                     <div class="navigation-area">
                        <div class="row">
                           <?php for($i=0;$i<1;$i++): ?>
                           <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                              <div class="thumb">
                                 <a href="tin-tuc/<?=$newsx[$i]->title_ko?>-<?=$newsx[$i]->id?>.html">
                                 <img class="img-fluid" src="upload/post/<?=$newsx[$i]->img?>" alt="" style="width: 60px;height: 60px;object-fit: cover;">
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                                 </a>
                              </div>
                              <div class="detials">
                                 <p>Prev Post</p>
                                 <a href="tin-tuc/<?=$newsx[$i]->title_ko?>-<?=$newsx[$i]->id?>.html">
                                    <h4><?=$newsx[$i]->title?></h4>
                                 </a>
                              </div>
                           </div>
                           <?php endfor ?>
                           <?php for($i=1;$i<2;$i++): ?>
                           <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                              <div class="detials">
                                 <p>Next Post</p>
                                 <a href="tin-tuc/<?=$newsx[$i]->title_ko?>-<?=$newsx[$i]->id?>.html">
                                    <h4><?=$newsx[$i]->title?></h4>
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="#">
                                       <span class="lnr text-white ti-arrow-right"></span>
                                 </a>
                              </div>
                              <div class="thumb">
                                 <a href="tin-tuc/<?=$newsx[$i]->title_ko?>-<?=$newsx[$i]->id?>.html">
                                 <img class="img-fluid" src="public/post/<?=$newsx[$i]->img?>" alt="" style="width: 60px;height: 60px;object-fit: cover;">
                                 <img class="img-fluid" src="upload/post/<?=$newsx[$i]->img?>" alt="" style="width: 60px;height: 60px;object-fit: cover;">
                                 </a>
                              </div>
                           </div>
                           <?php endfor ?>
                        </div>
                     </div>
                  </div>

                  <?php if(isset($_SESSION['id_user'])): ?>
                  <div class="comment-form">
                     <h4>Bình luận</h4>
                     <?php if(isset($mess)) echo $mess; if(isset($er)) echo $er; ?>
                     <form class="form-contact comment_form" method="POST" id="commentForm">
                        <div class="row">
                           
                           <div class="col-12">
                              <div class="form-group">
                                 <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                              </div>
                           </div>

                          
                        </div>
                        <div class="form-group">
                           <button type="submit" name="sm" class="button button-contactForm">Gửi</button>
                        </div>
                     </form>
                  </div>
                  <?php else: ?>
                     <p>Vui lòng <a href="dang-nhap">Đăng nhập</a> để bình luận</p>
                  <?php endif ?>
                  <div class="comments-area">
                     <h4><?=count($cm)?> Bình luận</h4>
                     <?php foreach($cm as $show): ?>
                     <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <img src="upload/<?=$show->avatar?>" alt="">
                              </div>
                              <div class="desc">
                                 <p class="comment">
                                    <?=$show->comment?> 
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a><?=$show->name?></a>
                                       </h5>
                                       <p class="date"><?=$show->update_at?> </p>
                                    </div>
               
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php endforeach ?>
  
                  </div>

               </div>

               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                     <?php require"view/site/boxsearch.php"; ?>
                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Cầu thủ liên quan</h4>
                        <ul class="list cat-list">
                           <?php foreach($pl as $show): ?>
                           <li>
                              <a href="<?=$show->name_ko?>-<?=$show->id?>.info" class="d-flex">
                                 <p><?=$show->name?></p>
                                 <p>(<?=$show->number?>)</p>
                              </a>
                           </li>
                           <?php endforeach ?>
                        </ul>
                     </aside>
                     <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Tin liên quan cùng giải đấu</h3>
                        <?php foreach($recent as $show): ?>
                        <div class="media post_item">
                           <img src="upload/post/<?=$show->img?>" alt="post" style="width: 80px;height: 80px;object-fit: cover;">
                           <div class="media-body">
                              <a href="tin-tuc/<?=$show->title_ko?>-<?=$show->id?>.html">
                                 <h4><?=$show->title?></h4>
                              </a>
                              <p><?=$show->update_at?></p>
                           </div>
                        </div>
                     <?php endforeach ?>

                     </aside>
                     <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Thẻ tags</h4>
                        <ul class="list">
                           <?php foreach($tags as $show): ?>
                           <li>
                              <a href="<?=$show->name_ko?>.tag"><?=$show->name?></a>
                           </li>
                        <?php endforeach ?>

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
      <!--================Blog Area end =================-->