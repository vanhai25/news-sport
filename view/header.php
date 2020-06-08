<?php  require"_header.php"; 

?>
<!doctype html>
<html lang="en">

<head>
    <base href="<?=BASE_URL?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VIETNAMFC || Home</title>
    <link rel="icon" href="public/template/img/ball.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/template/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="public/template/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="public/template/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="public/template/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="public/template/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="public/template/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="public/template/css/swiper.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="public/template/css/style.css">
</head>
<style >
   div.card img.card-img-team{
      height: 197px;
      width: 300px;
      object-fit: cover;
   }
</style>

<body>
    <!--::header part start::-->
    <header class="header_area">
        <div class="sub_header">
            <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-4 col-xl-6">                    
                      <div id="logo">
                          <a href="trang-chu"><img src="public/template/img/logoVN.png" alt="" title="" style="width: auto;height: 50px" /></a>
                      </div>
                  </div>
                  <div class="col-md-8 col-xl-6">
                      <div class="sub_header_social_icon float-right">
                        <?php if(isset($_SESSION['name_user'])):?>
                            <a href="#"><i class="flaticon-user"></i><?=$_SESSION['name_user']?></a>
                        <?php endif ?>
                        <a href="#"><i class="flaticon-phone"></i>0965 350 917</a>
                        <a href="dang-ky" class="register_icon"><i class="ti-arrow-right"></i>ĐĂNG KÝ </a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link active" href="index.php">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tin-tuc" class="nav-link">Tin tức</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="doi-hinh" class="nav-link">Đội hình</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="thu-vien" class="nav-link">Thư viện</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="lich-su" class="nav-link">Lịch sử</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Giải đấu
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?php foreach($catalog as $show): ?>
                                            <a class="dropdown-item" href="<?=$show->name_ko?>"><?=$show->name?></a>
                                            <?php endforeach ?>
                                        </div>
                                    </li>
          
                                    <li class="nav-item">
                                        <a href="lien-he" class="nav-link">Liên hệ</a>
                                    </li>
                                </ul>
                                <div class="header_social_icon d-none d-lg-block">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li>
                                            <a href="#"> <i class="ti-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        <li><a href="#"><i class="ti-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="header_social_icon d-block d-lg-none">
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li>
                                    <a href="#"> <i class="ti-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="#"><i class="ti-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

   