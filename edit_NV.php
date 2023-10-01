<?php 
    include('module/haeder.php');

    $ma_nhanvien = $_GET['sid'];

    require_once 'module/config.php';
    //include_once(__DIR__.'/module/config.php');

    $sua_sql = "SELECT * FROM tblnhanvien WHERE ma_nhanvien = '$ma_nhanvien'";

    $result = mysqli_query($conn,$sua_sql);

    $row = mysqli_fetch_assoc($result);
 ?>
<div class="mobile-menu-overlay"></div>
    <!-- bat dâu phân mên làm việc -->
	<div class="main-container">
		<div class="pd-ltr-20">
			
            
            <!-- form nhap nhan vien -->
				<div class="card-box mb-30 pd-20">
					
                        <h4 class="fw-bold text-center text-uppercase">Cập nhật thông tin nhân viên</h4>
                        <form class="row m-4" action="./module/cf_editNV.php" method="post">
                            <div class="form-group">
                                <label for="ma_nhanvien" class="form-label fw-bold">Ma NV : </label>
                                <input type="text" class="form-control" id="ma_nhanvien" name="ma_nhanvien" value="<?php echo $row ['ma_nhanvien'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="TenNV" class="form-label fw-bold">Ho Va Ten : </label>
                                <input type="text" class="form-control" id="TenNV" name="TenNV" value="<?php echo $row ['TenNV']; ?>" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="Cmnd" class="form-label fw-bold">cmnd : </label>
                                <input type="text" class="form-control" id="Cmnd" name="Cmnd" placeholder="cmnd/CCCD" value="<?php echo $row ['Cmnd']; ?>" required>
                            </div>
                            <div class="col-md-8 form-group">
                                <label for="ChucVu" class="form-label fw-bold">Chuc Vu : </label>
                                <select class="form-select form-select-lg mb-3" name ="ChucVu" aria-label="Default select example">
                                    <option><?php echo $row ['ChucVu'];?></option>
                                    <option value="Quan ly">Quan Ly</option>
                                    <option value="Nhan vien">Nhan Vien</option>
                                  </select>
                            </div>
                            <div class="col-md-4 p-2 form-group">
                                <label for="gioitinh" class="form-label fw-bold">Gioi Tinh : </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gioitinh" id="Nam" value="Nam" checked>
                                    <label class="form-check-label" for="inputNam">Nam</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gioitinh" id="Nu" value="Nu">
                                    <label class="form-check-label" for="inputnu">Nu</label>
                                  </div>                      
                            </div>

                            <div class="col-md-8 form-group">
                                <!-- <label for="Cmnd" class="form-label fw-bold">SDT : </label> -->
                                <input type="text" class="form-control" id="SoDT" name="SoDT" placeholder="Số ĐT : +84" value="<?php echo $row ['SoDT']; ?>" required>
                            </div>
                              
                            <div class="form-group">
                                <label for="Email" class="form-label fw-bold">Email : </label>
                                <input type="email" class="form-control" placeholder="name@gmail.com" id="Email" name="Email" value="<?php echo $row ['Email']; ?>" required> 
                            </div>

                            <div class="form-group">
                                <label for="diachi" class="form-label fw-bold">Dia Chi : </label>
                                <input type="text" class="form-control" id="diachi" name="diachi" value="<?php echo $row ['diachi']; ?>"> 
                            </div>
                            
                           
                            <div class="form-group d-grid gap-2 col-4 mx-auto">
                                
                                <input type="submit" class="btn btn-danger " value="Cập nhật dữ liệu"> 
                            </div>
                           
                            
                        </form>              
                    
				</div>
            <!--  -->
                <?php include('module/footter.php') ?>