<style type="text/css">
	.thongtncn span{
		line-height: 40px;
	}
	.form_profile label{
		font-weight:bold;
		font-size: 18px;
	}
</style>
<div class="container-fluid">
	<div class="container-lg">
		<div class="row mt-4">
			<div class="col-12 col-md-4 mt-3">
				<div class="d-flex flex-column align-items-center text-center">
					<div>
						<i class="bi bi-person-circle" style="font-size: 80px; color: blue;"></i>
					</div>
					<h2 class="mt-3" style="font-size: 32px;font-weight: bold;">Trần Minh</h2>
					<div class="mt-2">
						<i class="bi bi-box-arrow-right me-2" style="font-size: 22px; color: blue; font-weight: bold;"></i><a style="font-size: 22px; color: blue;" href="index.php?p=logon">Đăng Xuất</a>
					</div>
				</div>

				<div class="btn-group btn-group-custom d-flex align-items-center" role="group">
					<button class="btn btn-lg btn-primary bt1">
						<i class="bi bi-list-ul me-1 fs-5"></i><a class="text-white fs-5" href="http://localhost/muaban/danhsachtin">Bài viết</a> 
					</button>
					<button class="btn btn-lg btn-dark bt2">
						<i class="bi bi-pencil-square me-1 fs-5"></i><a class="text-white fs-5" href="http://localhost/muaban/dangtin">Viết bài</a>
					</button>
				</div>

				<div class="thongtncn mt-3">
					<h3 class="fw-bold">Thông tin cá nhân</h3>
					<span class="price fw-bold fs-18">Tên đăng nhập:</span>&ensp;<span class="fs-18">trancongminh</span><br>
					<span class="price fw-bold fs-18">Tên hiển thị:</span>&ensp;<span class="fs-18">Trần Minh</span><br>
					<span class="price fw-bold fs-18">Họ:</span>&ensp;<span class="fs-18">Minh</span><br>
					<span class="price fw-bold fs-18">Tên đầu tiên</span>&ensp;<span class="fs-18">Trần</span><br>
					<span class="price fw-bold fs-18">Số điện thoại:</span>&ensp;<span class="fs-18">03581473698</span><br>
					<span class="price fw-bold fs-18">Email:</span>&ensp;<span class="fs-18">admin@g,ai.com</span><br>
				</div>

			</div>

			<div class="col-12 col-md-8 mt-4">
				<h3 class="fw-bold">Chỉnh sửa thông tin cá nhân</h3>
				<div>
					<h4 class="text-primary">Thông tin cơ bản</h4>
				</div>
				<div>
					<form class="form_profile">
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Tên hiển thị</label>
							<input type="text" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
						<div class="row">
							<div class="col-6 col-md-6 mb-3">
								<label for="lastName" class="form-label">Họ của bạn</label>
								<input type="text" class="form-control form-control-lg" id="lastName" name="lastName" >
							</div>

							<div class="col-6 col-md-6 mb-3">
								<label for="firstName" class="form-label">Tên của bạn</label>
								<input type="text" class="form-control form-control-lg" id="firstName" name="firstName" placeholder="Nhập tên">
							</div>
						</div>

						<div>
							<h4 class="text-primary">Thông tin liên hệ</h4>
						</div>
						<div class="row">
							<div class="col-6 col-md-6 mb-3">
								<label for="lastName" class="form-label">Số điện thoại</label>
								<input type="text" class="form-control form-control-lg" id="lastName" name="lastName" >
							</div>

							<div class="col-6 col-md-6 mb-3">
								<label for="firstName" class="form-label">Email</label>
								<input type="text" class="form-control form-control-lg" id="firstName" name="firstName" placeholder="Nhập tên">
							</div>
						</div>
						<div>
							<h4 class="text-primary">Bạn có muốn thay đổi mật khẩu mới</h4>
						</div>
						<div class="row">
							<div class="col-6 col-md-6 mb-3">
								<label for="lastName" class="form-label">Mật khẩu mới</label>
								<input type="text" class="form-control form-control-lg" id="lastName" name="lastName" >
							</div>

							<div class="col-6 col-md-6 mb-3">
								<label for="firstName" class="form-label">Nhập lại mật khẩu</label>
								<input type="text" class="form-control form-control-lg" id="firstName" name="firstName" >
							</div>
						</div>
						<button type="submit" class="btn btn-primary p-3 mb-4">CẬP NHẬT THÔNG TIN</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>