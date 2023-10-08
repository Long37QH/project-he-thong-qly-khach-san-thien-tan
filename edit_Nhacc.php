<?php include_once('model/haeder.php');


$MaNhaCC = $_GET['sid'];

require_once 'model/config.php';
//include_once(__DIR__.'/model/config.php');

$sua_sql = "SELECT * FROM tblnhacc WHERE MaNhaCC = '$MaNhaCC'";

$result = mysqli_query($conn,$sua_sql);

$row = mysqli_fetch_assoc($result);

?>
?>
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="footer-wrap pd-20 mb-20 card-box">
					<h5>CẬP NHẬT THÔNG TIN NHÀ CUNG CẤP</h5>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<form action="./model/cf_editNCC.php" method="post">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label fw-bold">Mã Nhà Cung Cấp :</label>
							<div class="col-sm-12 col-md-10">
								<input id="MaNhaCC" name="MaNhaCC" class="form-control" type="text" value="<?php echo $row ['MaNhaCC'] ?>" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label fw-bold">Tên Nhà Cung Cấp :</label>
							<div class="col-sm-12 col-md-10">
								<input id="TenNhaCC" name="TenNhaCC" class="form-control" value="<?php echo $row ['TenNhaCC'] ?>" placeholder="Nhập tên nhà cung cấp" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label fw-bold">Phone :</label>
							<div class="col-sm-12 col-md-10">
								<input id="Phone" name="Phone" class="form-control" value="<?php echo $row ['Phone'] ?>" placeholder="Nhập số điện thoại nhà cung cấp" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label fw-bold">Address :</label>
							<div class="col-sm-12 col-md-10">
								<input id="Address" name="Address" class="form-control" value="<?php echo $row ['Address'] ?>" placeholder="Nhập địa chỉ nhà cung cấp" value="" type="text">
							</div>
						</div>
						<div class="form-group">
                            <label for="GhiChu" class="form-label fw-bold">Ghi Chú :</label>
                            <textarea class="form-control"  id="GhiChu" name="GhiChu"></textarea>
                        </div>
						<div class="form-group d-grid gap-2 col-4 mx-auto">
                                <input type="submit" class="btn btn-danger " value="Cập nhật thông tin"> 
                            </div>
					</form>
				</div>
                <div class="card-box mb-3">
					<?php
						include_once(__DIR__.'/model/config.php');

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
												
												<a class="dropdown-item" href="edit_Nhacc.php?sid=<?php echo $row['MaNhaCC'];?>"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="./model/cf_deleteNV.php?sid=<?php echo $row['MaNhaCC'];?>"><i class="dw dw-delete-3"></i> Delete</a>
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
	</div>
<?php include_once('model/footter.php') ?>