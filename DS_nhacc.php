<?php include_once('module/haeder.php') ?>
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10"></div>
			<div class="min-height-100px">
				<div class="page-header">
					<div class="row">
						<div class="title">
							<h4>Danh Sách Nhà Cung Cấp</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
								<li class="breadcrumb-item active" aria-current="page">Thông Tin Nhà Cung Cấp</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<div class="card-box mb-3">
					<?php
						include_once(__DIR__.'/module/config.php');

						$danhsach = "SELECT * FROM tblnhacc";

						$result = mysqli_query($conn,$danhsach);

						$data = [];
						$TT = 1;
						while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							$data[] = array(
								'TT' => $TT,
								'MaNhaCC' => $row['MaNhaCC'],
								'TenNhaCC' => $row['TenNhaCC'],
								'Phone' => $row['Phone'],
								'Address' => $row['Address'],
							);
							$TT++;
						}
					?>
					<div class="pd-10">
					<a class="btn btn-success" href="add_Nhacc.php" role="button"><i class="bi bi-bookmark-plus"></i>  Thêm nhà cung cấp</a>
					</div>
					<div class="pb-20">
						<table class="data-table table col-12">
							<thead>
								<tr>
									<th>STT</th>
									<th>Mã Nhà Cung Cấp</th>
									<th>Tên Nhà Cung Cấp</th>
									<th>Phone</th>
									<th>Address</th>
									<th class="datatable-nosort">Hoạt động</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $row) : ?>
								<tr>
									<td><?php echo $row['TT']; ?></td>
									<td><?php echo $row['MaNhaCC']; ?></td>
									<td><?php echo $row['TenNhaCC']; ?></td>
									<td><?php echo $row['Phone']; ?></td>
									<td><?php echo $row['Address']; ?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											
												<a class="dropdown-item" href="edit_Nhacc.php?sid=<?php echo $row['MaNhaCC'];?>"><i class="dw dw-edit2"></i> Cập Nhật</a>
												<a class="dropdown-item" href="./module/cf_deleteNCC.php?sid=<?php echo $row['MaNhaCC'];?>"><i class="dw dw-delete-3"></i> Xoá</a>
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
<?php include_once('module/footter.php') ?>