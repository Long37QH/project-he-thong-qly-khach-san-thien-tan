<?php
    include ('model/haeder.php');
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
                <h5 class="fw-bold text-uppercase m-2 text-center">Đăng ký ca bảo trì</h5>
                <form class="row m-4" action="./model/cf_addCabaotri.php" method="post">
                    <div class=" col-md-2 form-group">
                        <label for="macabt" class="form-label fw-bold">Ma ca : </label>
                        <input type="text" class="form-control" id="macabt" name="macabt" placeholder="bt00" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="maphong" class="form-label fw-bold">Mã phòng : </label>
                        <input type="text" class="form-control" id="maphong" name="maphong" placeholder="p100" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="mavt" class="form-label fw-bold">Mã vật tư : </label>
                        <input type="text" class="form-control" id="mavt" name="mavt" placeholder="vt00" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="form-label fw-bold">Thời Đăng ký</label>
                        <div class="">
                            <input class="form-control" placeholder="dd/m/yy" type="date" name="tg_dkbaotri">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mt_tinhtrang" class="form-label fw-bold">Mô tả nguyên nhân bảo trì :</label>
                        <textarea class="form-control"  id="mt_tinhtrang" name="mt_tinhtrang"></textarea>
                    </div>
                
                    <!-- <input type="submit" class="btn btn-danger d-grid gap-2 col-6 mx-auto my-3" value="Luu"> -->
                    <div class="form-group d-grid gap-2 col-4 mx-auto">
                        <!-- <button name="btnSave" class="btn btn-danger "><i class="bi bi-save2 "></i> Lưu dữ liệu</button> -->
                        <input type="submit" class="btn btn-danger " value="Đăng ký bảo trì"> 
                    </div>      
                </form>           
        </div>
        <div class="card-box mb-30 pd-10">
        <?php
            include_once(__DIR__.'/model/config.php');

            $loaidvsql = "SELECT * FROM dkbaotri";

            $re = mysqli_query($conn,$loaidvsql);

            $data = [];

            $TT = 1;
            while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
                $data[] = array(
                    'TT' => $TT,
                    'macabt' => $row['macabt'],
                    'maphong' => $row['maphong'],
                    'tenvattu' => $row['tenvattu'],
                    'mt_tinhtrang' => $row['mt_tinhtrang'],
                    'trangthaica' => $row['trangthaica'],
                    'tg_dkbaotri' => $row['tg_dkbaotri']
                    
                );
                $TT++;
            }
        ?>
        <div class="pd-10">
			<h5>Danh sách ca đăng ký bảo trì</h5>
		</div>
        <table class="data-table table stripe hover nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">TT</th>
							<th>Mã Ca BT</th>
							<th>Mã phòng</th>
							<th>Tên vật tư</th>
							<th>Nguyên nhân BT</th>
                            <th>Trạng thái</th>
                            <th>Thơi gian ĐK</th>

							<!-- <th>Mô Tả DV</th> -->
							<th class="datatable-nosort">Hoạt Động</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($data as $row) : ?>
						<tr>
                            <td><?php echo $row ['TT']; ?></td>
                            <td><?php echo $row['macabt']; ?></td>
							<td><?php echo $row['maphong']; ?></td>							
							<td><?php echo $row['tenvattu']; ?></td>
							<td><?php echo $row['mt_tinhtrang']; ?></td>
                            <td><?php echo $row['trangthaica']; ?></td>
                            <td><?php echo $row['tg_dkbaotri']; ?></td>
                             
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<!-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> -->
										<a class="dropdown-item" href="model/cf_editCaBT1.php?sid=<?php echo $row['macabt'];?>"><i class="icon-copy fa fa-wrench" aria-hidden="true"></i> Nhận Ca</a>
										<a onclick="return confirm('Bạn có muốn huỷ ca bảo trì này không ?');" class="dropdown-item" href="./model/cf_huycabt.php?sid=<?php echo $row['macabt'];?>"><i class="dw dw-delete-3"></i> Huỷ Ca </a>            
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
        </div>
    
        


<?php
    include ('model/footter.php');
?>