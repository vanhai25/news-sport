 <div class="container">
                          <h2>Quản lí tin tức</h2>
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
                              </ol>
                            </nav>
                            <div class="row">
                              <div class="col-sm-1">
                               <a href="index.php?com=theloai&act=add"><button type="button" class="btn btn-primary">Thêm</button></a>
                               </div>
     
                            </div>

         
                          <table class="table table-striped" style="margin-top: 30px">
                            <thead>
                              <tr>
                                <th>Thứ tự</th>
                                <th>Tên thể loại</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                              <?php for($i=0;$i<count($data);$i++): ?>
                              <tr>
                                <?php if(isset($message)) echo $message; ?>
                                <td><?=$i+1?></td>
                                <td><?=$data[$i]->name?></td>
                                <td><a href="index.php?com=theloai&act=edit&id=<?=$data[$i]->id?>"><img src="../public/admin/images/iconedit.png" width="20px"></a></td>
                                <td><a onclick="return confirm('Bạn thật sự muốn xóa không?')" href="index.php?com=theloai&act=delete&id=<?=$data[$i]->id?>"><img src="../public/admin/images/icondel.png" width="20px"></a></td>
                              </tr>
                            <?php endfor ?>
                            </tbody>
                          </table>
                        </div>
