<?php 
	$thuoctinh=json_decode($data['thuoctinh']);
?>
<style type="text/css">
	.px-footer{
    	padding-left: 0vw;
    	padding-right: 0vw;
    }
    .bg-footer-1{
    	background-color: var(--footer-mauxam);
    }
    .w_20_ft{
    	width: 50%;
    }
    .bg-footer-2{
    	background-color: var(--footervieclam);
    	
    }
    .header-top {
	    background-color: var(--header-top);
	}
	.footer-text{
		color: #f7f4f4;
		opacity: 0.7;
	}
	.cursor{
		cursor: pointer;
	}
	.fanpage {
	    width: 300px;
	    height: 140px;
	    background: linear-gradient(180deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.1) 50%) , url(public/demo/banner-3.jpg) center/cover no-repeat;
	}
	.den{
		background: linear-gradient( to bottom, rgba(0, 0, 0, .7) 0%, rgba(0, 0, 0, 0) 100% );
	    height: 100%;
	    left: 0;
	    position: absolute;
	    top: 0;
	    width: 100%;
	    z-index: 0;
	}
	.bg{
    	background-size: cover;
    	background-repeat: no-repeat;
    	background-position: center;
    }
    .ps-125{
		padding-left: 0rem;
	}
	.btn-addon{
		background-color: #8A5FCA;
	    color: #fff!important;
	    padding: 5px 30px;
	}
	.btn-addon:hover{
		background-color: #5E2E86;
	}
	@media(min-width: 768px){
	.px-footer{
    	padding-left: 3vw;
    	padding-right: 3vw; 
	}
    .bg-footer-1{
    	background-color: var(--footer-mauxam);
    }
    .w_20_ft{
    	width: 20%;
    }
    .bg-footer-2{
    	background-color: var(--footervieclam);
    }
    .header-top {
	    background-color: var(--header-top);
	}
	.footer-text{
		color: #f7f4f4;
		opacity: 0.7;
	}
	.cursor{
		cursor: pointer;
	}
	.fanpage {
	    width: 300px;
	    height: 140px;
	    background: linear-gradient(180deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.1) 50%) , url(public/demo/banner-3.jpg) center/cover no-repeat;
	}
	.den{
		background: linear-gradient( to bottom, rgba(0, 0, 0, .7) 0%, rgba(0, 0, 0, 0) 100% );
	    height: 100%;
	    left: 0;
	    position: absolute;
	    top: 0;
	    width: 100%;
	    z-index: 0;
	}
	.bg{
    	background-size: cover;
    	background-repeat: no-repeat;
    	background-position: center;
    }
    .ps-125{
		padding-left: 1.25rem;
	}
	.btn-addon{
		background-color: #8A5FCA;
	    color: #fff!important;
	    padding: 5px 30px;
	}
	.btn-addon:hover{
		background-color: #5E2E86;
	}
    @media (min-width: 1400px){
        .px-footer{
        	padding-left: 13vw;
        	padding-right: 13vw;
        }
        .bg-footer-1{
        	background-color: var(--footer-mauxam);
        }
        .w_20_ft{
        	width: 20%;
        }
        .bg-footer-2{
        	background-color: var(--footervieclam);
        }
        .header-top {
		    background-color: var(--header-top);
		}
		.footer-text{
			color: #f7f4f4;
			opacity: 0.7;
		}
		.cursor{
			cursor: pointer;
		}
		.fanpage {
		    width: 300px;
		    height: 140px;
		    background: linear-gradient(180deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.1) 50%) , url(public/demo/banner-3.jpg) center/cover no-repeat;
		}
		.bg{
        	background-size: cover;
        	background-repeat: no-repeat;
        	background-position: center;
        }
        .den{
			background: linear-gradient( to bottom, rgba(0, 0, 0, .7) 0%, rgba(0, 0, 0, 0) 100% );
		    height: 100%;
		    left: 0;
		    position: absolute;
		    top: 0;
		    width: 100%;
		    z-index: 0;
		}
		.ps-125{
			padding-left: 1.25rem;
		}
		.btn-addon{
			background-color: #8A5FCA;
		    color: #fff!important;
		    padding: 5px 30px;
		}
		.btn-addon:hover{
			background-color: #5E2E86;
		}
    }
