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
                            <li class="breadcrumb-item active" aria-current="page">Thống kê ca chờ xủ lý</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="card-box mb-30 pd-10">
        <?php
            include_once(__DIR__.'/model/config.php');

            $loaidvsql = "SELECT * FROM nhanbaotri";

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
			<h5>Danh sách ca chờ xử lý</h5>
		</div>
        <table class="data-table table stripe hover nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">TT</th>
							<th>Mã Ca BT</th>
							<th>Mã phòng</th>
							<th>Tên Vật Tư</th>
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
                                <a class="btn btn-info" href="edit_cabaotri.php?sid=<?php echo $row['macabt'];?>"><i class="icon-copy fa fa-wrench" aria-hidden="true"></i> Xử Lý</a>	
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
        </div>
    


<?php
    include ('model/footter.php');
?>