
<?php
    session_start();
  include('Controller/Google/Xuly.php');
  include('Controller/Google/oauth.php');
  include_once("Model/KhachHang.php");
  $da = new KhachHang();
  $user=$user_info['id'];
  $_SESSION['user'] = $user_info['id'];
  $_SESSION['hoten'] = $user_info['name'];
  echo $_SESSION['hoten'];
  $pass=md5("NguyenCanhQuyet");
  $n=$da->KiemTraDangNhap($user,$pass);
  if($n==0)
			{
                $chuoi = <<<EDO
  <div class="container">
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
                  <h1 class="h4 text-gray-900 mb-4">M-Store Xin Chào Khách Hàng</h1>
                  <h2 class="h4 text-gray-900 mb-4">{$user_info['name']}</h2>
                </div>
                <hr>
                <div class="h10 text-gray-600 mb-2" style ="text-align : center"> Là Một Khách Hàng Mới - Mời Bạn Điền Những Thông Tin Bên Dưới Để Hỗ Trợ Mua Hàng </div>
                <hr>
                <form class="user" action="index.php?mod=User&act=login" method="post">
                  <div class="form-group">
                  <input type="text" name="user1" value = "{$user_info['id']}" style ="display : none">
                  <input type="text" name="IsFB" style ="display : none">
                    <input type="text" name="sdt"  class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nhập Số Điện Thoại" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="diachi" class="form-control form-control-user" id="exampleInputPassword" placeholder="Địa Chỉ Của Bạn" required>
                      <hr>
                  <input type="submit" value="Tiếp Tục" class="btn btn-primary btn-user btn-block"/>
                  <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
EDO;
echo $chuoi;
            }	
            else
            {
                
                echo "<script>window.location='index.php?mod=User&act=login';</script>";
            }
?>
