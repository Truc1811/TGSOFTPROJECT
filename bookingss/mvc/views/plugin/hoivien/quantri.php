<style type="text/css">
		.p-7{
			padding-left: 0vw;
			padding-right: 0vw;
		}
		.mt_qt{
			margin-top: 50px;
		}
		.header-maunen{
			background-color:#00A86E;
		}
		.h_35{
			height: 75vw;
		}
	@media (min-width: 768px){
		.mt_qt{
			margin-top: 60px;
		}
		.header-maunen{
			background-color:#00A86E;
		}
		.h_35{
			height: 80vw;
		}

		.p-7{
			padding-left: 3vw;
			padding-right: 3vw;
		}
	}
	@media (min-width: 1400px){
		.mt_qt{
			margin-top: 70px;
		}
		.header-maunen{
			background-color:#00A86E;
		}
		.h_35{
			height: 35vw;
		}

		.p-7{
			padding-left: 13vw;
			padding-right: 13vw;
		}
	}
</style>

<?php 
	if(@$_COOKIE['hoivien']){
		$mang_u=explode(',',$_COOKIE['hoivien']);
		 require "mvc/views/plugin/hoivien/quantriungvien.php";
	

	} else if(@$_SESSION['khoataikhoan']){
?>
<div class="p-7 d-flex justify-content-center align-content-center py-5 my-5">

	<div class="text-center shadow-lg p-4 col-auto rounded-3" >
		<img class="w-25 mb-4" src="public/demo/oops.png" alt="">
		<div class="text-center">
			Tài khoản với user đăng nhập <?php echo $_SESSION['khoataikhoan']; ?> đã bị khóa.<br/> Vui lòng liên hệ số điện thoại <span class="text-danger"><?php echo $cauhinh[0]->hotline; ?></span> để mở khóa tài khoản .
		</div>
		
	</div>



<?php
		unset($_SESSION['khoataikhoan']);
	} else {
?>
	<div class="text-center shadow-lg p-4 col-auto rounded-3" >
		<img class="w-25 mb-4" src="public/demo/oops.png" alt="">
		<div class="text-center">
			Đăng nhập thất bại. Xin vui lòng đăng nhập lại
		</div>
		<div class="text-center my-3">
			<button type="button" class=" btn header-maunen text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Đăng nhập lại <i class="bi bi-box-arrow-in-up-right"></i></button>
		</div>
	</div>

<?php
}
?>
</div>
