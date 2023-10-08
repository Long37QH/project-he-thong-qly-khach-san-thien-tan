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
                        <h4>Thống Kê Hoá Đơn</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thông tin hoá đơn</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="card-box mb-30 pd-10">
        <?php
            include_once(__DIR__.'/model/config.php');

            $loaidvsql = "SELECT * FROM tthoadon";

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
                    'SotienTT' => $row['SotienTT'],                 
                    'tg_nhanphong' => $row['tg_traphong'],
                    'trangthaikh' => $row['trangthaikh']
                );
                $TT++;
            }
        ?>
        <div class="pd-10">
			<h4 class="text-center fw-bold">Danh Sách Hoá Đơn</h4>
		</div>
        <table class="table hover table stripe multiple-select-row data-table-export nowrap" id="invoiceTable">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">TT</th>
	
                            <th>Tên Khách Hàng</th>
							<th>Số phòng</th>
							<th>Loại phòng</th>
                            <th>Số điện thoai</th>                     
                            <th>Trạng thái</th>
                            <th>Thơi gian thanh toán</th>
                            <th>Tổng tiền</th>

							<!-- <th>Mô Tả DV</th> -->
							<!-- <th class="datatable-nosort">Hoạt Động</th> -->
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
                            
                            <td><?php echo $row['trangthaikh']; ?></td>
                            <td><?php echo $row['tg_nhanphong']; ?></td>
                            <td><?php echo $row['SotienTT']; ?> VNĐ</td>
                             
							<!-- <td> 
                                <a class="btn btn-info" href="xacnhantraphong.php?sid=<?php // echo $row['makh'];?>">Trả Phòng</a>	
							</td>-->
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
        </div>
        <div class="card-box mb-30 pd-20">					
                <h5 class="fw-bold text-uppercase m-2">Thống kê doanh thu</h5>
                <div class="row">
                    <div class="col-md-5 form-group">
                        <label for="startTime">Thời gian bắt đầu:</label>
                        <div class="">
                            <input class="form-control" type="datetime-local" id="startTime">
                        </div>
                    </div>
                    <div class="col-md-5 form-group">
                        <label for="endTime">Thời gian kết thúc:</label>
                        <div class="">
                            <input class="form-control" type="datetime-local" id="endTime">
                        </div>
                    </div>
                    <div class="col-md-2 form-group">
                        <label id="totalLabel">Tổng doanh thu:</label>
                        <input class="form-control" type="text" id="totalAmount" readonly>
                    </div>
                
                    <!-- <input type="submit" class="btn btn-danger d-grid gap-2 col-6 mx-auto my-3" value="Luu"> -->
                    <div class="form-group d-grid gap-2 col-2 mx-auto p3">
                        <!-- <button name="btnSave" class="btn btn-danger "><i class="bi bi-save2 "></i> Lưu dữ liệu</button> -->
                        <button class="btn btn-info"class="btn btn-danger " onclick="calculateTotal()">Thống kê</button>
                        <!-- <input type="submit" class="btn btn-danger " value="Đăng ký bảo trì">  -->
                    </div> 
                </div>
                         
                         
        </div>
        <script>
            function calculateTotal() {
            var startTime = new Date(document.getElementById("startTime").value);
            var endTime = new Date(document.getElementById("endTime").value);
            var table = document.getElementById("invoiceTable");
            var totalAmount = 0;

            for (var i = 1; i < table.rows.length; i++) {
                var invoiceTime = new Date(table.rows[i].cells[6].innerHTML);

                if (invoiceTime >= startTime && invoiceTime <= endTime) {
                totalAmount += parseFloat(table.rows[i].cells[7].innerHTML);
                }
            }

            document.getElementById("totalAmount").value = totalAmount.toLocaleString("vi-VN") + " VNĐ";
            }
        </script>
<?php
    include ('model/footter.php');
?>