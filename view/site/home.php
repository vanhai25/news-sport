 <!-- banner part start-->
    <section class="banner_part" style="background-image: url('public/template/img/banner2.jpg')">
        <div class="container">
            <div class="row align-content-center">
                <div class="col-lg-7 col-xl-5">
                    <div class="banner_text">
                        <h1><span>THÔNG TIN &</span><br> 
                    BÓNG ĐÁ</h1>
                        <p>WEBSITE tin tức về đội tuyển VN ,cập nhập mới nhất </p>
                        <?php if(isset($_SESSION['id_user'])): ?>
                            <a href="logout.php" class="btn_1">ĐĂNG XUẤT <span class="ti-angle-right"></span> </a>
                            <?php else: ?>
                        <a href="dang-nhap" class="btn_1">ĐĂNG NHẬP <span class="ti-angle-right"></span> </a>
                    <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
<!-- blog_part part end-->
    <section>

            
        <div class="new">
            <?php for($i=0; $i<2;$i++): ?>
            <div class="card">
                <div class="bg_video">
                        <img src="upload/post/<?=$news[$i]->img?>" class="card-img" alt="...">
                    </div>
                <div class="card-img_overlay">
                    
                    <div class="play_icon">
                        <a id="play-video" class="video-play-button popup-youtube d-none d-lg-block"  href="public/template/template/video/video1.mp4" >

                            <span class="icon_button"><img src="public/template/img/icon/play.png">
                        
                            </span>
                        </a>
                    </div>
                    <h5 class="title_img"><a href="tin-tuc/<?=$news[$i]->title_ko?>-<?=$news[$i]->id?>.html"><?=$news[$i]->title?></a></h5>
                        <div class="icon_bottom">
                            <span><p class="rounded float-left"><small> 10h | news</small></p></span> 
                        </div>
                </div>
            </div>
            <?php endfor ?>
        </div>
    
        <div class="new2">
            <?php for($i=2; $i<count($news);$i++): ?>
            <div class="card_row" >
                <img src="upload/post/<?=$news[$i]->img?>" class="card-img-top" alt="...">
                <div class="card-body">
                                <h3><a style="color:black;" href="tin-tuc/<?=$news[$i]->title_ko?>-<?=$news[$i]->id?>.html"><strong><?=$news[$i]->title?>  </strong></a></h3>
                                  <p class="card-text"><?=$news[$i]->description?></p>
                              </div>

            </div>
            <?php endfor ?>


        </div>
       
        
    </section>
      <?php for($i=1;$i<count($newsHot);$i++): ?>
    <!-- about part start-->
    <section class="about_part">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 offset-xl-1 col-xl-4">
                    <div class="about_img">
                        <img src="upload/post/<?=$newsHot[$i]->img?>" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="about_text">
                        <h4>tinhot<h4>
                        <h2><?=$newsHot[$i]->title?></h2>
                        <p><?=$newsHot[$i]->description?></p>
                        <a href="tin-tuc/<?=$newsHot[$i]->title_ko?>-<?=$newsHot[$i]->id?>.html" class="btn_2">xem chi tiết</a>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <?php endfor ?>
    <!-- about part start-->

    <!-- about part start-->
    <?php for($i=0; $i<1;$i++): ?>
    <section class="about_part recreational_part">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 offset-xl-1 col-xl-4">
                    <div class="about_text">
                        <h4>tinhot<h4>
                        <h2><?=$newsHot[$i]->title?></h2>
                        <p><?=$newsHot[$i]->description?></p>
                        <a href="tin-tuc/<?=$newsHot[$i]->title_ko?>-<?=$newsHot[$i]->id?>.html" class="btn_2">xem chi tiết</a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="about_img">
                        <img src="upload/post/<?=$newsHot[$i]->img?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endfor ?>
    <!-- about part start-->
    <!-- upcoming_event part start-->
  
    <section class="upcoming_event section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h4></h4>
                        <h2>TRẬN ĐẤU TIẾP THEO</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($match as $show): ?>
                <div class="col-md-6 col-xl-6">
                    <div class="upcoming_event_1">
                        <img src="upload/post/<?=$show->img?>" alt="#">
                        <div class="upcoming_event_text">
                            <div class="date">
                                <h3><?=$show->date_m?></h3>
                            </div>
                            <div class="time">
                                <ul class="list-unstyle">
                                    <li> <span class="ti-time"></span><?=$show->hour_m?></li>
                                    <li> <span class="ti-location-pin"></span> <?=$show->location?></li>
                                </ul>
                            </div>
                            <p><?=$show->match_m?> </p>
                            <a href="chitiet-trandau-<?=$show->id?>.html" class="btn_2">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <!-- upcoming_event part start-->
    <!-- player info part start-->
    <section class="player_info section_padding">
        <div class="container">
            <div class="row">
                <div class="player_info_item owl owl-carousel">
                    <?php foreach($news as $show): ?>
                    <div class="player_info_iner">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-xl-5">
                                <div class="player_info_img">
                                    <img src="upload/post/<?=$show->img?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 offset-xl-1 col-xl-5">
                                <div class="player_info_text">
                                    <h3>TRƯỚC GIÒ BÓNG LĂN</h3>
                                    <p><?=$show->description?></p>
                                    <a href="tin-tuc/<?=$show->title_ko?>-<?=$show->id?>.html" class="">Chi tiết</a> <img src="public/template/img/ball.png" alt=""
                                    style="width:25px;height:25px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
    <!-- about part start-->

    <!-- player info part start-->
 


        <section class="gallery_part">
            <section class="bg_card_video" style="background-image: url(public/template/img/football.jpg);">
                
                

                <div class="new_video">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner" >
                        <div class="carousel-item active">
                            <?php foreach($video as $show): ?>
                            <div class="card">
                                <div class="bg_video">
                                    <img src="upload/post/<?=$show->img?>" class="card-img" alt="...">
                                </div>
                                <div class="card-img_overlay">
                                    <div class="play_icon">
                                        <a id="play-video" class="video-play-button popup-youtube d-none d-lg-block"  href="<?=$show->video?>" >
                                            <span class="icon_button"><img src="public/template/img/icon/play.png"></span>
                                        </a>
                                    </div>
                                        <h5 class="title_img">Video</h5>
                                        <div class="icon_bottom">
                                            <span><p class="rounded float-left"><small> 10h | news</small></p></span>
                                        </div>
                                </div>
                            </div>
                        <?php endforeach ?>
     
                        </div>

                            
                    </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h4>Phòng ảnh</h4>
                        <h2>Điểm nhấn của năm 2019</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery_part_item">
                        <div class="grid">
                            <div class="grid-sizer"></div>
                            <a href="public/template/template/img/gallery/hinh1.jpg" class="grid-item grid-item--height1 bg_img img-gal" style="background-image: url('public/template/img/gallery/hinh1.jpg')">
                                <div class="single_gallery_item">
                                    <div class="single_gallery_item_iner">
                                        <div class="gallery_item_text">
                                            <h3>Face is had place image</h3>
                                            <p>Swords Club vs Uknights Club</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="public/template/template/img/gallery/hinh2.jpg" class="grid-item grid-item--height2 bg_img img-gal" style="background-image: url('public/template/img/gallery/hinh2.jpg')">
                                <div class="single_gallery_item">
                                    <div class="single_gallery_item_iner">
                                        <div class="gallery_item_text">
                                            <h3>Face is had place image</h3>
                                            <p>Swords Club vs Uknights Club</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="public/template/template/img/gallery/hinh8.jpg" class="grid-item grid-item--width2 grid-item--height2 bg_img img-gal" style="background-image: url('public/template/img/gallery/hinh8.jpg')">
                                <div class="single_gallery_item">
                                    <div class="single_gallery_item_iner">
                                        <div class="gallery_item_text">
                                            <h3>Face is had place image</h3>
                                            <p>Swords Club vs Uknights Club</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="public/template/template/img/gallery/hinh5.jpg" class="grid-item grid-item--height3 bg_img img-gal" style="background-image: url('public/template/img/gallery/hinh5.jpg')">
                                <div class="single_gallery_item">
                                    <div class="single_gallery_item_iner">
                                        <div class="gallery_item_text">
                                            <h3>Face is had place image</h3>
                                            <p>Swords Club vs Uknights Club</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="public/template/template/img/gallery/hinh6.jpg" class="grid-item grid-item--height3 bg_img img-gal" style="background-image: url('public/template/img/gallery/hinh6.jpg')">
                                <div class="single_gallery_item">
                                    <div class="single_gallery_item_iner">
                                        <div class="gallery_item_text">
                                            <h3>Face is had place image</h3>
                                            <p>Swords Club vs Uknights Club</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="public/template/template/img/gallery/hinh3.jpg" class="grid-item grid-item--width2 grid-item--height2 bg_img img-gal" style="background-image: url('public/template/img/gallery/hinh3.jpg')">
                                <div class="single_gallery_item">
                                    <div class="single_gallery_item_iner">
                                        <div class="gallery_item_text">
                                            <h3>Face is had place image</h3>
                                            <p>Swords Club vs Uknights Club</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="public/template/template/img/gallery/hinh7.jpg" class="grid-item grid-item--height2 bg_img img-gal" style="background-image: url('public/template/img/gallery/hinh7.jpg')">
                                <div class="single_gallery_item">
                                    <div class="single_gallery_item_iner">
                                        <div class="gallery_item_text">
                                            <h3>Face is had place image</h3>
                                            <p>Swords Club vs Uknights Club</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="public/template/template/img/gallery/hinh4.jpg" class="grid-item grid-item--height1 bg_img img-gal" style="background-image: url('public/template/img/gallery/hinh4.jpg')">
                                <div class="single_gallery_item">
                                    <div class="single_gallery_item_iner">
                                        <div class="gallery_item_text">
                                            <h3>Face is had place image</h3>
                                            <p>Swords Club vs Uknights Club</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part start-->

    

    <!-- social_connect_part part start-->
    <section class="social_connect_part">
        <div class="container-fluid">
            <div class="row justify-content-center ">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h4></h4>
                        <h2> theo dõi    Instagram</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="social_connect">
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="public/template/img/insta/thongtin.jpg" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a> 
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="public/template/img/insta/thongtin2.jpg" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a> 
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="public/template/img/insta/thongtin.jpg" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a> 
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="public/template/img/insta/thongtin.jpg" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a> 
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="public/template/img/insta/thongtin2.jpg" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a> 
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="public/template/img/insta/thongtin.jpg" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- social_connect_part part end-->