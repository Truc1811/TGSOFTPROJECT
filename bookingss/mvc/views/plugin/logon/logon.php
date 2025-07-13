<style type="text/css">
	.f_logon label{
		color: black;
		font-size: 15px;
		font-weight: bold;
	}
</style>
<div class="container-fluid mt-4 mb-4">
	<div class="container-lg">
			<div class="row p-6">
		<div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center text-center" >
			<div><i class="bi bi-person-circle" style="font-size: 100px;color: blue;"></i></div>
			<h2 class="mt-2" style="color: blue;font-weight: bold;">Đăng Ký</h2>
			<div class="d-flex mt-3">
				<p class="fs-18">Bạn đã có tài khoản?</p>&ensp;
				<a style="font-size:18px;color: blue;font-weight: bold;" href="index.php?p=login">Đăng nhập</a>
			</div>
		</div>
		<div class="col-12 col-md-6 ">
			<form class="p-4 bg-white border rounded shadow-sm f_logon">
				<!-- Hàng chứa 2 input email -->
				<div class="row mb-3">
					<div class="col-md-6">
						<label for="email1" class="form-label">Tên đầu tiên:</label>
						<input type="text" class="form-control form-control-lg"  placeholder="">
					</div>
					<div class="col-md-6">
						<label for="email2" class="form-label">Họ</label>
						<input type="text" class="form-control form-control-lg" id="email2" placeholder="">
					</div>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Tên đăng nhập</label>
					<input type="text" class="form-control form-control-lg"  placeholder="">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Địa chỉ email</label>
					<input type="email" class="form-control form-control-lg"  placeholder="">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Mật khẩu</label>
					<input type="text" class="form-control form-control-lg"  placeholder="">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Nhập lại Mật khẩu</label>
					<input type="text" class="form-control form-control-lg"  placeholder="">
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-primary fs-5 px-5">ĐĂNG KÝ</button>
				</div>
			</form>

		</div>
	</div>
	</div>

</div>