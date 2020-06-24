<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Đăng nhập | Review Sách</title>
  <link rel="stylesheet" href="./css/login.css">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
  <div class="login-page">
  <div class="form" >
    <form class="login-form jquery-validation-error" id="formLG">
      <input type="text" placeholder="Tài khoản" class="text-dark" name="username"/>
      <input type="password" placeholder="Mật khẩu" class="text-dark" name="password"/>
      <button>Đăng nhập</button>
      <p class="message">Bạn chưa có tài khoản?<a href="#">Tạo một tài khoản</a></p>
    </form>
  </div>
</div>
 
</body>
</html>

<script>
$(document).ready(function() {
  $("#formLG").validate({
            rules: {
              username: "required",
              password: "required"
            },
            messages: {
              username: "Bạn chưa nhập tài khoản",
              password: "Bạn chưa nhập mật khẩu"
            }
        });
    });
</script>