<?php include_once('model/haeder.php');
$ma_nhanvien = $_GET['sid'];

require_once 'model/config.php';
//include_once(__DIR__.'/model/config.php');

$sua_sql = "SELECT * FROM tblnhanvien WHERE ma_nhanvien = '$ma_nhanvien'";

$result = mysqli_query($conn,$sua_sql);

$row = mysqli_fetch_assoc($result);

?>
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Trang Cá Nhân</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="DS_Nhanvien.php">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thông tin nhân viên</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
								<img src="pub/vendors/images/<?php echo $row ['anhnv'] ?>" alt="" class="avatar-photo">
								
							</div>
							<h5 class="text-center h5 mb-0"> <?php echo $row ['TenNV'] ?></h5>
							<p class="text-center text-muted font-14">Nhân Viên <?php echo $row ['ChucVu'] ?></p>
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue">Thông Tin Nhân Viên</h5>
								<ul>
                                    <li>
										<span>Mã Nhân Viên :</span>
                                        <?php echo $row ['ma_nhanvien'] ?>
									</li>
									<li>
										<span>Địa chỉ Email:</span>
                                        <?php echo $row ['Email'] ?>
									</li>
                                    <li>
										<span>Số Cmnd/Cccd:</span>
										<?php echo $row ['Cmnd'] ?>
									</li>
									<li>
										<span>Số ĐT:</span>
										<?php echo $row ['SoDT'] ?>
									</li>
									<li>
										<span>Giới Tính:</span>
										<?php echo $row ['gioitinh'] ?>
									</li>
									<li>
										<span>Địa Chỉ:</span>
										<?php echo $row ['diachi'] ?>
									</li>
								</ul>
							</div>
						
						</div>
					</div>
					
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
					<div class="pd-20 card-box height-100-p">
                        <h4 class="fw-bold text-center text-uppercase pt-4">Cập Nhật Thông Tin</h4>
                        <form class="row m-4" action="./model/cf_editNV.php" method="post">
                            <div class="form-group">
                                <label for="ma_nhanvien" class="form-label fw-bold">Ma NV : </label>
                                <input type="text" class="form-control" id="ma_nhanvien" name="ma_nhanvien" value="<?php echo $row ['ma_nhanvien'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="TenNV" class="form-label fw-bold">Ho Va Ten : </label>
                                <input type="text" class="form-control" id="TenNV" name="TenNV" value="<?php echo $row ['TenNV'] ?>" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="Cmnd" class="form-label fw-bold">cmnd : </label>
                                <input type="text" class="form-control" id="Cmnd" name="Cmnd" placeholder="cmnd/CCCD" value="<?php echo $row ['Cmnd'] ?>" required>
                            </div>
                            <div class="col-md-8 form-group">
                                <label for="ChucVu" class="form-label fw-bold">Chuc Vu : </label>
                                <select class="form-select form-select-lg mb-3" name ="ChucVu" aria-label="Default select example">
									<option><?php echo $row ['ChucVu'] ?></option>
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
                                <input type="text" class="form-control" id="SoDT" name="SoDT" placeholder="Số ĐT : +84" value="<?php echo $row ['SoDT'] ?>" required>
                            </div>
                              
                            <div class="form-group">
                                <label for="Email" class="form-label fw-bold">Email : </label>
                                <input type="email" class="form-control" placeholder="name@gmail.com" id="Email" name="Email" value="<?php echo $row ['Email'] ?>" required> 
                            </div>

                            <div class="form-group">
                                <label for="diachi" class="form-label fw-bold">Dia Chi : </label>
                                <input type="text" class="form-control" id="diachi" name="diachi" value="<?php echo $row ['diachi'] ?>"> 
                            </div>
                            
                            <!-- <input type="submit" class="btn btn-danger d-grid gap-2 col-6 mx-auto my-3" value="Luu"> -->
                            <div class="form-group d-grid gap-2 col-4 mx-auto">
                                <!-- <button name="btnSave" class="btn btn-danger "><i class="bi bi-save2 "></i> Lưu dữ liệu</button> -->
                                <input type="submit" class="btn btn-danger " value="Cập nhật dữ liệu"> 
                            </div>
                           
                            
                        </form>              
					</div>
				</div>
                    <!--  -->
				</div>
			</div>
<?php include('model/footter.php') ?>