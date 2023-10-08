<?php 
    include('model/haeder.php');

    $maphong = $_GET['sid'];

    require_once 'model/config.php';
    //include_once(__DIR__.'/model/config.php');

    $chitietphong = "SELECT tblphong.maphong,tblphong.tenphong,tblloaiphong.tenloaiphong,tblphong.anhphong,tblloaiphong.giaphong , tblphong.mt_phong , tblphong.trangthaiphong FROM tblphong INNER JOIN tblloaiphong on tblloaiphong.maloaiphong = tblphong.maloaiphong WHERE maphong = '$maphong'";

    $result = mysqli_query($conn,$chitietphong);

    $row = mysqli_fetch_assoc($result);

 ?>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Thông tin chi tiết</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="DS_phong.php">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thông Tin Chi Tiết Phòng</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="product-wrap">
					<div class="product-detail-wrap mb-30">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="product-slider-nav">
									<div class="product-slide-nav">
										<img src="pub/vendors/images/<?php echo $row['anhphong'] ?>" width="650" height="auto"  alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="product-detail-desc pd-20 card-box height-100-p">
									<h4 class="mb-20 pt-20"><?php echo $row ['tenphong'] ?> </h4>
									<p><?php echo $row ['mt_phong'] ?></p><br>
									
									<div class="row">
										<label class="fw-bold">Trạng thái phòng :   <?php echo $row ['trangthaiphong'] ?></label>
										<label class="fw-bold">Giá Phòng :   <?php echo $row ['giaphong'] ?> VNĐ </label>
									</div>
									

									<div class="row">
										<div class="col-md-12 col-12">
											<a href="DK_datphong.php?sid=<?php echo $row['maphong'];?>" class="btn btn-primary btn-block">Đăng Ký Đặt Phòng</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h4 class="mb-20">Danh sách phòng tương tự</h4>
					<div class="product-list">
					<?php
						include_once(__DIR__.'/model/config.php');

						$dsnvsql = "SELECT * FROM tblphong WHERE maphong != '$maphong' AND trangthaiphong = 'Phòng Trống'";

						$result = mysqli_query($conn,$dsnvsql);

						$data = [];
						while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							$data[] = array(
								'maphong' => $row['maphong'],
								'maloaiphong' => $row['maloaiphong'],
								'tenphong' => $row['tenphong'],
								'trangthaiphong' => $row['trangthaiphong'],
								'anhphong' => $row['anhphong']
							);
						}
					?>
						<ul class="row">
							<?php foreach ($data as $row) : ?>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="pub/vendors/images/<?php echo $row['anhphong'] ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#"><?php echo $row['tenphong']; ?></a></h4>
										<a href="DK_datphong.php?sid=<?php echo $row['maphong'];?>" class="btn btn-outline-primary">Đặt Phòng</a>
									</div>
								</div>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<!-- <div class="blog-pagination mb-30"> 
						<div class="btn-toolbar justify-content-center mb-15">
							<div class="btn-group">
								<a href="#" class="btn btn-outline-primary prev"><i class="fa fa-angle-double-left"></i></a>
								<a href="#" class="btn btn-outline-primary">1</a>
								<a href="#" class="btn btn-outline-primary">2</a>
								<span class="btn btn-primary current">3</span>
								<a href="#" class="btn btn-outline-primary">4</a>
								<a href="#" class="btn btn-outline-primary">5</a>
								<a href="#" class="btn btn-outline-primary next"><i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>-->
				</div>
			</div>
			
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<!-- Slick Slider js -->
	<script src="src/plugins/slick/slick.min.js"></script>
	<!-- bootstrap-touchspin js -->
	<script src="src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script>
		jQuery(document).ready(function() {
			jQuery('.product-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				infinite: true,
				speed: 1000,
				fade: true,
				asNavFor: '.product-slider-nav'
			});
			jQuery('.product-slider-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.product-slider',
				dots: false,
				infinite: true,
				arrows: false,
				speed: 1000,
				centerMode: true,
				focusOnSelect: true
			});
			$("input[name='demo3_22']").TouchSpin({
				initval: 1
			});
		});
	</script>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
<?php include_once('model/footter.php') ?>