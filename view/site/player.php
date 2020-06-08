      

      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     
                     <div class="blog_details">
                        <h2>Tên cầu thủ: <?=$pl->name?> | Số áo : <?=$pl->number?>
                        </h2>
                        <div class="feature-img">
                        <img class="img-fluid" src="upload/player/<?=$pl->avatar?>" alt=""><br>
                        </div>
                        <p class="excert">
        
                           <?=$pl->information?>
                        </p>
                     </div>
                  </div>




               </div>

               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                     <?php require"view/site/boxsearch.php"; ?>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--================Blog Area end =================-->