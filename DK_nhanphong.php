<?php 
    include('module/haeder.php');

    $maphong = $_GET['sid'];

    require_once 'module/config.php';
    //include_once(__DIR__.'/module/config.php');

    $sua_sql = "SELECT * FROM ttphong WHERE maphong = '$maphong'";

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
                            <h4>Đăng ký thông tin nhận phòng</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="DS_KTphong.php">Back</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Nhập thông tin khách hàng</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            
    <!-- form nhap nhan vien -->
        <div class="card-box mb-30 pd-20">
            
                <h4 class="fw-bold text-center text-uppercase">Nhập thông tin khách hàng</h4>
                <form class="row m-4" action="module/cf_DKNphong.php" method="post">
                    <div class="form-group">
                        <label for="tenkhachhang" class="form-label fw-bold">Tên khách hàng : </label>
                        <input type="text" class="form-control" id="tenkhachhang" name="tenkhachhang"  required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="sdt_kh" class="form-label fw-bold">Số Điện Thoại : </label>
                        <input type="text" class="form-control" id="sdt_kh" name="sdt_kh"  required>
                    </div>
                    <div class="col-md-6  form-group">
                        <label for="cmnd_kh" class="form-label fw-bold">CMND/CCCD Khách Hàng : </label>
                        <input type="text" class="form-control" id="cmnd_kh" name="cmnd_kh"  required>
                    </div>
                    
                    <div class="col-md-3 form-group">
                        <label for="sl_khach" class="form-label fw-bold">Số Người : </label>
                        <input type="text" class="form-control" id="sl_khach" name="sl_khach"  required>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="maphong" class="form-label fw-bold"> Số Phòng : </label>
                        <input type="text" class="form-control" id="maphong" name="maphong" value="<?php echo $row ['maphong'] ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="maloaiphong" class="form-label fw-bold">Loại Phòng : </label>
                        <input type="text" class="form-control" id="maloaiphong" name="maloaiphong" value="<?php echo $row ['maloaiphong'] ?>" required>
                    </div>  
                    <div class="col-md-3 form-group">
                        <label for="maloaidv" class="form-label fw-bold">Gói Dịch Vụ : </label>
                        <input type="text" class="form-control" id="maloaidv" name="maloaidv" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label fw-bold">Thời Gian Nhận Phòng</label>
                        <div class="">
                            <input class="form-control" placeholder="dd/m/yy" type="datetime-local" name="tg_nhanphong">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="giaphong" class="form-label fw-bold">Giá Phòng : </label>
                        <input type="text" class="form-control" id="giaphong" name="giaphong" value="<?php echo $row ['giaphong'] ?>" required>
                    </div>
                        
                    <div class="form-group d-grid gap-2 col-4 mx-auto">
                        <input  type="submit" class="btn btn-success " value="Đăng Ký Nhận Phòng"> 
                    </div>
                </form>           
            
        </div>
    <!--  -->

<?php 
    include('module/footter.php');
?>