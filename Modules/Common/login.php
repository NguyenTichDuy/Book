<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Đăng nhập | Review Sách</title>
  </head>
  <?php
    $admin = new Users();
    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
      $ls = $admin->db_get_list_user_nd();
      $user = $_POST['username'];
      foreach($ls as $row)
      {
        if($_POST['password']==$row['MATKHAU'])
        {
          $_SESSION['TAIKHOAN']=$user;
          header('location: http://localhost:8080/Book/');
        }
      }
    }
  ?>
  <body>

      <form class="login-form" id="frmLGU" method="POST">
        <h1>Đăng nhập</h1>

        <div class="txtb jquery-validation-error">
          <input type="text" name="username">
          <span data-placeholder="Tài khoản" ></span>
        </div>

        <div class="txtb jquery-validation-error">
          <input type="password" name="password">
          <span data-placeholder="Mật khẩu" ></span>
        </div>

        <input type="submit" class="logbtn" value="Đăng nhập">

        <div class="bottom-text">
          Bạn chưa có tài khoản ?<a href="#">Đăng kí</a>
        </div>

      </form>
  </body>
</html>
<script src="Public/Js/jquery.validate.js"></script>
<script>
  $(document).ready(function() {
 $("#frmLGU").validate({
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