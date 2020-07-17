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
				<div class="left_area"> <a href="#" style="text-decoration: none;"><h3>Review Book</h3></a>
				</div>
				<div class="right_area"> <a href="#" class="logout_btn">Đăng xuất</a>
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
					</center> <a href="http://localhost:8080/book/admin/?m=typebook&a=listtypebook"><i class="fas fa-book-medical"></i><span>Loại sách</span></a>
					<a href="#"><i class="fas fa-book"></i><span>Sách</span></a>
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
              $type_book=new TypeBook(); 
              if (!empty($_GET[ 'id'])) {
                 $id=$_GET[ 'id']; $row=$type_book->db_get_list_type_by_id($id); 
                 $data = [ 
                   'MALOAI' => $type_book->h->input_post('txtidtype'), 
                   'LOAISACH' => $type_book->h->input_post('txtnametype') 
                 ]; 
                 if ($type_book->h->is_submit('edit_type') && $type_book->db_update_type($data)) 
                 { 
                   $type_book->h->redirect($type_book->h->get_url('book/admin/?m=typebook&a=listtypebook')); 
                  } 
              } 
          ?>
					<div class="container">
						<div class="row">
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<form action="" method="post" id="main-form">
									<div class="card border-dark">
										<div class="card-header bg-info  text-white">
											<h3>Sửa Loại Sách</h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
													<label>Mã Loại Sách</label>
													<input type="text" name="txtidtype" value="<?php echo $row['MALOAI']; ?>" class="form-control border-dark">
												</div>
											</div>
											<div class="row">
												<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
													<label>Tên Loại Sách</label>
													<input type="text" name="txtnametype" value="<?php echo $row['LOAISACH']; ?>" class="form-control border-dark">
												</div>
											</div>
										</div>
										<div class="card-footer bg-info border-dark">
											<input type="hidden" name="request_name" value="edit_type">
											<input class="btn btn-info" type="submit" value="Lưu"> <a class="btn btn-info" href="<?php echo $type_book->h->get_url('book/admin/?m=typebook&a=listtypebook'); ?>">Trở Về</a>
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