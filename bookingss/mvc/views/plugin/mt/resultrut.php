


<div class="row py-0 py-md-5 card_img" style="background-image: url('public/demo/mt-5.jpg');">
	<a href="cfvvietnam5setup.exe">

		<div class="col-12 padding_tay py-3 card_img" >
			<h3 class="text-white py-2 py-md-5 text-center">
				 
			</h3>			
		</div>
	</a>
</div>
<div class="row padding_tay_1 pt-0 d-flex justify-content-center align-items-center my-5 fs-5">
	<div class="text-center text-success mb-3">
		<i class="bi bi-shield-check" style="font-size: 10vh;"></i>
	</div>
	<div class="col-12 text-center">
		<h3 class="text-center">
			Gửi lệnh thành công.	
		</h3>
		Lệnh rút của bạn đã gửi thành công. Hệ thống đang xử lý.
	</div>
	<div class="col-md-12 d-flex justify-content-center">
		<div class="col-6 p-5 rounded-3 mt-3" style="background-color: #F6F4F4;">
			<div class="fs-5 fw-bold mb-3">
				Thông tin lệnh
			</div>
			<div class="d-flex justify-content-between">
				<div class="col-md-6 mb-3">
	 				Mã lệnh :
				</div>
				<div class="col-md-6 text-end mb-3">
					<?php echo $_SESSION['ketqua'][0]?:''; ?>
				</div>
			</div>
			<div class="d-flex justify-content-between">
				<div class="col-md-6 mb-3">
					Địa chỉ nhận :
				</div>
				<div class="col-md-6 text-end mb-3">
					<?php echo $_SESSION['ketqua'][1]?:''; ?>
				</div>
			</div>
			<div class="d-flex justify-content-between">
				<div class="col-md-6 mb-3">
					Số lượng nhận :
				</div>
				<div class="col-md-6 text-end mb-3">
					<?php echo $_SESSION['ketqua'][2]?:''; ?> USDT
				</div>
			</div>

		</div>

	</div>
</div>
<?php unset($_SESSION['ketqua']); ?>