 <div class="container">
                          <h2>Quản lí comment</h2>
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
                              </ol>
                            </nav>
                            <div class="row">
            
                            </div>

         
                          <table class="table table-striped" style="margin-top: 30px">
                            <thead>
                              <tr>
                                <th>Mã</th>
                                <th>Bài viết</th>
                                <th>Bình luận</th>                               
                                <th>Hiển thị</th>
                                <th>Cập nhật</th>
                                <th>Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                              <form method="POST">
                              <?php foreach($cm as $n): ?>
                              <tr>
                                <?php if(isset($message)) echo $message; ?>
                                <td><?=$n->id?></td>
                                <td><?=$n->title?></td>
                                <td><?=$n->comment?></td>
                                <td>
                                  <?php if($n->status == 1):?> 
                                  <input type="checkbox" checked="checked">
                                  <?php else: ?>
                                  <input type="checkbox">
                                  <?php endif ?>
                                
                                  
                                </td>
         
                                <td><a href="?com=comment&act=edit&id=<?=$n->id?>"><button type="button" name="sm">Sửa</button></td></td>
                                
                                <td><a onclick="return confirm('Bạn thật sự muốn xóa không?')" href="index.php?com=comment&act=delete&id=<?=$n->id?>"><img src="../public/admin/images/icondel.png" width="20px"></a></td>
                              </tr>
                            <?php endforeach ?>
                            </form>
                            </tbody>
                          </table>
                        </div>
