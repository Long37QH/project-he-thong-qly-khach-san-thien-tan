<?php 
    include('module/haeder.php');

    $mavt = $_GET['sid'];

    require_once 'module/config.php';
    //include_once(__DIR__.'/module/config.php');

    $sua_sql = "SELECT * FROM tblvattu WHERE mavt = '$mavt'";

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
                            <h4>Cập nhật Thông tin vật tư</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="DS_vattu.php">Back</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cập nhật thông tin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            
    <!-- form nhap nhan vien -->
        <div class="card-box mb-30 pd-20">
            
                <h4 class="fw-bold text-center text-uppercase">Cập nhật thông vật tư</h4>
                <form class="row m-4" action="./module/cf_editvattu.php" method="post">
                    <div class="col-md-4 form-group">
                        <label for="mavt" class="form-label fw-bold">Mã VT : </label>
                        <input type="text" class="form-control" id="mavt" name="mavt" value="<?php echo $row ['mavt'] ?>"  required>
                    </div>
                    <div class="col-md-8 form-group">
                        <label for="tenvattu" class="form-label fw-bold">Tên vật tư : </label>
                        <input type="text" class="form-control" id="tenvattu" name="tenvattu" value="<?php echo $row ['tenvattu'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="maphong" class="form-label fw-bold">Mã phòng : </label>
                        <input type="text" class="form-control" id="maphong" name="maphong" value="<?php echo $row ['maphong'] ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="formFile" class="form-label fw-bold">Hình ảnh :</label>
                        <input class="form-control-file form-control height-auto" type="file" id="formFile" name="anhvt" value="<?php echo $row ['anhvt'] ?>" >
                    </div>
                    

                    <div class="col-md-2 form-group">
                        <label for="soluong" class="form-label fw-bold">SL : </label>
                        <input type="text" class="form-control" id="soluong" name="soluong" value="<?php echo $row ['soluong'] ?>" required>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="mancc" class="form-label fw-bold">Mã NCC : </label>
                        <input type="text" class="form-control" id="mancc" name="mancc" value="<?php echo $row ['mancc'] ?>">
                    </div>  
                    <div class="col-md-7 form-group">
                        <label for="hangvt" class="form-label fw-bold">Hãng vật tư : </label>
                        <input type="text" class="form-control" id="hangvt" name="hangvt" value="<?php echo $row ['hangvt'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label fw-bold">Thời gian nhập</label>
                        <div class="">
                            <input class="form-control" placeholder="dd/m/yy" type="date" name="tg_nhap" value="<?php echo $row ['tg_nhap'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="giatri" class="form-label fw-bold">Giá trị : </label>
                        <input type="text" class="form-control" id="giatri" name="giatri" value="<?php echo $row ['giatri'] ?>" required>
                    </div>
                        
                    <div class="form-group d-grid gap-2 col-4 mx-auto">
                        <input  type="submit" class="btn btn-success " value="Lưu dữ liệu"> 
                    </div>
                </form>           
            
        </div>
    <!--  -->
        <?php include('module/footter.php') ?>