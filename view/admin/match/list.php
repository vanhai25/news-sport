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
                               <a href="index.php?com=match&act=add"><button type="button" class="btn btn-primary">Thêm</button></a>
                               </div>

                            </div>

         
                          <table class="table table-striped" style="margin-top: 30px">
                            <thead>
                              <tr>
                                <th>Mã</th>
                                <th>Trận đấu</th>
                                <th>Ảnh</th>
                                <th>Ngày</th>
                                <th>Giờ</th>
                                <th>Sân vận động</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                              <?php foreach($m as $n): ?>
                              <tr>
                                <?php if(isset($message)) echo $message; ?>
                                <td><?=$n->id?></td>
                                <td><?=$n->match_m?></td>
                                <td><img width="50px" src="../upload/post/<?=$n->img?>"></td>
                                <td><?=$n->date_m?></td>
                                <td><?=$n->hour_m?></td>
                                <td><?=$n->location?></td>
 
        
         
                                <td><a href="index.php?com=match&act=edit&id=<?=$n->id?>"><img src="../public/admin/images/iconedit.png" width="20px"></a></td>
                                <td><a onclick="return confirm('Bạn thật sự muốn xóa không?')" href="index.php?com=match&act=delete&id=<?=$n->id?>"><img src="../public/admin/images/icondel.png" width="20px"></a></td>
                              </tr>
                            <?php endforeach ?>
                            </tbody>
                          </table>
                        </div>
