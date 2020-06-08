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
                               <a href="index.php?com=player&act=add"><button type="button" class="btn btn-primary">Thêm</button></a>
                               </div>

                            </div>

         
                          <table class="table table-striped" style="margin-top: 30px">
                            <thead>
                              <tr>
                                <th>Mã</th>
                                <th>Tên cầu thủ</th>
                                <th>Ảnh</th>
                                <th>Số áo</th>
                                <th>Vị trí</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                              <?php foreach($player as $n): ?>
                              <tr>
                                <?php if(isset($message)) echo $message; ?>
                                <td><?=$n->id?></td>
                                <td><?=$n->name?></td>
                                <td><img width="50px" src="../upload/player/<?=$n->avatar?>"></td>
                                <td><?=$n->number?></td>
                                <td><?=$n->position?></td>
         
                                <td><a href="index.php?com=player&act=edit&id=<?=$n->id?>"><img src="../public/admin/images/iconedit.png" width="20px"></a></td>
                                <td><a onclick="return confirm('Bạn thật sự muốn xóa không?')" href="index.php?com=player&act=delete&id=<?=$n->id?>"><img src="../public/admin/images/icondel.png" width="20px"></a></td>
                              </tr>
                            <?php endforeach ?>
                            </tbody>
                          </table>
                        </div>
