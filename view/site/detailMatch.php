      

      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="public/img/aboutvn3.jpg" alt="">
                        <img src="upload/post/<?=$show->img?>"/>
                     </div>
                     <div class="blog_details">
                        <h2>Trận đấu giữa: <?=$detail->match_m?>
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                           <li><a>Ngày: <?=$detail->date_m?></a></li>
                           <li><a> Sân đấu: <?=$detail->location?></a></li>
                        </ul>
                        <p class="excert">
                           <?=$detail->content?>
                        </p>
                     </div>
                  </div>

               </div>


            </div>
         </div>
      </section>
      <!--================Blog Area end =================-->