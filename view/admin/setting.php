

<!-- $idtype,$iduser,$imgname,$alt_img,$title,$titleko,$ndesc,$content,$title_seo,$ndesc_seo,$key_seo,$status -->



            <div class="container">
              <h2>Cập nhật dữ liệu</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
                  </ol>
                </nav>
                <!-- Tab links -->
                  <div class="tabc">
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Thông tin chung</button>

                  </div>

                  <div id="London" class="tabcontentc">

                    <p>Các thông tin liên quan bên ngoài bài viết</p>
                    <h3>Cập nhật dữ liệu</h3>
                    <?php if(isset($message)) echo $message; ?>
                            <form class="form-horizontal"  method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Tên tài khoản</label>
                                <div class="col-sm-10">
                                  <input name="name" type="text" value="<?=$data->name?>" class="form-control" id="title">
                                </div>
                              </div>


                              <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Email</label>
                                <div class="col-sm-10">
                                  <input name="mail" type="mail" value="<?=$data->mail?>" class="form-control" id="title">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Mật khẩu</label>
                                <div class="col-sm-10">
                                  <input name="pass" type="password" value="<?=$data->pass?>" class="form-control" id="title">
                                </div>
                              </div>

                              
                              <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button name="sm" type="submit" class="btn btn-primary">Hoàn tất</button>
                                </div>
                              </div>
                        </div>

              

     

          
                            </form>




            </div>
        
