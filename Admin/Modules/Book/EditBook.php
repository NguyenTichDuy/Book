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
$tBook = new TypeBook();
$list_book = $tBook->db_get_list_type_book();

$book = new Book();
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $row_book = $book->db_get_list_book_by_id($id);
    $data = [
    'MASACH' => $book->h->input_post('txtidbook'),
    'TENSACH'=>$book->h->input_post('txtnamebook'),
    'TACGIA' => $book->h->input_post('txtauthor'),
    'NHAXUATBAN'=>$book->h->input_post('txtnxb'),
    'MASACH' => $book->h->input_post('st_typebook')
    ];
    if ($book->h->is_submit('edit_subcat') && $book->db_update_book($data)) {
        $book->h->redirect($book->h->get_url('book/admin/?m=book&a=listbook'));
    }
}
?>

<div>

    <div class="row mt-5">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <form action="" method="post" id="main-form">
                <div class="card border-dark">
                    <div class="card-header bg-info  text-white">
                        <h3>Thêm Sách</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Mã Sách</label>
                                <input type="text" name="txtidbook" class="form-control border-dark" value="<?php echo $row_book['MASACH'];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Tên Sách</label>
                                <input type="text" name="txtnamebook" class="form-control border-dark" value="<?php echo $row_book['TENSACH']; ?>"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Tác giả</label>
                                <input type="text" name="txtauthor" class="form-control border-dark" value="<?php echo $row_book['TACGIA']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Nhà xuất bản</label>
                                <input type="text" name="txtnxb" class="form-control border-dark" value="<?php echo $row_book['NHAXUATBAN']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Loại sách</label>
                                <select  name="st_typebook" class="form-control border-dark">
                                    <option value="">-- Chọn loại sách --</option>
                                    <?php foreach ($list_book as $row) { ?>
                                        <option value="<?php echo $row['MALOAI']; ?>">
                                            <?php echo $row['LOAISACH']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-info border-dark">
                        <input type="hidden" name="request_name" value="edit_book">
                        <input class="btn btn-info" type="submit" value="Thêm">
                        <a class="btn btn-info" href="<?php echo $tBook->h->get_url('book/admin/?m=book&a=listbook'); ?>">Trở Về</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
          </div>
        </div>
      </div>
    </main>
</body>
</html>