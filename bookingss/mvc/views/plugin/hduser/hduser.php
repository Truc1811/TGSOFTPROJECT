
<style type="text/css">
	.timkiem{
		position: absolute;
		right: 6%;
		top:18%;
		cursor: pointer;
	}
	.timkiema{
		position: absolute;
		top: 33%;
		left: 3%;
		cursor: pointer;
	}
	.h_logo{
		width: 70%;
	}
	.nut_lg a{
		color:black !important;
		font-size: 18px;
		font-weight: bold;

	}
	.nut_lg:hover a{
		color: green!important;
		border-bottom: 2px solid green;
	}
	.nut_dtn a{
		color:white; !important;
		font-size: 18px;
		font-weight: bold;
		background: green;
		padding: 8px;
		border-radius: 40px;

	}

	.nav-item a{
		color:white!important;
		font-weight: bold;
	}


	.dropdown-menua a{
		color:black!important;
	}
	
	.card{
		margin-left: 10px;
	}

	.xemngay {
		border:2px solid rgb(235,145,35);
		border-radius:20px;
		color:rgb(235,145,35);
	}

	.xemngay a{
		color:rgb(235,145,35);
	}

	

	@media (max-width:576px){
		.offcanvas{
			background-color: rgba(255, 255, 255, 0.9);
		}
		.timkiem{
			position: absolute;
			right: 4%;
			top:18%;
			cursor: pointer;
		}
		.dropdown-menua a{
			color:gray !important;
		}
		.nut_lg a{
			color:gray !important;
			font-size: 18px;
			font-weight: bold;

		}
		.hv_lg:hover{
			color:black !important;
			font-weight: bold;

		}
		
	}

</style>

<div class="container-fluid bg-primary">
	<div class="container-lg">
		<div class="row">
			<div class="col-12 col-md-8 mt-2">
				<p class="text-white"><strong>SỐ HOTLINE: 0981.350.666 - 024.7109.7766 - PHẢN ÁNH CLDV: 058.614.9999</strong></p>
			</div>
			<div class="col-12 col-md-4 mt-2 d-none d-md-block">
				<ul class="d-flex justify-content-end ms-5 ">
					<li class=""><a class="text-white" href=""><i class="bi bi-facebook"></i></a></li>
					<li class="ms-3 "><a class="text-white" href=""><i class="bi bi-tiktok"></i></a></li>
					<li class="ms-3"><a class="text-white"  href=""><i class="bi bi-twitter"></i></a></li>
					<li class="ms-3"><a class="text-white" href=""><i class="bi bi-envelope"></i></a></li>
					<li class="ms-3"><a class="text-white" href=""><i class="bi bi-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- end hotline -->

<!-- star logo tablet-->
<div class="container-fluid">
	<div class="container-lg">
		<div class="row mt-4 mb-4 ">

			<div class="col-12 col-md-3 mt-2 d-none d-md-block">
				<img class="h_logo" src="public/upload/logomva.png">
			</div>

			<div class="col-12 col-md-4 d-flex align-items-center mt-4 d-none d-md-block" style="position: relative;">
				<input class="form-control rounded-pill border border-black" type="text" placeholder="Tìm kiếm...">
				<div class="timkiem"><i class="bi bi-search"></i></div>
			</div>

			<div class="col-12 col-md-4 mt-2 d-none d-md-block">
				<div class="d-flex justify-content-evenly align-items-center">
					<div class="nut_dtn"><a href="http://localhost/muaban/dangtin">Đăng tin ngay</a></div>
					<div>
						<div class="dropdown">
							<a class="btn dropdown-toggle d-flex align-items-center" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-person-circle me-2" style="font-size:40px; color:green"></i>
								<div class="d-flex flex-column">
									<p class="mb-0 fw-bold fs-18" style="color: green;">Trần Minh</p>
									<p class="mb-0">tranminh</p>
								</div>
							</a>

							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="http://localhost/muaban/danhsachtin">Quản lý tin đăng</a></li>
								<li><a class="dropdown-item" href="http://localhost/muaban/profile">Chỉnh sửa hồ sơ</a></li>
								<li><a class="dropdown-item" href="#">Đăng xuất</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-1 d-flex justify-content-end d-none d-md-block">
				<div class="d-flex" style="margin-top: 25px;">
					<div class="me-4"><a href=""><img src="public/upload/vn.png" alt=""></a></div>
					<div ><a href=""><img src="public/upload/gb.png" alt=""></a></div>
				</div>
			</div>
		</div>


	</div>
