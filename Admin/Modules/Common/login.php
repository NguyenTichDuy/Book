<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin | Login Admin</title>
  </head>
  <?php
    $admin = new Users();
    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
      if(!empty($admin->db_get_user_by_username_password($_POST['username'], $_POST['password'])))
      {
          $_SESSION['TK']=$_POST['username'];
          header('location: http://localhost:8080/book/admin/?m=common&a=admin');
      }
    }
  ?>
<body>
  <form action="" method="post" id="frmLG">
    <div class="containertop">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Đăng nhập</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fa fa-facebook-square"></i></span>
                        <span><i class="fa fa-google-plus-square"></i></span>
                        <span><i class="fa fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="my-addon">
                              <i class="fa fa-user"></i>
                              </span>
                          </div>
                          <input class="form-control" type="text" name="username" placeholder="Tên người dùng" aria-label="Recipient's " aria-describedby="my-addon">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="my-addon">
                                <i class="fa fa-key"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" name="password" placeholder="Mật khẩu" aria-label="Recipient's " aria-describedby="my-addon">
                        </div>
                    </div>
                    <div class="checkbox remember align-items-center">
                        <input type="checkbox" value="">
                        <label>
                            Nhớ mật khẩu
                        </label>
                    </div>
                    <div class="form-group ">
                        <input id="submit" class="form-control login_btn float-right" type="Submit" name="Login" value="Đăng nhập">
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center link">
                        Bạn không có mật khẩu? <a href="#">Đăng kí</a>
                    </div>
                    <div class="d-flex justify-content-center link">
                        <a href="#">Bạn quên mật khẩu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
  </form>
</body>
</html>
<script>
  $(document).ready(function() {
 $("#frmLG").validate({
     rules: {
      username: "required",
      password: "required"
     },
     messages: {
        username: "Vui lòng nhập tài khoản",
         password: "Vui lòng nhập mật khẩu"
     }
 });
});
</script>