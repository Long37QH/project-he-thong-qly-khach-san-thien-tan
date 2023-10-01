<?php
    include ('module/haeder2.php');

    include_once(__DIR__.'/module/config.php');

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

<div class="mobile-menu-overlay"></div>

<!-- bat dâu phân mên làm việc -->
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Kiểm tra danh sách phòng</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
									<li class="breadcrumb-item active" aria-current="page">Danh sách phòng còn trống</li>
								</ol>
							</nav>
						</div>
					</div>
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
            <div class="card-box mb-3">
                <div class="pd-10">
                    <h4 class="h4">Danh sách phòng trống</h4>
                </div>
				<table class="data-table table stripe hover nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">TT</th>
							<th>Mã Phòng</th>
							<th>Tên Phòng</th>
                            <th>Loại Phòng</th>
							<th>Hình Ảnh</th>
							<th>Trạng Thái</th>
                            <th>Giá Phòng</th>
							<!-- <th>Mô Tả DV</th> -->
							<th class="datatable-nosort">Chức Năng</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($data as $row) : ?>
						<tr>
                            <td><?php echo $row ['TT']; ?></td>
                            <td><?php echo $row ['maphong']; ?></td>
							<td><?php echo $row ['tenphong']; ?></td>							
							<td><?php echo $row ['tenloaiphong']; ?></td>
                            <td class="table-plus">
								<img src="pub/vendors/images/<?php echo $row['anhphong'];?>" width="150" height="120">
							</td>
                            <td ><button class="thcoler border border-white rounded-3 "><?php echo $row['trangthaiphong']; ?></button></td>
                            <td><?php echo $row ['giaphong']; ?></td>
							
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<!-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> -->
										<a class="dropdown-item" href="DK_datphong2.php?sid=<?php echo $row['maphong'];?>"><i class="icon-copy dw dw-file-39"></i> Đăng ký đặt phòng</a>
										<a class="dropdown-item" href="DK_nhanphong3.php?sid=<?php echo $row['maphong'];?>"><i class="icon-copy dw dw-file-56"></i>Đăng ký nhận phòng</a>            
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
            <!-- Simple Datatable End -->
            <script>
                var roomStatusCells = document.querySelectorAll(".thcoler");

                roomStatusCells.forEach(function(cell) {
                    var cellText = cell.textContent;
                    var color;
                    var backgroundColor;

                    if (cellText === "Phòng Trống") {
                        color = "#000000";
                        backgroundColor = "lightgreen";
                    } else if (cellText === "Đã có khách vào") {
                        color = "#222222";
                        backgroundColor = "#FF6600";
                    } else if (cellText === "Khách đặt trước") {
                        color = "#222222";
                        backgroundColor = "#33CCFF";
                    }

                    cell.style.color = color;
                    cell.style.backgroundColor = backgroundColor;
                });
            </script>

<?php
    include ('module/footter2.php');
?>