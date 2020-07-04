<?php
	include_once("Model/KhachHang.php");
	$da = new KhachHang();
	if(isset($_POST["user"])){	
		
		$user=$_POST["user"];
		$pass=md5($_POST["pass"]);
		$n=$da->KiemTraDangNhap($user,$pass);
		if($n==0)
		{
			echo "<script>alert('Email hoặc mật khẩu bạn nhập không đúng!');window.history.go(-1);</script>";
		}	
		else 
		{	
				$kh=$da->DangNhap($user,$pass);
				if(!isset($_SESSION))
				session_start();
				$_SESSION["user"]=$user;
				$_SESSION["MaKH"]=$kh["MaKH"];
				$_SESSION["success"]=true;
				$_SESSION["hoten"]=$kh["TenKH"];						
				$_SESSION['quyen']=$kh["IsAdmin"];
				$_SESSION["email"]=$user;
				$_SESSION["diachi"]=$kh["DiaChi"];
				$_SESSION["sdt"]=$kh["SoDienThoai"];
				$da = new KhachHang();
				$_SESSION["MyCart"] = array();
				if($kh["IsAdmin"]==1)
				echo"<script>alert('Chào mừng {$_SESSION["hoten"]} đến với Trang Quản Trị');window.location='admin.php?mod=Admin&act=TK';</script>";
				else
				echo "<script>alert('Chào mừng {$_SESSION["hoten"]} đến với website chúng tôi');window.location='index.php';</script>";
		}
	}
	else 
	{
		if(isset($_POST["IsFB"]))
		{
			$diachi=$_POST["diachi"];
			$email=$_POST["user1"];
			$dienthoai=$_POST["sdt"];
			$ten= $_SESSION['hoten'];
			$pass=("NguyenCanhQuyet");
			$pass_md5=md5($pass);
			$_SESSION["user"]=$email;
			$_SESSION["success"]=true;
			$_SESSION["hoten"]=$ten;						
			$_SESSION['quyen']=0;
			$_SESSION["email"]=$email;
			$_SESSION["diachi"]=$diachi;
			$_SESSION["sdt"]=$dienthoai;
			$_SESSION["MyCart"] = array();
			
			$rs=$da->InsertKhachHang($ten,$dienthoai,$diachi,$email,$pass_md5,0,1);
			if($rs==0)
			{
				echo "<script>alert('Có lỗi SQL! Nhập lại!');</script>";		
			}
			else 
			{
				$kh=$da->DangNhap($email, md5("NguyenCanhQuyet"));
				$_SESSION["MaKH"]=$kh["MaKH"];
				$_SESSION["MustNotLogin"] = 1;
				echo "<script>alert('Chào mừng {$ten} đến với website chúng tôi');window.location='index.php';</script>";
			}
		}
		else
		{
				$kh=$da->DangNhap($_SESSION['user'],md5("NguyenCanhQuyet"));
		
				$_SESSION["MaKH"]=$kh["MaKH"];
				$_SESSION["success"]=true;
				$_SESSION["hoten"]=$kh["TenKH"];						
				$_SESSION['quyen']=$kh["IsAdmin"];
				$_SESSION["email"]=$_SESSION['user'];
				$_SESSION["diachi"]=$kh["DiaChi"];
				$_SESSION["sdt"]=$kh["SoDienThoai"];
				$_SESSION["MustNotLogin"] = 1;
			$_SESSION["MyCart"] = array();
			echo "<script>alert('Chào mừng {$_SESSION["hoten"]} đến với website chúng tôi');window.location='index.php';</script>";
		}
	}
?>	
