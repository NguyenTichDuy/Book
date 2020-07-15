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
      $ls = $admin->db_get_list_user();
      $user = $_POST['username'];
      foreach($ls as $row)
      {
        if($_POST['password']==$row['MK'])
        {
          $_SESSION['TK']=$user;
          header('location: http://localhost:8080/book/admin/?m=common&a=admin');
        }
      }
    }
  ?>
  <body>
      <form action="" class="login-form" id="frmLG" method="POST">
        <h1>Đăng nhập</h1>

        <div class="txtb jquery-validation-error">
          <input type="text" name="username" placeholder="Tài khoản">
        </div>

        <div class="txtb jquery-validation-error">
          <input type="password" name="password" placeholder="Mật khẩu">
        </div>

        <input type="submit" class="logbtn" value="Đăng nhập">

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