<?php include_once('model/haeder.php');
    include_once(__DIR__.'/model/config.php');

    $dsdvsql = "SELECT tblnhanvien.ma_nhanvien, tblnhanvien.TenNV FROM tblnhanvien LEFT JOIN tbltaikhoan ON tblnhanvien.ma_nhanvien = tbltaikhoan.ma_nhanvien WHERE tbltaikhoan.ma_nhanvien IS NULL; ";

    $re = mysqli_query($conn,$dsdvsql);

    $data = [];

    while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
        $data[] = array(
            'ma_nhanvien' => $row['ma_nhanvien'],
            'TenNV' => $row['TenNV']
        );
    }
?>
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="footer-wrap pd-20 mb-20 card-box">
					<h5>Thêm Tài Khoản Đăng Nhập</h5>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<form class="row" action="./model/cf_addtaikhoan.php" method="post">
						<div class="form-group">
                                <label for="tentk" class="form-label fw-bold">Tên Đăng Nhập : </label>
                                <input type="text" class="form-control" id="tentk" name="tentk"  required>
                            </div>
                            <div class="form-group">
                                <label for="pass" class="form-label fw-bold">Mật Khẩu: </label>
                                <input type="text" class="form-control" id="pass" name="pass" required>
                            </div>
							
                        <div class="col-md-6 form-group">
							<label class="form-label fw-bold">Nhân Viên</label>
                            <select class="form-select form-select-lg mb-3" name="ma_nhanvien" id="ma_nhanvien">
                                <?php foreach ($data as $row) : ?>
                                <option value="<?php echo $row['ma_nhanvien'] ?>"><?php echo $row['TenNV'] ?> - <?php echo $row['ma_nhanvien'] ?></option>
                                <?php endforeach; ?>
                            </select>
						</div>
                        <div class="col-md-6 form-group">
                                <label for="ChucVu" class="form-label fw-bold">Loại tài Khoản: </label>
                                <select class="form-select form-select-lg mb-3" name ="doituong" id="doituong" aria-label="Default select example">
                                    <option value="0">Nhân Viên</option>
                                    <option value="1">Quản Lý</option>
                                  </select>
                            </div>
						<div class="form-group d-grid gap-2 col-4 mx-auto">
                                <input type="submit" class="btn btn-danger " value="Lưu thông tin"> 
                            </div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include_once('model/footter.php') ?>