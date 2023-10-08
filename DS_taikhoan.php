<?php include_once('model/haeder.php') ?>
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10"></div>
			<div class="min-height-100px">
				<div class="page-header">
					<div class="row">
						<div class="title">
							<h4>Danh Sách Tài Khoản</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
								<li class="breadcrumb-item active" aria-current="page">Thông tin Tài Khoản</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<div class="card-box mb-3">
					<?php
						include_once(__DIR__.'/model/config.php');

						$danhsach = "SELECT tblnhanvien.TenNV, tbltaikhoan.tentk, tbltaikhoan.pass FROM tblnhanvien INNER JOIN tbltaikhoan ON tblnhanvien.ma_nhanvien = tbltaikhoan.ma_nhanvien;";

						$result = mysqli_query($conn,$danhsach);

						$data = [];
						$TT = 1;
						while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							$data[] = array(
								'TT' => $TT,
								'TenNV' => $row['TenNV'],
								'tentk' => $row['tentk'],
								'pass' => $row['pass'],
							);
							$TT++;
						}
					?>
					<div class="pd-10">
					<a class="btn btn-success" href="add_taikhoan.php" role="button"><i class="bi bi-bookmark-plus"></i>  Thêm tài khoản mới</a>
					</div>
					<div class="pb-20">
						<table class="data-table table col-12">
							<thead>
								<tr>
									<th>STT</th>
									<th>Tên Nhân Viên</th>
									<th>Tên Đăng Nhập</th>
									<th>Mật Khẩu</th>
									<th class="datatable-nosort">Hoạt động</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $row) : ?>
								<tr>
									<td><?php echo $row['TT']; ?></td>
									<td><?php echo $row['TenNV']; ?></td>
									<td><?php echo $row['tentk']; ?></td>
									<td><?php echo $row['pass']; ?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="edit_taikhoan.php?sid=<?php echo $row['tentk'];?>"><i class="dw dw-edit2"></i> Cập nhật thông tin</a>
												<a class="dropdown-item" href="./model/cf_deletetaikhoan.php?sid=<?php echo $row['tentk'];?>"><i class="dw dw-delete-3"></i> Xóa</a>
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
</div>
<?php include_once('model/footter.php') ?>