<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Đăng nhập | Review Sách</title>
  </head>
  <body>

      <form class="login-form" id="frmLGU">
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