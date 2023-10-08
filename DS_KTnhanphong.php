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
                        <h4>Danh Sách Khách Hàng Nhận Phòng</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thông tin khách hàng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="card-box mb-30 pd-10">
        <?php
            include_once(__DIR__.'/model/config.php');

            $loaidvsql = "SELECT * FROM ttnhanphong";

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
                    'trangthaikh' => $row['trangthaikh'],
                    'tg_nhanphong' => $row['tg_nhanphong']
                    
                );
                $TT++;
            }
        ?>
        <div class="pd-10">
			<h5>Thông tin khách hàng</h5>
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
                            <th>Thơi gian nhận phòng</th>

							<!-- <th>Mô Tả DV</th> -->
							<th class="datatable-nosort">Hoạt Động</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($data as $row) : ?>
						<tr>
                            <td><?php echo $row ['TT']; ?></td>
                            
							<td><?php echo $row['tenkhachhang']; ?></td>							
							<td><?php echo $row['maphong']; ?></td>
							<td><?php echo $row['tenloaiphong']; ?></td>
                            <td><?php echo $row['sdt_kh']; ?></td>
                            <td><?php echo $row['cmnd_kh']; ?></td>
                            <td><button class="thcoler border border-white rounded-3 p-1 fw-bold "><?php echo $row['trangthaikh']; ?></button></td>
                            <td><?php echo $row['tg_nhanphong']; ?></td>
                             
							<td>
                                <a class="btn btn-info" href="xacnhantraphong.php?sid=<?php echo $row['makh'];?>">Trả Phòng</a>	
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

                    if (cellText === "Đã Thanh Toán") {
                        color = "#000000";
                        backgroundColor = "lightgreen";
                    } else if (cellText === "Đã nhận phòng") {
                        color = "White";
                        backgroundColor = "#FF6600";
                    } else if (cellText === "Đặt trước phòng") {
                        color = "#222222";
                        backgroundColor = "#33CCFF";
                    }else if (cellText === "Chờ Thanh Toán") {
                        color = "White";
                        backgroundColor = "blue";
                    }

                    cell.style.color = color;
                    cell.style.backgroundColor = backgroundColor;
                });
            </script>

<?php
    include ('model/footter.php');
?>