</style>
<div class="row px-footer bg-footer-2 py-3">
	<div class="d-flex flex-wrap">
		<div class="col-md-4 col-12 ">
			<h6 class="text-uppercase text-white my-3 d-none">việc làm theo ngành nghề</h6>
			<div class="d-flex flex-wrap justify-content-between d-none">
				<div class="col-md-6 col-12">
					<!-- <ul class="list-unstyled mb-0">
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm kế toán</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm bán hàng</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm IT</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm Hành chính nhân sự</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm Giao hàng / Kho vận</li>
					</ul> -->
					<ul class="list-unstyled mb-0">
						<?php 
							foreach ($thuoctinh as $key => $value) {
								if(in_array(2,explode(',',$value->nhomthuoctinh))){
						?>
						<li class="footer-text fs-14 cursor">
							<a class="" href="viec-lam-thuoc-tinh/all/1/<?php echo $value->id; ?>">
							<?php echo $value->name; ?>
							</a>
						</li>
						<?php 
							}}
						?>
					</ul>
				</div>
				<div class="col-md-5 col-12">
					<!-- <ul class="list-unstyled mb-0">
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm thực tập</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm thêm</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm spa , làm đẹp</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm sự kiện</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm truyền thông</li>
					</ul> -->	
				</div>
			</div>
			<h5 class="text-white">LIÊN HỆ</h5>
			<div class="col-12 d-flex text-white mb-3 ">
			 	<div class="col-3 col-md-4">
			 		<i class="bi bi-geo-alt-fill"></i>&ensp;Địa chỉ:
			 	</div>
			 	<div class="col-9 col-md-8 ps-2">
			 		Tòa No1T1 - Khu ngoại giao đoàn - Xuân Đỉnh - Bắc Từ Liêm
			 	</div>
			</div>
			<div class="col-12 d-flex text-white mb-3">
			 	<div class="col-3 col-md-4">
			 		<i class="bi bi-telephone-fill"></i>&ensp;Hotline:
			 	</div>
			 	<div class="col-9 col-md-8 ps-2">
			 		032.580.5786 (24/24)
			 	</div>
			</div>
		</div>
		<div class="col-md-5 col-12 ps-md-3 ps-0">
			<h6 class="text-uppercase text-white ps-125 my-3 d-none" onclick="window.location.href='viec-lam-thuoc-tinh'">việc làm theo địa điểm</h6>
			<div  class="d-flex flex-wrap justify-content-center mb-3 d-none">
				<div class="col-md-6 col-12">
					<ul class="list-unstyled mb-0">
						<?php 
							foreach ($thuoctinh as $key => $value) {
								if(in_array(4,explode(',',$value->nhomthuoctinh))){
						?>
						<li class="footer-text fs-14">
							<a class="cursor" href="viec-lam-thuoc-tinh/all/1/<?php echo $value->id; ?>"><?php echo $value->name; ?></a>
							
						</li>
						<?php 
							}}
						?>
					</ul>
				</div>
				<div class="col-md-5 col-12">
					<!-- <ul class="list-unstyled mb-0">
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm tại Đồng Nai</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm tại Vinh</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm tại Bắc Ninh</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm tại Bình Dương</li>
						<li class="footer-text fs-14 cursor" onclick="window.location.href='?p=tuyendung'">Việc làm tại Vũng Tàu</li>
					</ul> -->	
				</div>
			</div>
			<div class="text-start text-white">
				Đăng ký email để nhận những thông tin mới nhất về các khuyến mãi, tin tức, sự kiện của Jobopen
			</div>
			<div class="input-group my-3">
			  <input type="text" class="form-control-ft form-control" placeholder="Nhập email của bạn" aria-label="Recipient's username" aria-describedby="button-addon2">
			  <button class="btn btn-addon border border-white" type="button" id="button-addon2">Đăng ký</button>
			</div>
		</div>
		<div class="col-md-3 d-flex justify-content-md-end flex-column justify-content-center col-12">
		
			<div class="mb-3">
				<?php require "mvc/views/plugin/facebook/facebook.php"; ?>
			</div>
			
		</div>
	</div>
</div>
<!-- <div class="row px-footer bg-footer-2 py-4 ">
	<div class="d-flex flex-wrap justify-content-center">
		<div class="d-md-block d-none">
			<ul class="d-flex justify-content-center list-unstyled mb-0">
				<?php 
					foreach ($menu1 as $key1 => $value1) {
					
				?>
				<li class="col-auto menu-item text-white text-uppercase fs-14 position-relative" onclick="window.location.href='<?php echo $value1->link; ?>'">
					<?php if($value1->link=='trang-chu')?>
					<span class="fw-bold"><?php echo $value1->name; ?></span>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div> -->
<div class="row justify-content-center  align-items-center header-top py-3">
	<div class="text-white text-center">
		Copyright © 2023 Job Open 
	</div>
</div>