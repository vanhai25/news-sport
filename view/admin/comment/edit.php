

<!-- $idtype,$iduser,$imgname,$alt_img,$title,$titleko,$ndesc,$content,$title_seo,$ndesc_seo,$key_seo,$status -->



            <div class="container">
              <h2>Chỉnh sửa dữ liệu</h2>
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
                                <label class="control-label col-sm-2" for="title">Nội dung bình luận</label>
                                <div class="col-sm-10">
                                  <textarea name="comment" class="form-control" id="title"><?=$data->comment?></textarea>
                                </div>
                              </div>
                              <div  class="form-group">
                                <label class="control-label col-sm-2" style="display: block">Trạng thái</label>
                                <div class="col-sm-10">
                                <?php if($data->status == 1): ?>
                                <label class="radio-inline"><input value="1" name="status" type="radio" checked="checked"> Hiện</label>
                                <label class="radio-inline"><input value="0" name="status" type="radio" > Ẩn</label>
                                <?php else: ?>
                                <label class="radio-inline"><input value="1" name="status" type="radio" > Hiện</label>
                                <label class="radio-inline"><input value="0" name="status" type="radio" checked="checked"> Ẩn</label>
                                <?php endif ?>
                                </div>
                              </div>

                              
                              <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button name="edit" type="submit" class="btn btn-primary">Hoàn tất</button>
                                </div>
                              </div>
                        </div>

              

     

          
                            </form>




            </div>
        
