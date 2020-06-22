<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Đăng kí</h3>
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
                          <input class="form-control" type="text" name="" placeholder="Tên người dùng" aria-label="Recipient's " aria-describedby="my-addon">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="my-addon">
                                <i class="fa fa-key"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" name="" placeholder="Mật khẩu" aria-label="Recipient's " aria-describedby="my-addon">
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
</body>
</html>