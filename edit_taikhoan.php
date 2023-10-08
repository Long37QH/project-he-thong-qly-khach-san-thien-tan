<?php 
    include('model/haeder.php');

    $tentk = $_GET['sid'];

    require_once 'model/config.php';
    //include_once(__DIR__.'/model/config.php');

    $sua_sql = "SELECT tblnhanvien.TenNV, tbltaikhoan.tentk, tbltaikhoan.pass, tblnhanvien.ma_nhanvien FROM tblnhanvien INNER JOIN tbltaikhoan ON tblnhanvien.ma_nhanvien = tbltaikhoan.ma_nhanvien WHERE tbltaikhoan.tentk = '$tentk';";

    $result = mysqli_query($conn,$sua_sql);

    $row = mysqli_fetch_assoc($result);
 ?>
<div class="mobile-menu-overlay"></div>
    <!-- bat dâu phân mên làm việc -->
	<div class="main-container">
		<div class="pd-ltr-20">
			
            
            <!-- form nhap nhan vien -->
				<div class="card-box mb-30 pd-20">
					
                        <h4 class="fw-bold text-center text-uppercase">Cập nhật thông tin tài khoản</h4>
                        <form class="row m-4" action="./model/cf_edittaikhoan.php" method="post">
                            <div class="form-group">
                                <label for="ma_nhanvien" class="form-label fw-bold">Tên Nhân Viên: </label>
                                <input type="text" class="form-control" id="TenNV" name="TenNV" value="<?php echo $row ['TenNV'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="ma_nhanvien" class="form-label fw-bold">Mã Nhân Viên: </label>
                                <input type="text" class="form-control" id="ma_nhanvien" name="ma_nhanvien" value="<?php echo $row ['ma_nhanvien'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="TenNV" class="form-label fw-bold">Tên Đăng Nhập:</label>
                                <input type="text" class="form-control" id="tentk" name="tentk" value="<?php echo $row ['tentk']; ?>" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="Cmnd" class="form-label fw-bold">Mật Khẩu: </label>
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="cmnd/CCCD" value="<?php echo $row ['pass']; ?>" required>
                            </div>
                            <div class="col-md-8 form-group">
                                <label for="ChucVu" class="form-label fw-bold">Chức Vụ: </label>
                                <select class="form-select form-select-lg mb-3" name ="doituong" id="doituong" aria-label="Default select example">
                                    <option value="0">Nhân Viên</option>
                                    <option value="1">Quản Lý</option>
                                  </select>
                            </div>

 
                            <div class="form-group d-grid gap-2 col-4 mx-auto">
                                
                                <input type="submit" class="btn btn-danger " value="Cập nhật dữ liệu"> 
                            </div>
                          
                            
                        </form>              
                    
				</div>
            <!--  -->
                <?php include('model/footter.php') ?>