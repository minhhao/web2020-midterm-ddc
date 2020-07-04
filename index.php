<?php
	if(!isset($_SESSION))
		session_start();
	if(!isset($_SESSION["success"]))
	{	echo "<script>alert('Bạn phải đăng nhập tài khoản có quyền quản trị để vào trang quản trị');</script>";	header("location:login.php");}
	if($_SESSION["quyen"]!=1)
	{	echo "<script>alert('Tài khoản này không được quyền truy cập trang quản trị');</script>"; header("location:index.php");}
?>


<!DOCTYPE html>
<html lang="vi">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="lib/logincss/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="lib/logincss/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="lib/logincss/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="lib/logincss/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3" >Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Bảng điều khiển -->
     
      <!-- Divider -->
      <hr class="sidebar-divider">
        <!-- Quản Lý Sản Phẩm -->
  <?php
        include_once("Controller/QuanLyMenuLeft.php");
  ?>

        <!-- Quản Lý Hóa Đơn -->

        <?php
        // include_once("Controller/Product/QuanLy.php");
  ?>



        <!-- Quản Lý User -->

        <?php
        // include_once("Controller/Product/QuanLy.php");
  ?>


        <!-- Quản Lý Nhà Sản Xuất -->

        <?php
        // include_once("Controller/Product/QuanLy.php");
  ?>


        <!-- Quản Lý Loại Sản Phẩm -->

        <?php
        // include_once("Controller/Product/QuanLy.php");
  ?>






      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Tìm kiếm" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            

            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Xin Chào <?php echo "<strong>".$_SESSION['hoten']."</strong>"  ?></font>
                  </font>
                </span>
                <img class="img-profile rounded-circle" src="images/home/myprofileimg.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                      Hồ sơ
                    </font>
                  </font>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                      Cài đặt
                    </font>
                  </font>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?mod=User&act=logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng xuất
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <!-- ========================================================================================================================== -->
        <!-- Begin Page Content -->
        
        <?php
                  if(isset($_GET["mod"]))
                  {
                      include_once("Controller/".$_GET['mod']."/".$_GET['act'].'.php');
                  }
                  else
                  {
                      include_once("Controller/Product/QuanLy.php");
                  }
          ?>





       <!-- End Page Content -->
      
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

<!-- Bootstrap core JavaScript-->
<script src="lib/logincss/vendor/jquery/jquery.min.js"></script>
  <script src="lib/logincss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <!-- Core plugin JavaScript-->
  <script src="lib/logincss/vendor/jquery-easing/jquery.easing.min.js"></script>
  

  <!-- Custom scripts for all pages-->
  <script src="lib/logincss/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="lib/logincss/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="lib/logincss/vendor/datatables/dataTables.bootstrap4.min.js"></script>


  <!-- Chart scripts -->
  <script src="lib/logincss/vendor/chart.js/Chart.min.js"></script>
  <script src="lib/logincss/js/demo/chart-area-demo.js"></script>
  <script src="lib/logincss/js/demo/chart-pie-demo.js"></script>

</body>

</html>