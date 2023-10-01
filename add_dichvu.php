<?php include('module/haeder.php');

    require_once 'module/config.php';

?>

<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Cập nhật Thông tin dịch vụ</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thêm dịch vụ</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					
					
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
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="pd-20 card-box height-100-p">
                        <h6 class="fw-bold text-center text-uppercase pt-4">Thêm mới dịch vụ</h6>
                            <form class="row m-4" action="./module/cf_addDichvu.php" method="post">
                                <div class="form-group">
                                    <label for="madv" class="form-label fw-bold">Mã dịch vụ : </label>
                                    <input type="text" class="form-control" id="madv" name="madv"  required>
                                </div>
                                <div class="form-group">
                                    <label for="tendichvu" class="form-label fw-bold">Tên dịch vụ : </label>
                                    <input type="text" class="form-control" id="tendichvu" name="tendichvu"   required>
                                </div>
                                <div class="form-group">
                                    <label for="maloaidv" class="form-label fw-bold">Mã loại DV : </label>
                                    <input type="text" class="form-control" id="maloaidv" name="maloaidv"  required>
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label fw-bold">Chọn Ảnh :</label>
                                    <input class="form-control-file form-control height-auto" type="file" id="formFile" name="anhdv" >
                                </div> 
                                <div class="form-group">
                                    <label for="mota" class="form-label fw-bold">Mô tả dịch vụ :</label>
                                    <textarea class="form-control" id="mota" name="mota"></textarea>
                                </div>
                                    
                                <div class="form-group d-grid gap-2 col-4 mx-auto">
                                    <!-- <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#success-modal">Lưu</button> -->
                                    <input type="submit" class="btn btn-success " data-toggle="modal" data-target="#success-modal" value="lưu">  
                                </div>
                                <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body text-center font-18">
                                                <h3 class="mb-20">Thông Báo</h3>
                                                <div class="mb-30 text-center"><img src="pub/vendors/images/success.png"></div>
                                               Đã Lưu Dữ Liệu Thành Công
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button class="btn btn-primary" data-dismiss="modal">Xong</button>
                                                <!-- <input  class="btn btn-success " data-dismiss="modal" value="Xong"> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
					</div>
                    <!--  -->
				</div>
			</div>

<?php include('module/footter.php');?>