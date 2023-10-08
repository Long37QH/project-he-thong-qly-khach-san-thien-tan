<?php
    include ('model/haeder.php');

    $makh = $_GET['sid'];

    require_once 'model/config.php';
    //include_once(__DIR__.'/model/config.php');

    $ttsql = "SELECT * FROM ttchothanhtoan WHERE makh = '$makh' ";

    $result = mysqli_query($conn,$ttsql);

    $row = mysqli_fetch_assoc($result);
?>
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Hoá Đơn</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thông tin hoá đơn </li>
								</ol>
							</nav>
						</div>
						<div class="d-grid gap-2 d-md-flex justify-content-md-end">
							<button class="btn btn-primary me-md-2" type="button" onclick="printInvoice()"><i class="icon-copy ion-printer"></i>  In hoá đơn</button>
							<!-- <button class="btn btn-primary" type="button">Button</button> -->
						</div>
						
					</div>
				</div>
				<div class="invoice-wrap">
					<div class="invoice-box">
						<div class="invoice-header">
							<div class="logo text-center">
								<img src="vendors/images/deskapp-logo.png" alt="">
							</div>
						</div>
						<h4 class="text-center mb-30 weight-600">Hoá Đơn Thanh Toán</h4>
						<div class="row pb-30">
							<div class="col-md-6">
								<h5 class="mb-15">Tên Khách Hàng</h5>
								<p class="font-14 mb-5">Số CMND/CCND: </p>
								<p class="font-14 mb-5">Số Điện Thoại: </p>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<p class="font-14 mb-5"><?php echo $row ['tenkhachhang'] ?> </strong></p>
									<p class="font-14 mb-5"><?php echo $row ['cmnd_kh'] ?></p>
									<p class="font-14 mb-5"><?php echo $row ['sdt_kh'] ?></p>
									<!-- <p class="font-14 mb-5">Postcode</p> -->
								</div>
							</div>
						</div>
						<div class="invoice-desc pb-30">
							<div class="invoice-desc-head clearfix">
								<div class="invoice-sub">Danh Mục</div>
								<div class="invoice-rate">Tên Danh Mục</div>
								<div class="invoice-hours">Thời gian Thuê</div> 
								<div class="invoice-subtotal">Bảng Giá</div>
							</div>
							<div class="invoice-desc-body">
								<ul>
									<li class="clearfix">
										<div class="invoice-sub">Phòng Thuê</div>
										<div class="invoice-rate"><?php echo $row ['maphong'] ?></div>
										<div class="invoice-hours"><?php echo $row ['So_ngay_o'] ?></div>
										<div class="invoice-subtotal"><span class="weight-600"><?php echo $row ['giaphong'] ?> VND</span></div> 
									</li>
									<li class="clearfix">
										<div class="invoice-sub">Gói dịch vụ</div>
										<div class="invoice-rate"><?php echo $row ['maloaidv'] ?></div>
										<div class="invoice-hours"></div>
										<div class="invoice-subtotal"><span class="weight-600"><?php echo $row ['giadv'] ?> VND</span></div> 
									</li>
                                    
									
								</ul>
							</div>
							<div class="invoice-desc-footer">
								<div class="invoice-desc-head clearfix">
									<div class="invoice-sub">Nhân Viên Sử Lý</div>
									<div class="invoice-rate">Thời Gian TT</div>
									<div class="invoice-subtotal">TT Thanh Toán</div>
								</div>
								<div class="invoice-desc-body">
									<ul>
										<li class="clearfix">
											<div class="invoice-sub">
												<p class="font-14 mb-5">Mã Nhân Viên: <strong class="weight-600"><?php echo $manv ?></strong></p>
												<!-- <p class="font-14 mb-5">Code: <strong class="weight-600">4556</strong></p> -->
											</div>
											<div class="invoice-rate font-14 weight-600"><?php echo $row ['tg_traphong'] ?></div>
											<div class="invoice-subtotal"><span class="weight-600 font-14 text-danger"><?php echo $row ['SotienTT'] ?> VND</span></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="d-grid gap-2 col-6 mx-auto">
                            <a class="btn btn-success" href="./model/cf_thanhtoan.php?sid=<?php echo $row['makh'];?>"  type="button"> Hoàn thành thanh toán </a>                       
                        </div>
					</div>
                    
                    
				</div>
                
            </div>
	<script>
		function printInvoice() {
		  window.print();
		}
	</script>
			
<?php
    include ('model/footter.php');
?>