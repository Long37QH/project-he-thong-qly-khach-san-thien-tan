<?php
    include ('model/haeder2.php');
?>

<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-3">
					<h4 class="">Danh sách dịch vụ</h4>
			</div>

            <div class="card-box mb-30">
                <?php
                    include_once(__DIR__.'/model/config.php');

                    $dsdvsql = "SELECT * FROM tbldichvu";

					$re = mysqli_query($conn,$dsdvsql);

					$data = [];

					$TT = 1;
                    while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
                        $data[] = array(
                            'TT' => $TT,
                            'madv' => $row['madv'],
                            'tendichvu' => $row['tendichvu'],
                            'maloaidv' => $row['maloaidv'],
                            'anhdv' => $row['anhdv'],
                            'mota' => $row['mota']
                        );
                        $TT++;
                    }
                ?>
				<h2 class="h4 pd-20">Bảng dịch vụ</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">TT</th>
							<th>Mã Dịch Vụ</th>
							<th>Tên Dịch Vụ</th>
							<th>Mã Loại DV</th>
							<th>Hình Ảnh</th>
							<!-- <th>Mô Tả DV</th> -->
							<th class="datatable-nosort">Hoạt Động</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($data as $row) : ?>
						<tr>
                            <td><?php echo $row ['TT']; ?></td>
                            <td><?php echo $row ['madv']; ?></td>
							<td><?php echo $row ['tendichvu']; ?></td>							
							<td><?php echo $row ['maloaidv']; ?></td>
                            <td class="table-plus">
								<img src="pub/vendors/images/<?php echo $row['anhdv'];?>" width="130" height="110">
							</td>
							<!-- <td><?php //echo $row ['mota']; ?></td> -->
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<!-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> -->
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Cập nhật</a>
										<a onclick="return confirm('Bạn có muốn xoá dịch vụ này không ?');" class="dropdown-item" href="./model/cf_deleteDichvu.php?sid=<?php echo $row['madv'];?>"><i class="dw dw-delete-3"></i> Xoá</a>
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>

<?php
    include ('model/footter2.php');
?>