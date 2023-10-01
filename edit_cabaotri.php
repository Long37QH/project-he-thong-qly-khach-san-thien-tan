<?php
    include ('module/haeder.php');
    $macabt = $_GET['sid'];

    require_once 'module/config.php';
    //include_once(__DIR__.'/module/config.php');

    $sua_sql = "SELECT * FROM tblbaotrivt WHERE macabt = '$macabt'";

    $result = mysqli_query($conn,$sua_sql);

    $row = mysqli_fetch_assoc($result);
?>
<div class="mobile-menu-overlay"></div>
    <!-- bat dâu phân mên làm việc -->
	<div class="main-container">
		<div class="pd-ltr-20">
			
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Quản lý ca bảo trì</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Đăng ký ca bảo trì</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- form nhap dang ký ca BT -->
        <div class="card-box mb-30 pd-20">					
                <h5 class="fw-bold text-uppercase m-2">Nhập Thông tin ca bảo trì</h5>
                <form class="row m-4" action="./module/cf_editCaBT2.php" method="post">
                    <div class=" col-md-2 form-group">
                        <label for="macabt" class="form-label fw-bold">Ma ca : </label>
                        <input type="text" class="form-control" id="macabt" name="macabt" value="<?php echo $row ['macabt'] ?>"  readonly>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="maphong" class="form-label fw-bold">Mã phòng : </label>
                        <input type="text" class="form-control" id="maphong" name="maphong" value="<?php echo $row ['maphong'] ?>"  readonly>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="mavt" class="form-label fw-bold">Tên vật tư : </label>
                        <input type="text" class="form-control" id="mavt" name="mavt" value="<?php echo $row ['mavt'] ?>"  readonly>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="mt_tinhtrang" class="form-label fw-bold">Nguyên nhân bảo trì : </label>
                        <input type="text" class="form-control" id="mt_tinhtrang" name="mt_tinhtrang" value="<?php echo $row ['mt_tinhtrang'] ?>"  required>
                    </div>
                    <div class="form-group">
                        <label for="ma_nhanvien" class="form-label fw-bold">Mã nhân viên : </label>
                        <input type="text" class="form-control" id="ma_nhanvien" name="ma_nhanvien" placeholder="" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="form-label fw-bold">Thời hoàn thành :</label>
                        <div class="">
                            <input class="form-control" placeholder="dd/m/yy" type="date" name="tg_hoanthanh">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mt_congviec" class="form-label fw-bold">Mô tả công việc bảo trì :</label>
                        <textarea class="form-control"  id="mt_congviec" name="mt_congviec"></textarea>
                    </div>
                
                    <!-- <input type="submit" class="btn btn-danger d-grid gap-2 col-6 mx-auto my-3" value="Luu"> -->
                    <div class="form-group d-grid gap-2 col-4 mx-auto">
                        <!-- <button name="btnSave" class="btn btn-danger "><i class="bi bi-save2 "></i> Lưu dữ liệu</button> -->
                        <input type="submit" class="btn btn-danger " value="Hoàn thành bảo trì"> 
                    </div>      
                </form>           
        </div>
       

<?php
    include ('module/footter.php');
?>