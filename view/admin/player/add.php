

<!-- $idtype,$iduser,$imgname,$alt_img,$title,$titleko,$ndesc,$content,$title_seo,$ndesc_seo,$key_seo,$status -->



            <div class="container">
              <h2>Thêm dữ liệu</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
                  </ol>
                </nav>
                <a href="index.php?com=player&act=list"><button type="button" class="btn">Thoát</button></a>
                <!-- Tab links -->
                  <div class="tabc">
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Thông tin chung</button>

                  </div>

                  <div id="London" class="tabcontentc">

                    <p>Các thông tin liên quan bên ngoài bài viết</p>
                    <h3>Nhập dữ liệu</h3>
                    <?php if(isset($message)) echo $message; ?>
                            <form class="form-horizontal"  method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Tên cầu thủ</label>
                                <div class="col-sm-10">
                                  <input name="name" type="text" class="form-control" id="title">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="file">Tải hình ảnh:</label>
                                <div class="col-sm-10">
                                  <input name="img" type="file" class="form-control" id="file">
                                  <i style="font-size: 10px">*Size hình 1080 x 1350 jpg, png, gif*</i>
                                </div>

                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Số áo</label>
                                <div class="col-sm-10">
                                  <input name="number" type="number" class="form-control" id="title">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Vị trí</label>
                                <div class="col-sm-10">
                                  <input name="pos" type="text" class="form-control" id="title">
                                </div>
                              </div>

                              <div class="form-group" >
                                <label class="control-label col-sm-2" for="desc">Thông tin liên quan:</label>
                                <div class="col-sm-10" style="margin-top: 10px">
                                  <textarea id="content" name="content" rows="14" class="form-control" id="desc"></textarea>
                                </div>
                              </div>
                              <script>    CKEDITOR.replace( 'content' );</script>

                              
                              <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button name="add" type="submit" class="btn btn-primary">Hoàn tất</button>
                                </div>
                              </div>
                        </div>

              

     

          
                            </form>




            </div>
        
