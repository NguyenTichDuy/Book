<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Đăng kí | Review Sách</title>
  </head>
  <body>

      <form action="#" class="register-form form_main" id="registerFRM">
        <h1>Đăng kí</h1>

        <div class="txtb jquery-validation-error">
          <input type="text" name="username">
          <span data-placeholder="Tài khoản" ></span>
        </div>
        <div class="txtb jquery-validation-error">
          <input type="email" name="email">
          <span data-placeholder="Tài khoản" ></span>
        </div>
        <div class="txtb jquery-validation-error">
          <input type="password" name="password" id="pw">
          <span data-placeholder="Mật khẩu" ></span>
        </div>
        <div class="txtb jquery-validation-error">
          <input type="password" name="enterpassword">
          <span data-placeholder="Nhập lại mật khẩu" ></span>
        </div>
        <input type="submit" class="logbtn" value="Đăng kí">

        <div class="bottom-text">
          Bạn đã có tài khoản ?<a href="#">Đăng nhập</a>
        </div>

      </form>
  </body>
</html>
<script>
  $(document).ready(function() {
  $("#registerFRM").validate({
     rules: {
      username: "required",
      email: "required",
      password: "required",
      enterpassword:{
        required: true,
          equalTo: "#pw",

          }
     },
     messages: {
        username: "Vui lòng nhập tài khoản",
        email:"Vui lòng nhập email",
         password: "Vui lòng nhập mật khẩu",
         enterpassword:{
          required:"Vui lòng nhập lại mật khẩu",
          equalTo:  "Mật khẩu không khớp"

          }
        
     }
 });
});
</script>