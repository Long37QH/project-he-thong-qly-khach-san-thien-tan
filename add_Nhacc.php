<?php include_once('module/haeder.php') ?>
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="footer-wrap pd-20 mb-20 card-box">
					<h5>Thêm Thông Tin Nhà Cung Cấp</h5>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
				<form action="./module/cf_addNCC.php" method="post">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label fw-bold">Mã Nhà Cung Cấp :</label>
							<div class="col-sm-12 col-md-10">
								<input id="MaNhaCC" name="MaNhaCC" class="form-control" type="text" placeholder="Nhập mã nhà cung cấp ex: ncc0001">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label fw-bold">Tên Nhà Cung Cấp :</label>
							<div class="col-sm-12 col-md-10">
								<input id="TenNhaCC" name="TenNhaCC" class="form-control" placeholder="Nhập tên nhà cung cấp" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label fw-bold">Phone :</label>
							<div class="col-sm-12 col-md-10">
								<input id="Phone" name="Phone" class="form-control" placeholder="Nhập số điện thoại nhà cung cấp" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label fw-bold">Địa Chỉ :</label>
							<div class="col-sm-12 col-md-10">
								<input id="Address" name="Address" class="form-control" placeholder="Nhập địa chỉ nhà cung cấp" value="" type="text">
							</div>
						</div>
						<div class="form-group">
                            <label for="GhiChu" class="form-label fw-bold">Ghi Chú :</label>
                            <textarea class="form-control"  id="GhiChu" name="GhiChu"></textarea>
                        </div>
						<div class="form-group d-grid gap-2 col-4 mx-auto">
                                <input type="submit" class="btn btn-danger " value="Lưu thông tin"> 
                            </div>
					</form>

				</div>
			</div>
		</div>
	</div>
<?php include_once('module/footter.php') ?>