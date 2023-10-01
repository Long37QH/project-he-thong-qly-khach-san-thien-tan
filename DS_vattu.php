<?php
    include ('module/haeder.php');
?>
<div class="main-container">				
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-3">
					<h4 class="">Danh sách vật tư</h4>
			</div>

            <div class="card-box mb-30">
                <?php
                    include_once(__DIR__.'/module/config.php');

                    $loaidvsql = "SELECT * FROM tblvattu";

					$re = mysqli_query($conn,$loaidvsql);

					$data = [];

					$TT = 1;
                    while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
                        $data[] = array(
                            'TT' => $TT,
                            'mavt' => $row['mavt'],
                            'tenvattu' => $row['tenvattu'],
                            'maphong' => $row['maphong'],
                            'anhvt' => $row['anhvt'],
							'soluong' => $row['soluong'],
							'tg_nhap' => $row['tg_nhap']
                            
                        );
                        $TT++;
                    }
                ?>
                
				<!-- <h2 class="h4 pd-20">Bảng dịch vụ</h2> -->
                <div class="pd-10">
					<a class="btn btn-success" href="#" data-toggle="modal" data-target="#themmoi" type="button"><i class="bi bi-bookmark-plus" ></i>  Thêm mới vật tư </a>
                    <div class="modal fade bs-example-modal-lg" id="themmoi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel" style="color: #8B795E;">Thêm mới vật tư</h4>
											<button  type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<form class="row m-4" action="./module/cf_addvattu.php" method="post">
                                                <div class="col-md-4 form-group">
                                                    <label for="mavt" class="form-label fw-bold">Mã VT : </label>
                                                    <input type="text" class="form-control" id="mavt" name="mavt" placeholder="vt01" required>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <label for="tenvattu" class="form-label fw-bold">Tên vật tư : </label>
                                                    <input type="text" class="form-control" id="tenvattu" name="tenvattu" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="maphong" class="form-label fw-bold">Mã phòng : </label>
                                                    <input type="text" class="form-control" id="maphong" name="maphong" placeholder="p101" required>
                                                </div>
												<div class="form-group">
													<label for="formFile" class="form-label fw-bold">Hình ảnh :</label>
													<input class="form-control-file form-control height-auto" type="file" id="formFile" name="anhvt" >
												</div>
												<div class="col-md-2 form-group">
                                                    <label for="soluong" class="form-label fw-bold">SL : </label>
                                                    <input type="text" class="form-control" id="soluong" name="soluong" placeholder="" required>
                                                </div>
												<div class="col-md-3 form-group">
                                                    <label for="mancc" class="form-label fw-bold">Mã NCC : </label>
                                                    <input type="text" class="form-control" id="mancc" name="mancc" placeholder="cc01">
                                                </div>  
                                                <div class="col-md-7 form-group">
                                                    <label for="hangvt" class="form-label fw-bold">Hãng vật tư : </label>
                                                    <input type="text" class="form-control" id="hangvt" name="hangvt">
                                                </div>
												<div class="form-group">
													<label class="form-label fw-bold">Thời gian nhập</label>
													<div class="">
														<input class="form-control" placeholder="dd/m/yy" type="date" name="tg_nhap">
													</div>
												</div>
                                                <div class="form-group">
                                                    <label for="giatri" class="form-label fw-bold">Giá trị : </label>
                                                    <input type="text" class="form-control" id="giatri" name="giatri" placeholder="" required>
                                                </div>
												 
                                                <div class="form-group d-grid gap-2 col-4 mx-auto">
                                                    <input  type="submit" class="btn btn-success " value="Lưu dữ liệu"> 
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
				<table class="data-table table stripe hover nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">TT</th>
							<th>Mã VT</th>
							<th>Tên VT</th>
							<th>Phòng</th>
							<th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Ngày nhập về</th>

							<!-- <th>Mô Tả DV</th> -->
							<th class="datatable-nosort">Hoạt Động</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($data as $row) : ?>
						<tr>
                            <td><?php echo $row ['TT']; ?></td>
                            <td><?php echo $row['mavt']; ?></td>
							<td><?php echo $row['tenvattu']; ?></td>							
							<td><?php echo $row['maphong']; ?></td>
							<td class="table-plus">
								<img src="pub/vendors/images/<?php echo $row['anhvt']; ?>" width="110" height="110" alt="anh dv">
							</td>
                            <td><?php echo $row['soluong']; ?></td>
                            <td><?php echo $row['tg_nhap']; ?></td>
                             
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<!-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> -->
										<a class="dropdown-item" href="edit_vattu.php?sid=<?php echo $row['mavt'];?>"><i class="dw dw-edit2"></i> Cập nhật</a>
										<a onclick="return confirm('Bạn có muốn xoá thông tin này không ?');" class="dropdown-item" href="./module/cf_deletevattu.php?sid=<?php echo $row['mavt'];?>"><i class="dw dw-delete-3"></i> Xoá</a>            
									</div>
								</div>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>

<?php
    include ('module/footter.php');
?>