

<!-- $img,$title,$titleko,$ndesc,$content,$status,$title_seo,$desc_seo,$key_seo -->



            <div class="container">
              <h2>Thêm dữ liệu</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
                  </ol>
                </nav>
                <a href="index.php?com=theloai&act=list"><button type="button" class="btn">Thoát</button></a>
                <!-- Tab links -->
                  <div class="tabc">

                    <button class="tablinks" onclick="openCity(event, 'Paris') " id="defaultOpen">Thông tin</button>

                  </div>

                

                    <p>Các thông tin liên quan bên ngoài bài viết</p>
                    <h3>Nhập dữ liệu</h3>
                    <?php if(isset($message)) echo $message; ?>
                            <form class="form-horizontal"  method="POST" enctype="multipart/form-data">


                        <div id="Paris" class="tabcontentc">

                          <p>Các thông tin liên quan đến bài viết</p> 

                              <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Tiêu đề:</label>
                                <div class="col-sm-10" >
                                  <input name="tentl" type="text" class="form-control" id="title">
                                </div>
                              </div>

                              <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10" style="margin-top: 10px">
                                  <button name="add_type" type="submit" class="btn btn-primary">Hoàn tất</button>
                                </div>
                              </div>
                            </form>
</div>



            </div>
        
