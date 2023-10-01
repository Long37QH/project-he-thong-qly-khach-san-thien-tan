<?php include('module/haeder2.php'); ?>

<div class="main-container">				
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-3">
					<h4 class="">Danh sách các loại dịch vụ</h4>
			</div>

            <div class="card-box mb-30">
                <?php
                    include_once(__DIR__.'/module/config.php');

                    $loaidvsql = "SELECT * FROM tblloaidv";

					$re = mysqli_query($conn,$loaidvsql);

					$data = [];

					$TT = 1;
                    while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
                        $data[] = array(
                            'TT' => $TT,
                            'maloaidv' => $row['maloaidv'],
                            'tenloai' => $row['tenloai'],
                            'giadv' => $row['giadv'],
                            'trangthaidv' => $row['trangthaidv']
                            
                        );
                        $TT++;
                    }
                ?>
                
				<!-- <h2 class="h4 pd-20">Bảng dịch vụ</h2> -->
                <div class="pd-10">
					<a class="btn btn-success" href="#" data-toggle="modal" data-target="#themmoi" type="button"><i class="bi bi-bookmark-plus" ></i>  Thêm loại dịch vụ </a>
                    <div class="modal fade bs-example-modal-lg" id="themmoi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel" style="color: #8B795E;">Thêm mới loại dịch vụ</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<form class="row m-4" action="./module/cf_addLoaiDV.php" method="post">
                                                <div class="form-group">
                                                    <label for="maloaidv" class="form-label fw-bold">Mã Loại : </label>
                                                    <input type="text" class="form-control" id="maloaidv" name="maloaidv" placeholder="cb01" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tenloai" class="form-label fw-bold">Tên loại : </label>
                                                    <input type="text" class="form-control" id="tenloai" name="tenloai" placeholder="Cao cấp 1" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="giadv" class="form-label fw-bold">Giá dịch vụ : </label>
                                                    <input type="text" class="form-control" id="giadv" name="giadv" placeholder="0 vnđ" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="trangthaidv" class="form-label fw-bold">Trạng thái : </label>
                                                    <input type="text" class="form-control" id="trangthaidv" name="trangthaidv"  required>
                                                </div>
                                                 
                                                <div class="form-group d-grid gap-2 col-4 mx-auto">
                                                    <input type="submit" class="btn btn-success " value="Lưu dữ liệu"> 
                                                </div>
                                            </form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
											<!-- <button type="submit" class="btn btn-primary">Lưu Lại</button>  -->
										</div>
									</div>
								</div>
							</div>
				</div>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">TT</th>
							<th>Mã Loại DV</th>
							<th>Loại Dịch Vụ</th>
							<th>Giá Dịch Vụ</th>
							<th>Trạng Thái</th>
							<!-- <th>Mô Tả DV</th> -->
							<!-- <th class="datatable-nosort">Hoạt Động</th> -->
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($data as $row) : ?>
						<tr>
                            <td><?php echo $row ['TT']; ?></td>
                            <td><?php echo $row ['maloaidv']; ?></td>
							<td><?php echo $row ['tenloai']; ?></td>							
							<td><?php echo $row ['giadv']; ?></td>
                            <td><?php echo $row ['trangthaidv']; ?></td>
							<!-- <td><?php //echo $row ['mota']; ?></td> -->
							<!-- <td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										 <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> 
										<a class="dropdown-item" href="edit_LoaiDV.php?sid=<?php //echo $row['maloaidv'];?>"><i class="dw dw-edit2"></i> Cập nhật</a>
										<a onclick="return confirm('Bạn có muốn xoá thông tin này không ?');" class="dropdown-item" href="./module/cf_deleteLoaiDV.php?sid=<?php echo $row['maloaidv'];?>"><i class="dw dw-delete-3"></i> Xoá</a>            
									</div>
								</div>
							</td> -->
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
            
            <?php include ('module/footter2.php') ;?>


