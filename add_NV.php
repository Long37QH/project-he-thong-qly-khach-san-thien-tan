<?php include('module/haeder.php') ?>
<div class="mobile-menu-overlay"></div>
    <!-- bat dâu phân mên làm việc -->
	<div class="main-container">
		<div class="pd-ltr-20">
			
            
            <!-- form nhap nhan vien -->
				<div class="card-box mb-30 pd-20">
					
                        <h4 class="fw-bold text-center text-uppercase">Thong Tin Nhan Vien</h4>
                        <form class="row m-4" action="./module/cf_addNV.php" method="post">
                            <div class="form-group">
                                <label for="ma_nhanvien" class="form-label fw-bold">Ma NV : </label>
                                <input type="text" class="form-control" id="ma_nhanvien" name="ma_nhanvien" placeholder="NV001" required>
                            </div>
                            <div class="form-group">
                                <label for="TenNV" class="form-label fw-bold">Ho Va Ten : </label>
                                <input type="text" class="form-control" id="TenNV" name="TenNV" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="Cmnd" class="form-label fw-bold">cmnd : </label>
                                <input type="text" class="form-control" id="Cmnd" name="Cmnd" placeholder="cmnd/CCCD" required>
                            </div>
                            <div class="col-md-8 form-group">
                                <label for="ChucVu" class="form-label fw-bold">Chuc Vu : </label>
                                <select class="form-select form-select-lg mb-3" name ="ChucVu" aria-label="Default select example">
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
                                <input type="text" class="form-control" id="SoDT" name="SoDT" placeholder="Số ĐT : +84" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="formFile" class="form-label fw-bold">Chọn Ảnh :</label>
                                <input class="form-control-file form-control height-auto" type="file" id="formFile" name="anhnv" >
                            </div>  
                            <div class="form-group">
                                <label for="Email" class="form-label fw-bold">Email : </label>
                                <input type="email" class="form-control" placeholder="name@gmail.com" id="Email" name="Email" required> 
                            </div>

                            <div class="form-group">
                                <label for="diachi" class="form-label fw-bold">Dia Chi : </label>
                                <input type="text" class="form-control" id="diachi" name="diachi"> 
                            </div>
                            
                            <!-- <input type="submit" class="btn btn-danger d-grid gap-2 col-6 mx-auto my-3" value="Luu"> -->
                            <div class="form-group d-grid gap-2 col-4 mx-auto">
                                <!-- <button name="btnSave" class="btn btn-danger "><i class="bi bi-save2 "></i> Lưu dữ liệu</button> -->
                                <input type="submit" class="btn btn-danger " value="Lưu dữ liệu"> 
                            </div>
                           
                            
                        </form>              
                    
				</div>
            <!--  -->
                <?php
                    /*
                    // nap file ket noi
                    include_once(__DIR__.'/module/config.php');
                    
                    $ma_nhanvien = $TenNV = $Cmnd = $SoDT = $ChucVu = $Email = $gioitinh = $diachi = $mota = '';

                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $ma_nhanvien = $_POST ['ma_nhanvien'];
                        $TenNV = $_POST['TenNV'];
                        $Cmnd = $_POST['Cmnd'];
                        $SoDT = $_POST['SoDT'];
                        $ChucVu = $_POST['ChucVu'];
                        $Email = $_POST['Email'];
                        $gioitinh = $_POST['gioitinh'];
                        $diachi = $_POST['diachi'];
                        $mota = null;
                    }
                    //echo "$ma_nhanvien" ;
                    
                    $themsql = "INSERT INTO tblnhanvien (ma_nhanvien, TenNV, Cmnd, SoDT, ChucVu , Email , gioitinh , diachi ,mota ) VALUES ('$ma_nhanvien','$TenNV','$Cmnd' ,'$SoDT','$ChucVu','$Email','$gioitinh','$diachi','$mota')";
                    
                    //echo $themsql;exit;
                    mysqli_query($conn,$themsql);

                    header("Location: DS_Nhanvien.php"); */
                ?>
<?php include('module/footter.php') ?>