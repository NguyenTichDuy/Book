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
          <div class="col span-3-of-12">
            <div class="sidebar">
            <center>
              <img src="./avatar.jpg" class="profile_image" alt="">
              <h4>Admin</h4>
            </center>
            <a href="http://localhost:8080/book/admin/?m=typebook&a=listtypebook"><i class="fas fa-book-medical"></i><span>Loại sách</span></a>
            <a href="http://localhost:8080/book/admin/?m=book&a=listbook"><i class="fas fa-book"></i><span>Sách</span></a>
            <a href="#"><i class="fas fa-table"></i><span>Bài viết</span></a>
            <a href="#"><i class="fas fa-comment-alt"></i><span>Bình luận</span></a>
            <a href="#" class="main_report"><i class="fas fa-th"></i><span>Thống kê</span></a>
            <a href="#"><i class="fas fa-users"></i><span>Tài khoản</span></a>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col span-9-of-12">
          <div class="content">
          <?php
$book = new Book();
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $data = [
        'MASACH' => $id
    ];
    $name = $book->db_get_list_name_book($id);
    //var_dump($name);
    if ($book->h->is_submit('delete_book') && $book->db_delete_book($data)) {
        $book->h->redirect($book->h->get_url('book/admin/?m=book&a=listbook'));
    }
}
?>

<div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 offset-3 mt-5">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <h3>Xác nhận thông tin xóa</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        Bạn có thật sự muốn xóa tên sách này không ?
                    </h5>
                    <p class="card-text text-center">
                       <b style="font-size:30px;"> <?php  echo $name['TENSACH']; ?></b>
                    </p>
                </div>
                <form action="" method="post">
                    <div class="card-footer bg-danger pt-2 pb-2 text-center">
                        <input type="hidden" name="request_name" value="delete_book">
                        <input type="submit" class="btn btn-info" value="Có">
                        <a href="<?php echo $book->h->get_url('book/admin/?m=book&a=listbook'); ?>" class="btn btn-info">Không</a>
                    </div>
                </form>
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