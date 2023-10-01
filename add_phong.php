<?php include_once('module/haeder.php') ?>
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="footer-wrap pd-20 mb-20 card-box">
					<h5>Thêm Thông Tin Phòng Mới</h5>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<form action="./module/cf_addPhong.php" method="post">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Mã Phòng</label>
							<div class="col-sm-12 col-md-10">
								<input id="ma_phong" name="ma_phong" class="form-control" type="text" placeholder="Nhập mã phòng">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tên Phòng</label>
							<div class="col-sm-12 col-md-10">
								<input id="ten_phong" name="ten_phong" class="form-control" placeholder="" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Loại Phòng</label>
							<div class="col-sm-12 col-md-10">
								<input id="loai_phong" name="loai_phong" class="form-control" value="" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Mô tả chi tiết</label>
							<div class="col-sm-12 col-md-10">
								<input id="mota_phong" name="mota_phong" class="form-control" value="" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Chọn Ảnh:</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control-file form-control height-auto" type="file" id="formFile" name="anh1" >
							</div>
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