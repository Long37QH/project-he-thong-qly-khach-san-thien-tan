<?php
	
	session_start();	// kiem tra dax dang nhap hay chua

	if(! isset($_SESSION['tentk'])){
		header('location:Login.php');
	}
	else{
		$idtk = $_SESSION['tentk'];
		$manv = $_SESSION['ma_nhanvien'];

	}
	
	
	require 'config.php';

	$sua_sql = "SELECT * FROM tblnhanvien WHERE ma_nhanvien = '$manv'";

    $result = mysqli_query($conn,$sua_sql);

    $row = mysqli_fetch_assoc($result);

	

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Hệ Thống Quản Lý Khách Sạn</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="pub/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="pub/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="pub/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@3;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="pub/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="pub/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="pub/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="pub/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="pub/vendors/styles/style.css">
	

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
    <!-- form load 
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="pub/vendors/vendors/images/Logo-hotel.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>
    -->
	<div class="header">
		<div class="header-left" style="width: 65%;" >
			<div class="menu-icon dw dw-menu"></div>
			<div class="pd-10">
			    <h4 class="m-lg-5 " style="color: #8B795E;">Hệ Thống Quản Lý Khách Sạn Thiên Tân </h4>
            </div>
		</div>
		<div class="header-right" style="width: 35%;" >
			
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<!-- thong báo -->
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="pub/vendors/vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="pub/vendors/vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="pub/vendors/vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="pub/vendors/vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="pub/vendors/vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="pub/vendors/vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="pub/vendors/images/<?php echo $row ['anhnv'] ?>" alt="">
						</span>
						<span class="user-name"> <?php echo $row ['TenNV'] ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile2.php?sid=<?php echo $manv;?>"><i class="dw dw-user1"></i> Thông tin cá nhân</a>
						<a class="dropdown-item" href="#"><i class="dw dw-settings2"></i>Quản lý tài khoản</a>
						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Đăng Xuất</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="pub/vendors/vendors/images/github.svg" alt=""></a>
			</div>
		</div>
	</div>
    <!-- thanh menu bên trái -->
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
				<img src="pub/vendors/images/logo2_c.png" alt="" class="mx-auto p-2">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-user"></span><span class="mtext">Quản lý nhân viên</span>
						</a>
						<ul class="submenu">
							<li><a href="DS_Nhanvien.php">Danh sách nhân viên</a></li>
							<li><a href="add_NV.php">Them moi Nhan Vien</a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-14"></span><span class="mtext">Quản lý dịch vụ</span>
						</a>
						<ul class="submenu">
							<li><a href="DS_loaiDV2.php">Phân loại dịch vụ</a></li>
							<li><a href="DS_dichvu2.php">Danh sách dịch vụ</a></li>
							<li><a href="add_dichvu.php">Cập nhật thông tin dịch vụ</a></li>
						</ul>
					</li>
					<li>
						<a href="DS_vattu.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">Quản lý vật tư</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-mosque"></span><span class="mtext">Quản lý phòng</span>
						</a>
						<ul class="submenu">
							<li><a href="DS_phong2.php">Danh sách phòng thuê</a></li>
							<!-- <li><a href="add_phong.php">Thêm Phòng Mới</a></li> -->
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-chat-2"></span><span class="mtext"> Quản lý nhà cung cấp </span>
						</a>
						<ul class="submenu">
							<li><a href="DS_nhacc.php">Danh sách đối tác</a></li>
							<li><a href="add_Nhacc.php">thêm mới đối tác</a></li>
						
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit1"></span><span class="mtext">Đăng ký đặt phòng</span>
						</a>
						<ul class="submenu">
							<li><a href="DS_KTphong2.php">Kiểm tra phòng</a></li>
							<li><a href="DS_kdatphong2.php">Kiểm tra thông tin khách</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-money"></span><span class="mtext">Trả phòng</span>
						</a>
						<ul class="submenu">
							<li><a href="DS_KTnhanphong2.php">Kiểm tra thông tin phòng</a></li>
							<li><a href="DS_traphong2.php">Danh sách khách hàng trả phong</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-3"></span><span class="mtext">Thống Kê</span>
						</a>
						<ul class="submenu">
							<li><a href="DS_TKehoadon2.php">Thống kê hoá đơn</a></li>
							<li><a href="#">Thống Kê Khách Hàng</a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-settings1"></span><span class="mtext">Quản lý bảo trì</span>
						</a>
						<ul class="submenu">
							<li><a href="DS_dkbaotri.php">Đăng ký ca bảo trì</a></li>
							<li><a href="DS_nhancaBT.php">Danh sách ca đã nhận</a></li>
							<li><a href="DS_hoanthanhBT.php">Danh sách ca đã hoàn thành</a></li>
						</ul>
					</li>
			
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Chức Năng Khác</div>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-user3"></span><span class="mtext">Quản lý tài khoản</span>
						</a>
						<ul class="submenu">
							<li><a href="add_taikhoan.php">Thêm tài khoản</a></li>
							<li><a href="DS_taikhoan.php">Cập nhật thông tin tài khoản</a></li>
						</ul>
					</li>
					<li>
						<a href="logout.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-logout-1"></span>
							<span class="mtext">Đăng xuất</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>