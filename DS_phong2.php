<?php include_once('model/haeder2.php') ?>
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Danh Sách Phòng</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
									<li class="breadcrumb-item active" aria-current="page">Loại Phòng</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="gallery-wrap">
					<ul class="row">
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
                                    <a href="index.php"><img src="pub/vendors/images/phong_don.jpg" alt=""></a>
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Phòng Đơn</h5>
											<ul class="clearfix">
												<li><a href="add_phong.php"><i class="icon-copy fi-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="pub/vendors/images/phong_doi.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Phòng Đôi</h5>
											<ul class="clearfix">
                                            <li><a href="add_phong.php"><i class="icon-copy fi-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
                        <li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img href="DS_phong.php"  src="pub/vendors/images/phong_vip.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Phòng VIP</h5>
                                        <ul class="clearfix">
												<li><a href="add_phong.php"><i class="icon-copy fi-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

			

			<div class="footer-wrap pd-20 mb-20 card-box">
				<h5>Danh Sách Chi Tiết</h5>
			</div>
            <div class="card-box mb-3">
					<?php
						include_once(__DIR__.'/model/config.php');

						$dsnvsql = "SELECT * FROM tblphong";

						$result = mysqli_query($conn,$dsnvsql);

						$data = [];
						$TT = 1;
						while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							$data[] = array(
								'TT' => $TT,
								'maphong' => $row['maphong'],
								'maloaiphong' => $row['maloaiphong'],
								'tenphong' => $row['tenphong'],
								'trangthaiphong' => $row['trangthaiphong'],
							);
							$TT++;
						}
					?>
					<div class="pd-10">
					</div>
					<div class="pb-20">
						<table class="data-table table col-12">
							<thead>
								<tr>
									<th>TT</th>
									<th>Mã Phòng</th>
									<th>Loại Phòng</th>
									<th>Tên Phòng</th>
									<th>Trạng Thái</th>
									<th class="datatable-nosort">Hoạt động</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $row) : ?>
								<tr>
									<td><?php echo $row['TT']; ?></td>
									<td><?php echo $row['maphong']; ?></td>
									<td><?php echo $row['maloaiphong']; ?></td>
									<td><?php echo $row['tenphong']; ?></td>
									<td ><button class="thcoler border border-white rounded-3 "><?php echo $row['trangthaiphong']; ?></button></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="Detail_phong2.php?sid=<?php echo $row['maphong'];?>"><i class="dw dw-eye"></i> Xem</a>
												<!-- <a class="dropdown-item" href="edit_phong.php?sid=<?php echo $row['maphong'];?>"><i class="dw dw-edit2"></i> Cập Nhật</a>
												<a class="dropdown-item" href="./model/cf_deletePhong.php?sid=<?php echo $row['maphong'];?>"><i class="dw dw-delete-3"></i> Xoá</a> -->
											</div>
										</div>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
		</div>
	</div>
	<script>
        var roomStatusCells = document.querySelectorAll(".thcoler");

        roomStatusCells.forEach(function(cell) {
            var cellText = cell.textContent;
            var color;
            var backgroundColor;

            if (cellText === "Phòng Trống") {
                color = "#222222";
                backgroundColor = "lightgreen";
            } else if (cellText === "Đã có khách vào") {
                color = "#222222";
                backgroundColor = "#FF6600";
            } else if (cellText === "Khách đặt trước") {
                color = "#222222";
                backgroundColor = "#33CCFF";
            }

            cell.style.color = color;
            cell.style.backgroundColor = backgroundColor;
        });
    </script>
	
<?php include_once('model/footter2.php') ?>