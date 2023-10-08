<?php
    include ('model/haeder2.php');
?>
<div class="mobile-menu-overlay"></div>
    <!-- bat dâu phân mên làm việc -->
	<div class="main-container">
		<div class="pd-ltr-20">
			
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Danh Sách Đặt Phòng</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thông tin khách đặt phòng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="card-box mb-30 pd-10">
        <?php
            include_once(__DIR__.'/model/config.php');

            $loaidvsql = "SELECT * FROM ttdatphong";

            $re = mysqli_query($conn,$loaidvsql);

            $data = [];

            $TT = 1;
            while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
                $data[] = array(
                    'TT' => $TT,
                    'makh' => $row['makh'],
                    'tenkhachhang' => $row['tenkhachhang'],
                    'maphong' => $row['maphong'],
                    'tenloaiphong' => $row['tenloaiphong'],
                    'sdt_kh' => $row['sdt_kh'],
                    'cmnd_kh' => $row['cmnd_kh'],
                    'trangthaiphong' => $row['trangthaiphong'],
                    'tg_datphong' => $row['tg_datphong']
                    
                );
                $TT++;
            }
        ?>
        <div class="pd-10">
			<h5>Danh sách khách hàng đặt phòng</h5>
		</div>
        <table class="data-table table stripe hover nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">TT</th>
							<th>Mã KH</th>
                            <th>Tên Khách Hàng</th>
							<th>Số phòng</th>
							<th>Loại phòng</th>
                            <th>Số điện thoai</th>
                            <th>Số cmmd/cccd</th>
                            <th>Trạng thái</th>
                            <th>Thơi gian đặt phòng</th>

							<!-- <th>Mô Tả DV</th> -->
							<th class="datatable-nosort">Hoạt Động</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($data as $row) : ?>
						<tr>
                            <td><?php echo $row ['TT']; ?></td>
                            <td><?php echo $row['makh']; ?></td>
							<td><?php echo $row['tenkhachhang']; ?></td>							
							<td><?php echo $row['maphong']; ?></td>
							<td><?php echo $row['tenloaiphong']; ?></td>
                            <td><?php echo $row['sdt_kh']; ?></td>
                            <td><?php echo $row['cmnd_kh']; ?></td>
                            <td ><button class="thcoler border border-white rounded-3 fw-bold "><?php echo $row['trangthaiphong']; ?></button></td>
                            <td><?php echo $row['tg_datphong']; ?></td>
                             
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<!-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> -->
										
										<a class="dropdown-item" href="DK_nhanphong4.php?sid=<?php echo $row['makh'];?>"><i class="icon-copy dw dw-file-56"></i>Xử lý nhận phòng</a>
                                        <a onclick="return confirm('Xác định huỷ đăng ký đặt phòng ?');" class="dropdown-item" href="./model/cf_huydatphong2.php?sid=<?php echo $row['makh'];?>"><i class="dw dw-delete-3"></i>Huỷ đặt phòng</a>            
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
        </div>
    
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
    include ('model/footter2.php');
?>