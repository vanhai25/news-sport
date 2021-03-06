
      <!-- player info part start-->
      <section class="team_member section_padding padding_less_40" style="margin-bottom: 200px;">
         <div class="container">
            <div class="row">
               <?php foreach($player as $show): 
                  $name = explode(' ',$show->name);
                  ?>
               <div class="col-sm-6 col-lg-3">
                  <div class="single_team_member single-home-blog">
                     <div class="card">
                      <a href="<?=$show->name_ko?>-<?=$show->id?>.info">
                        <img src="upload/player/<?=$show->avatar?>" class="card-img-team" alt="blog">
                      </a>
                        <div class="card-body">
                           <div class="tean_content">
                              <a href="<?=$show->name_ko?>-<?=$show->id?>.info" class="blog_item_date">
                                 <h3><?=$show->number?></h3>
                              </a>
                              <a href="<?=$show->name_ko?>-<?=$show->id?>.info">
                                 <h5 class="card-title"><?=$name[0]?></h5>
                              </a>
                              <h5><?php for($i=1;$i<count($name);$i++) echo $name[$i].' ';  ?></h5>
                           </div>
                           <div class="tean_right_content">
                              <div class="header_social_icon">
                                 <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li>
                                       <a href="#"> <i class="ti-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endforeach ?>
               
            </div>
         </div>
      </section>
      <!-- about part start-->
      <!-- player info part start-->


      <!-- social_connect_part part start-->

    <!-- social_connect_part part end-->