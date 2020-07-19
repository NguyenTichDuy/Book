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
			<div class="col span-4-of-12">
				<div class="sidebar">
					<center>
						<img src="./avatar.jpg" class="profile_image" alt="">
						<h4>Admin</h4>
					</center> <a href="http://localhost:8080/book/admin/?m=typebook&a=listtypebook"><i class="fas fa-book-medical"></i><span>Loại sách</span></a>
					<a href="http://localhost:8080/book/admin/?m=book&a=listbook"><i class="fas fa-book"></i><span>Sách</span></a>
					<a href="http://localhost:8080/book/admin/?m=posts&a=listposts"><i class="fas fa-table"></i><span>Bài viết</span></a>
					<a href="#"><i class="fas fa-comment-alt"></i><span>Bình luận</span></a>
					<a href="#" class="main_report"><i class="fas fa-th"></i><span>Thống kê</span></a>
					<a href="#"><i class="fas fa-users"></i><span>Tài khoản</span></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col span-8-of-12">
				<div class="content">
                    <?php 
                        $posts=new Post();
						$type_book=new TypeBook();
                        $list_type_book=$type_book->db_get_list_type_book(); 
						$imgname = ""; 
						$posts->h->upload_file("file_avatar",$imgname); 
                        $data = 
                        [ 
							'MASACH' => $posts->h->input_post('get_namebook'),
                         	'MABAIVIET'=>$posts->h->input_post('txt_id_post'), 
							'ANH' => $imgname, 
							'TIEUDE'=>$posts->h->input_post('txt_title'), 
						 	'NOIDUNG' => $posts->h->input_post('txt_content') 
						]; 
                        if ($posts->h->is_submit('add_post') && $posts->db_insert_post($data)) 
                        { 
							$posts->h->redirect($posts->h->get_url('/book/admin/?m=posts&a=listposts')); 
						} 
					?>
					<script>
						function getbookbyid(bookid) 
						{
							$.ajax({
								type: 'Get',
								url: 'http://localhost:8080/book/admin/?m=posts&a=getbookbyid',
								dataType: 'text',
								data: 'bookid=' + bookid,
								success: function(result) 
								{
									$('#get_namebook').html(result);
								}
							});
						}	
					</script>
					<div class="container">
						<div class="row mt-5">
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<form action="" method="post" id="main-form" enctype="multipart/form-data">
									<div class="card border-dark">
										<div class="card-header bg-info  text-white">
											<h3>Thêm bài viết</h3>
										</div>
										<div class="card-body pb-0">
											<div class="row">
												<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
													<label>Chủ đề sách</label>
													<select name="st_typebook" onchange="getbookbyid(this.value)" class="form-control border-dark">
														<option value="">-- Chọn chủ đề sách--</option>
														<?php foreach ($list_type_book as $row) { ?>
														<option value="<?php echo $row['MALOAI']; ?>">
															<?php echo $row['LOAISACH']; ?>
														</option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
													<label>Sách</label>
													<select id="get_namebook" name="get_namebook" class="form-control border-dark"></select>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
													<label>Mã bài viết</label>
													<input type="text" class="form-control" id="" name="txt_id_post">
												</div>
											</div>
											<div class="row">
												<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
													<label>Tiêu đề</label>
													<input type="text" class="form-control" id="" name="txt_title">
												</div>
											</div>
											<div class="row">
												<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
													<label>Nội dung</label>
													<textarea class="summernote form-control" name="txt_content"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
													<h4 class="text-primary pt-0 pl-3">Ảnh sách</h4>
													<div class="ml-3 p-2" style="border:1px solid #EEEEEE;">
														<input class="fs-17" type="file" name="file_avatar">
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer bg-info border-dark">
											<input type="hidden" name="request_name" value="add_post">
											<input class="btn btn-info" type="submit" value="Thêm bài viết"> <a class="btn btn-info" href="http://localhost:8080/book/admin/?m=posts&a=listposts">Trở Về</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<script type="text/javascript">
						CKEDITOR.replace('txt_content');
					</script>
				</div>
			</div>
		</div>
	</main>
</body>
</html>