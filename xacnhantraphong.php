<?php include_once('module/haeder.php');
$makh = $_GET['sid'];

require_once 'module/config.php';
//include_once(__DIR__.'/module/config.php');

$sua_sql = "SELECT * FROM ttnhanphong WHERE makh = '$makh'";

$result = mysqli_query($conn,$sua_sql);

$row = mysqli_fetch_assoc($result);

?>
div class="mobile-menu-overlay"></div>
    <!-- bat dâu phân mên làm việc -->
	<div class="main-container">
		<div class="pd-ltr-20">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Thanh Toán Trả Phòng</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="DS_KTnhanphong.php">Back</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Trả Phòng</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            
    <!-- form nhap nhan vien -->
        <div class="card-box mb-30 pd-20">
            
                <h4 class="fw-bold text-center text-uppercase">Thông Tin Trả Phòng</h4>
                <form class="row m-4" action="module/cf_traphong.php" method="post">
                <div class="col-md-3 form-group">
                        <label for="makh" class="form-label fw-bold">Mã KH : </label>
                        <input type="text" class="form-control" id="makh" name="makh" value="<?php echo $row ['makh'] ?>" readonly>
                    </div>
                    <div class="col-md-9 form-group">
                        <label for="tenkhachhang" class="form-label fw-bold">Tên khách hàng : </label>
                        <input type="text" class="form-control" id="tenkhachhang" name="tenkhachhang" value="<?php echo $row ['tenkhachhang'] ?>"readonly>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="sdt_kh" class="form-label fw-bold">Số Điện Thoại : </label>
                        <input type="text" class="form-control" id="sdt_kh" name="sdt_kh" value="<?php echo $row ['sdt_kh'] ?>" readonly>
                    </div>
                    <div class="col-md-6  form-group">
                        <label for="cmnd_kh" class="form-label fw-bold">CMND/CCCD Khách Hàng : </label>
                        <input type="text" class="form-control" id="cmnd_kh" name="cmnd_kh" value="<?php echo $row ['cmnd_kh'] ?>" readonly>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="maphong" class="form-label fw-bold"> Số Phòng : </label>
                        <input type="text" class="form-control" id="maphong" name="maphong" value="<?php echo $row ['maphong'] ?>" readonly>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="maloaiphong" class="form-label fw-bold">Loại Phòng : </label>
                        <input type="text" class="form-control" id="maloaiphong" name="maloaiphong" value="<?php echo $row ['maloaiphong'] ?>" readonly>
                    </div>  
                    <div class="col-md-3 form-group">
                        <label for="maloaidv" class="form-label fw-bold">Gói Dịch Vụ : </label>
                        <input type="text" class="form-control" id="maloaidv" name="maloaidv" value="<?php echo $row ['maloaidv'] ?>" readonly>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="tg_nhanphong" class="form-label fw-bold">Thời gian nhận phòng : </label>
                        <input type="text" class="form-control" id="tg_nhanphong" name="tg_nhanphong" value="<?php echo $row ['tg_nhanphong'] ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label fw-bold">Thời Gian Trả phòng</label>
                        <div class="">
                            <input class="form-control" placeholder="dd/m/yy" type="datetime-local" name="tg_traphong">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="giaphong" class="form-label fw-bold">Giá Phòng : </label>
                        <input type="text" class="form-control" id="giaphong" name="giaphong" value="<?php echo $row ['giaphong'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="giadv" class="form-label fw-bold">Giá Dịch Vụ : </label>
                        <input type="text" class="form-control" id="giadv" name="giadv" value="<?php echo $row ['giadv'] ?>" readonly>
                    </div>
                        
                    <div class="form-group d-grid gap-2 col-4 mx-auto">
                        <input  type="submit" class="btn btn-success " value="Xác nhận trả phòng"> 
                    </div>
                </form>           
            
        </div>

<?php include('module/footter.php') ?>