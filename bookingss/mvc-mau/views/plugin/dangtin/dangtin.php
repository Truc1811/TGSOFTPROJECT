
<style type="text/css">
	.custom-box {
		border: 1px solid #ccc;
		background-color: #f8f9fa;
		padding: 8px;
		border-radius: 5px;
		width: 130px
		margin:auto;
	}
	form i{
		color: blue;
		font-size: 15px;
		font-weight: bold;
	}
	.label1{
		color: blue;
		font-size: 15px;
		font-weight: bold;
	}
</style>

<?php
$nganh_nghe = [
	'Điện - Điện tử',
	'Công nghệ thông tin',
	'Kinh tế',
	'Y tế',
	'Giáo dục',
	'Marketing',
	'Kiến trúc',
	'Kỹ thuật cơ khí',
	'Môi trường',
	'Vận tải'
];

$tinhs = [
	'Hà Nội',
	'Hồ Chí Minh',
	'Đà Nẵng',
	'Hải Phòng',
	'Cần Thơ',
	'An Giang',
	'Bình Dương',
	'Đồng Nai',
	'Bà Rịa - Vũng Tàu',
	'Quảng Ninh'
];
?>
<!-- dang tin mobile -->
<?php require "mvc/views/theme/mobile/dangtinmobile.php"; ?>
<!--end dang tin mobile -->
<!-- dang tin table -->
<div class="container-fluid">
	<div class="container-lg">
		<div class="border-bottom mb-4 d-none d-md-block">
			<div class="row p-2">
				<div class="col-12 col-md-6 mt-md-4">
					<h3 class="text-primary fw-bold">Đăng tin</h3>
				</div>
				<div class="col-12 col-md-6 mt-md-4 d-flex justify-content-end">
					<div class="d-flex justify-content-center align-items-center">
						<button class="btn border rounded px-4 py-2 d-flex align-items-center">
							<i class="bi bi-list-ul me-2"></i>
							<a href="http://localhost/muaban/danhsachtin" class="text-primary fw-bold">Danh sách tin</a>
						</button>

					</div>
				</div>
			</div>
		</div>

		<div class="row mt-3 ">
			<div class="col-12 col-md-12">
				<form action="">
					<!-- tieu de -->
					<div class="mb-3">

						<i class="bi bi-card-heading"></i>&ensp;<label for="exampleFormControlInput1" class="form-label label1 ">Tiêu đề</label>

						<input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Nhập tiêu đề vào đây">
					</div>
					<!-- Chon hinh thuc -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="exampleFormControlTextarea1" class="form-label label1">Chọn hình thức</label>
						<select class="form-select form-select-lg" aria-label="Default select example">
							<option selected>Lựa chọn hình thức</option>
							<option value="1">Cần bán</option>
							<option value="2">Cần mua</option>
							<option value="3">Hà Nôi</option>
						</select>
					</div>

					<!-- hinh dai dien bai viet -->
					<div class="mb-3 border border-2 rounded">
						<div class="m-2">
							<i class="bi bi-card-image"></i>&ensp;<label for="formFileMultiple" class="form-label label1"> Hình đại diện bài viết</label>
							<input class="form-control form-control-lg" type="file" id="formFileMultiple" multiple>
							<p>Dung lượng tối đa: 1MB. Định dạng: JPG, JPEG, PNG. Kích thước đề xuất: 600x400px.</p>
						</div>
					</div>
					<!-- nganh nghe kinh doanh -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="exampleFormControlInput1" class="form-label label1">Ngành nghề kinh doanh</label>
						<div class="row">
							<div class="col-12 col-md-3">
								<?php
								foreach ($nganh_nghe as $nganh) {
									?>
									<div class='form-check'>
										<input class='form-check-input' name='' type='checkbox' id='' value=''>
										<label class='form-check-label' for=''><?php echo $nganh ?></label>
									</div>
									<?php
								};
								?>
							</div>
							<div class="col-12 col-md-3">								
								<?php
								foreach ($nganh_nghe as $nganh) {
									?>
									<div class='form-check'>
										<input class='form-check-input' name='' type='checkbox' id='' value=''>
										<label class='form-check-label' for=''><?php echo $nganh ?></label>
									</div>
									<?php
								};
								?>
							</div>
							<div class="col-12 col-md-3">								
								<?php
								foreach ($nganh_nghe as $nganh) {
									?>
									<div class='form-check'>
										<input class='form-check-input' name='' type='checkbox' id='' value=''>
										<label class='form-check-label' for=''><?php echo $nganh ?></label>
									</div>
									<?php
								};
								?>
							</div>
							<div class="col-12 col-md-3">								
								<?php
								foreach ($nganh_nghe as $nganh) {
									?>
									<div class='form-check'>
										<input class='form-check-input' name='' type='checkbox' id='' value=''>
										<label class='form-check-label' for=''><?php echo $nganh ?></label>
									</div>
									<?php
								};
								?>
							</div>		
						</div>
					</div>


					<!-- Tinh thanh kinh doanh -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="exampleFormControlInput1" class="form-label label1">Ngành nghề kinh doanh</label>
						<div class="row">
							<div class="col-12 col-md-3">
								<?php
								foreach ($tinhs as $tinh) {
									?>
									<div class='form-check'>
										<input class='form-check-input' name='' type='checkbox' id='' value=''>
										<label class='form-check-label' for=''><?php echo $tinh ?></label>
									</div>
									<?php
								};
								?>
							</div>
							<div class="col-12 col-md-3">								
								<?php
								foreach ($tinhs as $tinh) {
									?>
									<div class='form-check'>
										<input class='form-check-input' name='' type='checkbox' id='' value=''>
										<label class='form-check-label' for=''><?php echo $tinh ?></label>
									</div>
									<?php
								};
								?>
							</div>
							<div class="col-12 col-md-3">								
								<?php
								foreach ($tinhs as $tinh) {
									?>
									<div class='form-check'>
										<input class='form-check-input' name='' type='checkbox' id='' value=''>
										<label class='form-check-label' for=''><?php echo $tinh ?></label>
									</div>
									<?php
								};
								?>
							</div>
							<div class="col-12 col-md-3">								
								<?php
								foreach ($tinhs as $tinh) {
									?>
									<div class='form-check'>
										<input class='form-check-input' name='' type='checkbox' id='' value=''>
										<label class='form-check-label' for=''><?php echo $tinh ?></label>
									</div>
									<?php
								};
								?>
							</div>		
						</div>
					</div>
					<!-- tinh hinh su dung hoa don -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="exampleFormControlTextarea1" class="form-label label1">Tình hình sử dụng hóa đơn</label>
						<select class="form-select form-select-lg" aria-label="Default select example">
							<option selected>Lựa chọn</option>
							<option value="1">Đang hoạt động</option>
							<option value="2">Tạm ngưng</option>
						</select>
					</div>

					<!-- von dieu le -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="exampleInputEmail1" class="form-label label1">Vốn điều lệ</label>
						<input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="5 tỷ">
					</div>

					<!-- mã số thuế -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="exampleInputEmail1" class="form-label label1">Mã số thuế</label>
						<input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mã số thuế">
					</div>

					<!-- điện thoại liên hệ -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="exampleInputEmail1" class="form-label label1">Điện thoại liên hệ</label>
						<input type="number" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="số điện thoại">
					</div>

					<!-- nam thanh lap -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="exampleInputEmail1" class="form-label label1">Năm thành lập</label>
						<input type="text" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="năm thành lập">
					</div>

					<!-- Gia cong ty -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="exampleInputEmail1" class="form-label label1">Giá công ty</label>
						<div class="d-flex">
							<input type="text" class="form-control form-control-lg w-75" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="gia công ty">
							<select class="form-select form-select-lg w-25 ms-2" aria-label="Default select example">
								<option selected>Trieu dong</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>

					</div>

					<!-- Doanh thu gan nhat -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="exampleInputEmail1" class="form-label label1">Doanh thu gần nhất</label>
						<div class="d-flex">
							<input type="email" class="form-control form-control-lg w-75" id="exampleInputEmail1" aria-describedby="emailHelp">
							<select class="form-select form-select-lg w-25 ms-2" aria-label="Default select example">
								<option selected>Trieu dong</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>

					</div>
					<!-- noi dung chi tiet -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="editor" class="form-label label1">Nội dung chi tiết</label>
						<div>
							<textarea name="noidung" id="editor" >

							</textarea>
						</div>

					</div>

					<!-- Chon trâng thai -->
					<div class="mb-3">
						<i class="bi bi-lightning-fill"></i>&ensp;<label for="exampleFormControlTextarea1" class="form-label label1">Chọn trạng thái</label>
						<select class="form-select form-select-lg" aria-label="Default select example">
							<option selected>Chờ duyệt</option>
							<option value="1">Bản nháp</option>
						</select>
					</div>

					<div class="d-flex mb-4">

						<button type="submit" class="btn btn-success d-flex align-items-center rounded-2">
							<i class="bi bi-floppy" style="font-size: 20px; margin-right: 10px;color: white;"></i> Đăng tin
						</button>

						<button type="submit" class="btn btn-danger d-flex align-items-center rounded-2 ms-4">
							<i class="bi bi-x-circle" style="font-size: 20px; margin-right: 10px;color: white;"></i> Hủy
						</button>


					</div>
				</form>


			</div>
		</div>

<!--end dang tin table -->


</div>
</div>
