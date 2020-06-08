 <div class="container">
                          <h2>Quản lý người dùng</h2>
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
                                <th>Tên người dùng</th>
                                <th>avatar</th>
                                <th>Email</th>
                               
                                <th>Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                              <?php foreach($user as $n): ?>
                              <tr>
                                <?php if(isset($message)) echo $message; ?>
                                <td><?=$n->id?></td>
                                <td><?=$n->name?></td>
                                <td><img width="50px" src="../upload/<?=$n->avatar?>"></td>
                                <td><?=$n->mail?></td>
         

                               
                                
                                <td><a onclick="return confirm('Bạn thật sự muốn xóa không?')" href="index.php?com=user&act=delete&id=<?=$n->idtt?>"><img src="../public/admin/images/icondel.png" width="20px"></a></td>
                              </tr>
                            <?php endforeach ?>
                            </tbody>
                          </table>
                        </div>
