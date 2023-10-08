<?php 
	include_once('model/haeder.php');
	include_once(__DIR__.'/model/config.php');

    $phongsql = "SELECT * FROM dsphongtrong";

    $re = mysqli_query($conn,$phongsql);

    $data = [];

    $TT = 1;
    while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
        $data[] = array(
            'TT' => $TT,
            'maphong' => $row['maphong'],
            'tenphong' => $row['tenphong'],
            'tenloaiphong' => $row['tenloaiphong'],
            'anhphong' => $row['anhphong'],
            'trangthaiphong' => $row['trangthaiphong'],
            'giaphong' => $row['giaphong']
            
        );
        $TT++;
    }
    // truy vân số phòng trống
    $phongtrongsql = "SELECT COUNT(*) AS sophongtrong FROM tblphong WHERE trangthaiphong = 'Phòng Trống';";
    $re1 = mysqli_query($conn,$phongtrongsql);
    $row1 = mysqli_fetch_assoc($re1);

    //truy vân số phòng đơn
    $phongdonsql = "SELECT COUNT(*) AS sophongdon FROM tblphong WHERE maloaiphong = 'lp01'AND trangthaiphong = 'Phòng Trống';";
    $re2 = mysqli_query($conn,$phongdonsql);
    $row2 = mysqli_fetch_assoc($re2);

    //truy vân số phòng đôi
    $phongdoisql = "SELECT COUNT(*) AS sophongdoi FROM tblphong WHERE maloaiphong = 'lp02' AND trangthaiphong = 'Phòng Trống';";
    $re3 = mysqli_query($conn,$phongdoisql);
    $row3 = mysqli_fetch_assoc($re3);

    //truy vân số phòng đôi
    $phongvipsql = "SELECT COUNT(*) AS sophongvip FROM tblphong WHERE maloaiphong = 'lp03' AND trangthaiphong = 'Phòng Trống';";
    $re4 = mysqli_query($conn,$phongvipsql);
    $row4 = mysqli_fetch_assoc($re4);
 ?>

    <!-- kết thúc headder menu -->

	<div class="mobile-menu-overlay"></div>

    <!-- bat dâu phân mên làm việc -->
	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-3">	
			</div>
            <!-- thông kê phòng -->
			<div class="row">
            <div class="col-xl-3 mb-3">
                <div class="card-box height-100-p widget-style1">
                    <div class=" flex-wrap align-items-center">
                        <div class="row text-center ">
                            <div class="h4 m-1 text-green">Phòng còn Trống</div>
                            <div class="h2 text-green"><?php echo $row1 ['sophongtrong'] ?></div>								
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-3">
                <div class="card-box height-100-p widget-style1">
                    <div class=" flex-wrap align-items-center">
                        <div class="row text-center ">
                            <div class="h4 m-1 text-warning">Phòng Vip</div>
                            <div class="h2 text-warning"><?php echo $row4 ['sophongvip'] ?></div>								
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-3">
                <div class="card-box height-100-p widget-style1">
                    <div class=" flex-wrap align-items-center">
                        <div class="row text-center ">
                            <div class="h4 m-1 text-blue">Phòng đôi</div>
                            <div class="h2 text-blue"><?php echo $row3 ['sophongdoi'] ?></div>								
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-3">
                <div class="card-box height-100-p widget-style1">
                    <div class=" flex-wrap align-items-center">
                        <div class="row text-center ">
                            <div class="h4 m-1 text-red-50">Phòng đơn</div>
                            <div class="h2 text-red-50"><?php echo $row2 ['sophongdon'] ?></div>								
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- bảng thống hê khách -->
			<div class="card-box mb-30 pd-10">
        <?php
           

            $loaidvsql = "SELECT * FROM dsphongsudung";

            $resut = mysqli_query($conn,$loaidvsql);

            $data = [];

            $TT = 1;
            while($row5 = mysqli_fetch_array($resut,MYSQLI_ASSOC)){
                $data[] = array(
                    'TT' => $TT,
                    'makh' => $row5['makh'],
                    'tenkhachhang' => $row5['tenkhachhang'],
                    'maphong' => $row5['maphong'],
                    'tenloaiphong' => $row5['tenloaiphong'],
                    'sdt_kh' => $row5['sdt_kh'],
                    'cmnd_kh' => $row5['cmnd_kh'],
                    'trangthaikh' => $row5['trangthaikh'],
					'tg_datphong' => $row5['tg_datphong'],
                    'tg_nhanphong' => $row5['tg_nhanphong']
                    
                );
                $TT++;
            }
        ?>
        <div class="pd-10">
			<h5 class="text-center fw-bold">Thông Tin Khách Hàng Hiện Tại</h5>
		</div>
        <table class="data-table table stripe hover nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">TT</th>
	
                            <th>Tên Khách Hàng</th>
							<th>Số phòng</th>
							<th>Loại phòng</th>
                            <th>Số điện thoai</th>
                            <th>Số cmmd/cccd</th>
                            <th>Trạng thái</th>
							<th>Thơi gian đặt phòng</th>
                            <th>Thơi gian nhận phòng</th>

							<!-- <th>Mô Tả DV</th> -->
							<!-- <th class="datatable-nosort">Hoạt Động</th> -->
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($data as $row5) : ?>
						<tr>
                            <td><?php echo $row5 ['TT']; ?></td>
                            
							<td><?php echo $row5['tenkhachhang']; ?></td>							
							<td><?php echo $row5['maphong']; ?></td>
							<td><?php echo $row5['tenloaiphong']; ?></td>
                            <td><?php echo $row5['sdt_kh']; ?></td>
                            <td><?php echo $row5['cmnd_kh']; ?></td>
                            <td><?php echo $row5['trangthaikh']; ?></td>
							<td><?php echo $row5['tg_datphong']; ?></td>
                            <td><?php echo $row5['tg_nhanphong']; ?></td>
                             
							<!-- <td> 
                                <a class="btn btn-info" href="xacnhantraphong.php?sid=<?php //echo $row5['makh'];?>">Trả Phòng</a>	
							</td>-->
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
        </div>
				<!-- Simple Datatable End -->
				
				<!--phân footer  -->
<?php include_once('module/footter.php') ?>