</div>
<!-- end logo -->

<!-- star logo mobile-->
<div class="container-fluid">
	<div class="container-lg">
		<div class="row ">

		<div class="col-3 mt-3 d-block d-md-none ">
			<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
				<i class="bi bi-list"></i>
			</a>
			<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
				<div class="offcanvas-header">
					<div class="d-flex align-items-center mt-4 w-75" style="position: relative;">
						<input class="form-control rounded-pill border border-black" type="text" placeholder="Tìm kiếm...">
						<div class="timkiem"><i class="bi bi-search"></i></div>
					</div>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="nav nav-tabs nav-item flex-column align-items-baseline">

						<li class="nav-item ">
							<div class="d-flex p-2  w-100  d-flex justify-content-between" data-id='2'>
								<div class="text-light fw-bold hv_lg">
									Trang chủ
								</div>
							</div>
						</li>

						<li class="nav-item ">
							<div class="d-flex p-2  w-100  d-flex justify-content-between" data-id='2'>
								<div class="text-light fw-bold hv_lg">
									Giới thiệu
								</div>
							</div>
						</li>


						<li class="nav-item ms-2">

							<div class="cottrai_hovera d-flex p-2  w-100  d-flex justify-content-between" data-id='2'>
								<div class="text-light fw-bold hv_lg">
									MUA BÁN DOANH NGHIỆP
								</div>
								<div class="d-flex  text-light con">
									<i class="bi bi-chevron-down hien2"></i>
									<i class="bi bi-chevron-up an2" style="display: none;"></i>
								</div> 
							</div>
							<div class="dropdown-menua px-4 pb-1  w-100" style="display: none;">
								<a class="d-block text-decoration-none  rounded-0" href="" >
									Mua bán doanh nghiệp toàn quốc
								</a>
								<a class="d-block text-decoration-none  rounded-0" href="">
									Mua bán doanh nghiệp vay vốn
								</a>
								<a class="d-block text-decoration-none  rounded-0" href="">
									Mua bán doanh nghiệp đấu thầu
								</a>
							</div>

						</li>

					</ul>
					<div class="d-flex flex-column align-items-baseline mt-4">
						<div class="nut_lg ms-4"><a href="http://localhost/muaban/logon">Đăng Ký</a></div>
						<div class="nut_lg mt-4"><a href="http://localhost/muaban/login">Đăng nhập</a></div>
						<div class="nut_dtn mt-4"><a href="http://localhost/muaban/dangtin">Đăng tin ngay</a></div>
					</div>
					<div class="dropdown">
							<a class="btn dropdown-toggle d-flex align-items-center" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-person-circle me-2" style="font-size:40px; color:green"></i>
								<div class="d-flex flex-column">
									<p class="mb-0 fw-bold fs-18" style="color: green;">Trần Minh</p>
									<p class="mb-0">tranminh</p>
								</div>
							</a>

							<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<li><a class="dropdown-item" href="http://localhost/muaban/danhsachtin">Quản lý tin đăng</a></li>
								<li><a class="dropdown-item" href="http://localhost/muaban/profile">Chỉnh sửa hồ sơ</a></li>
								<li><a class="dropdown-item" href="#">Đăng xuất</a></li>
							</ul>
						</div>
				</div>
			</div>
		</div>
		<div class="col-6 mt-3 d-block d-md-none ">
			<img class="h_logo w-75" src="public/upload/logomva.png">
		</div>
		<div class="col-3 mt-3 d-block d-md-none ">
			<div class="d-flex">
				<div class="me-4"><a href=""><img src="public/upload/vn.png" alt=""></a></div>
				<div ><a href=""><img src="public/upload/gb.png" alt=""></a></div>
			</div>
		</div>


	</div>
	</div>
	
</div>

<!-- end logo mobile-->




<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.cottrai_hovera').click(function(){
			$(this).next().slideToggle();
			var id=$(this).data('id');
			var mot='.hien'+id;
			var hai='.an'+id;
			$(mot).toggle();
			$(hai).toggle();
		});
	});
</script>

