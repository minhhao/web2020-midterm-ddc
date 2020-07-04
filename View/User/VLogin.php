
  <div class="container">
<?php
  include('Controller/Facebook/Xuly.php');
  include('Controller/Google/Xuly.php');
?>
<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-login-image" style ="background: url('images/home/Background.jpg');">
            
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Chào mừng trở lại!</h1>
              </div>
              <form class="user" action="index.php?mod=User&act=login" method="post">
                <div class="form-group">
                  <input type="email" name="user"  class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nhập địa chỉ Email..." required>
                </div>
                <div class="form-group">
                  <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mật khẩu" required>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Nhớ tài khoản</label>
                  </div>
                </div>
             
                <input type="submit" value="Đăng nhập" class="btn btn-primary btn-user btn-block"/>
                <hr>
                <a href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' 
. urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') 
. '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) 
. '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Đăng nhập với Google
                </a>
                <a href="<?php echo $loginURL ?>" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Đăng nhập với Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Quên mật khẩu</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php?mod=Register">Tạo một tài khoản!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>