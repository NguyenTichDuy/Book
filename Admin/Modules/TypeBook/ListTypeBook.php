<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Review books</title>
</head>
<body>
    <header class="container-fluid header_admin">
      <div class="row">
        <div class="col span-12-of-12">
          <div class="left_area">
            <a href="#" style="text-decoration: none;"><h3>Review Book</h3></a>
          </div>
          <div class="right_area">
            <a href="#" class="logout_btn">Đăng xuất</a>
          </div>
        </div>
      </div>
    </header>
    <main class="container-fluid"> 
      <div class="row">
          <div class="col span-5-of-12">
            <div class="sidebar">
            <center>
              <img src="./avatar.jpg" class="profile_image" alt="">
              <h4>Admin</h4>
            </center>
            <a href="http://localhost:8080/book/admin/?m=typebook&a=listtypebook"><i class="fas fa-book-medical"></i><span>Loại sách</span></a>
            <a href="#"><i class="fas fa-book"></i><span>Sách</span></a>
            <a href="#"><i class="fas fa-table"></i><span>Bài viết</span></a>
            <a href="#"><i class="fas fa-comment-alt"></i><span>Bình luận</span></a>
            <a href="#" class="main_report"><i class="fas fa-th"></i><span>Thống kê</span></a>
            <a href="#"><i class="fas fa-users"></i><span>Tài khoản</span></a>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col span-7-of-12">
          <div class="content">
          <?php
$cat = new TypeBook();
$list = $cat->db_get_list_type_book();
?>

<div>
    <div class="row mt-4 mb-4">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <div class="card border-dark">
                <div class="card-header bg-info text-white">
                    <h3>Danh sách loại sách</h3>
                </div>
                <div class="card-body">
                    <div>
                        <a href="<?php echo $cat->h->get_url('book/admin/?m=typebook&a=addtypebook'); ?>" class="btn btn-info">Thêm Loại Sách</a>
                    </div>
                    <table class="table table-bordered mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th>Mã Loại Sách</th>
                                <th>Tên Loại Sách</th>
                                <th>Tùy Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stt = 1;
                            foreach ($list as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['MALOAI'] ?></td>
                                    <td><?php echo $row['LOAISACH'] ?></td>
                                    <td>
                                        <a href="<?php echo $cat->h->get_url('book/admin/?m=typebook&a=edittypebook&id=' . $row['MALOAI']); ?>" class="btn btn-outline-danger">Sửa</a>
                                        <a href="<?php echo $cat->h->get_url('book/admin/?m=typebook&a=deletetypebook&id=' . $row['MALOAI']); ?>" class="btn btn-outline-danger">Xóa</a>
                                    </td>
                                </tr>
                            <?php $stt++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
          </div>
        </div>
      </div>
    </main>
</body>
</html>