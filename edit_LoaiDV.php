<?php include('module/haeder.php');

    $maloaidv = $_GET['sid'];

    require_once 'module/config.php';
    //include_once(__DIR__.'/module/config.php');

    $sua_sql = "SELECT * FROM tblloaidv WHERE maloaidv = '$maloaidv'";

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
								<h4>Cập nhật Thông tin loại dịch vụ</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
									<li class="breadcrumb-item active" aria-current="page">Loại dịch vụ</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="pd-20 card-box height-100-p">
                        <h6 class="fw-bold text-center text-uppercase pt-4">Cập Nhật Thông Tin Loai DV</h6>
                            <form class="row m-4" action="./module/cf_editLoaiDV.php" method="post">
                                <div class="form-group">
                                    <label for="maloaidv" class="form-label fw-bold">Mã Loại : </label>
                                    <input type="text" class="form-control" id="maloaidv" name="maloaidv" value="<?php echo $row ['maloaidv'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tenloai" class="form-label fw-bold">Tên loại : </label>
                                    <input type="text" class="form-control" id="tenloai" name="tenloai"  value="<?php echo $row ['tenloai'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="giadv" class="form-label fw-bold">Giá dịch vụ : </label>
                                    <input type="text" class="form-control" id="giadv" name="giadv"  value="<?php echo $row ['giadv'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="trangthaidv" class="form-label fw-bold">Trạng thái : </label>
                                    <input type="text" class="form-control" id="trangthaidv" name="trangthaidv" value="<?php echo $row ['trangthaidv'] ?>"  required>
                                </div>
                                    
                                <div class="form-group d-grid gap-2 col-4 mx-auto">
                                    <input type="submit" class="btn btn-success " value="Cập nhật"> 
                                </div>
                            </form>
                        </div>
					</div>
					
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
					<div class="pd-20 card-box height-100-p">
                    <div class="pb-20">
                        <?php
                            $loaidvsql = "SELECT * FROM tblloaidv";

                            $re = mysqli_query($conn,$loaidvsql);
        
                            $data = [];
        
                            $TT = 1;
                            while($r = mysqli_fetch_array($re,MYSQLI_ASSOC)){
                                $data[] = array(
                                    'TT' => $TT,
                                    'maloaidv' => $r['maloaidv'],
                                    'tenloai' => $r['tenloai'],
                                    'giadv' => $r['giadv'],
                                    'trangthaidv' => $r['trangthaidv']
                                    
                                );
                                $TT++;
                            }
                        ?>
						<table class="data-table table col-12">
							<thead>
								<tr>
									<th>TT</th>
									<th>Mã Loại DV</th>
									<th>Loại Dịch Vụ</th>
									<th>Giá Dịch Vụ</th>
									<th>Trạng Thái</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $r) : ?>
								<tr>
									<td><?php echo $r['TT']; ?></td>
									<td><?php echo $r['maloaidv']; ?></td>
									<td><?php echo $r['tenloai']; ?></td>
									<td><?php echo $r['giadv']; ?></td>
									<td><?php echo $r['trangthaidv']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>              
                    </div>
				</div>
                    <!--  -->
				</div>
			</div>

<?php include('module/footter.php');?>