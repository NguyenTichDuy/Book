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
			<div class="col span-5-of-12">
				<div class="sidebar">
					<center>
						<img src="./avatar.jpg" class="profile_image" alt="">
						<h4>Admin</h4>
					</center> <a href="http://localhost:8080/book/admin/?m=typebook&a=listtypebook"><i class="fas fa-book-medical"></i><span>Loại sách</span></a>
					<a href="http://localhost:8080/book/admin/?m=book&a=listbook"><i class="fas fa-book"></i><span>Sách</span></a>
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
            $book=new Book(); 
            $list=$book->db_get_list_book(); 
          ?>
					<div>
						<div class="row mt-4 mb-4">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="card border-dark">
									<div class="card-header bg-info text-white">
										<h3>Danh sách</h3>
									</div>
									<div class="card-body">
										<div> <a href="<?php echo $book->h->get_url('book/admin/?m=book&a=addbook'); ?>" class="btn btn-info">Thêm Sách</a>
										</div>
										<table class="table table-bordered mt-3">
											<thead class="thead-dark">
												<tr>
													<th>Mã Sách</th>
													<th>Tên Sách</th>
													<th>Tác giả</th>
													<th>Nhà xuất bản</th>
													<th>Loại sách</th>
													<th>Tùy Chọn</th>
												</tr>
											</thead>
											<tbody>
												<?php $stt=1 ; foreach ($list as $row) { ?>
												<tr>
													<td>
														<?php echo $row[ 'MASACH'] ?>
													</td>
													<td>
														<?php echo $row[ 'TENSACH'] ?>
													</td>
													<td>
														<?php echo $row[ 'TACGIA'] ?>
													</td>
													<td>
														<?php echo $row[ 'NHAXUATBAN'] ?>
													</td>
													<td>
														<?php echo $row[ 'LOAISACH'] ?>
													</td>
													<td> <a href="<?php echo $book->h->get_url('book/admin/?m=book&a=editbook&id=' . $row['MASACH']); ?>" class="btn btn-outline-danger">Sửa</a>
														<a href="<?php echo $book->h->get_url('book/admin/?m=book&a=deletebook&id=' . $row['MASACH']); ?>" class="btn btn-outline-danger">Xóa</a>
													</td>
												</tr>
												<?php $stt++; } ?>
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