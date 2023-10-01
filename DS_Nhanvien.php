<?php include_once('module/haeder.php') ?>

<div class="mobile-menu-overlay"></div>

    <!-- bat dâu phân mên làm việc -->
	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-3">
					<h5 class="">Danh sách nhân viên</h5>
			</div>
            
            <!-- bảng thống hê khách -->
				<div class="card-box mb-3">
					<?php
						include_once(__DIR__.'/module/config.php');

						$dsnvsql = "SELECT * FROM tblnhanvien";

						$result = mysqli_query($conn,$dsnvsql);

						$data = [];
						$TT = 1;
						while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							$data[] = array(
								'TT' => $TT,
								'ma_nhanvien' => $row['ma_nhanvien'],
								'TenNV' => $row['TenNV'],
								'ChucVu' => $row['ChucVu'],
								'SoDT' => $row['SoDT'],
							);
							$TT++;
						}
					?>
					<div class="pd-10">
					<a class="btn btn-success" href="add_NV.php" role="button"><i class="bi bi-bookmark-plus"></i>  Thêm nhân viên mới</a>
					</div>
					<div class="pb-20">
						<table class="data-table table col-12">
							<thead>
								<tr>
									<th>TT</th>
									<th>Mã Nhân Viên</th>
									<th>Tên Nhân Viên</th>
									<th>Chức vụ</th>
									<th>Số ĐT</th>
									<th class="datatable-nosort">Hoạt động</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $row) : ?>
								<tr>
									<td><?php echo $row['TT']; ?></td>
									<td><?php echo $row['ma_nhanvien']; ?></td>
									<td><?php echo $row['TenNV']; ?></td>
									<td><?php echo $row['ChucVu']; ?></td>
									<td><?php echo $row['SoDT']; ?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="profileNV.php?sid=<?php echo $row['ma_nhanvien'];?>"><i class="dw dw-eye"></i> Xem</a>
												<a class="dropdown-item" href="edit_NV.php?sid=<?php echo $row['ma_nhanvien'];?>"><i class="dw dw-edit2"></i> Cập Nhật</a>
												<a onclick="return confirm('Bạn có muốn xoá thông tin này không ?');" class="dropdown-item" href="./module/cf_deleteNV.php?sid=<?php echo $row['ma_nhanvien'];?>"><i class="dw dw-delete-3"></i> Xoá</a>
											</div>
										</div>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Simple Datatable End -->
				
				<!--phân footer  -->
<?php include_once('module/footter.php') ?>