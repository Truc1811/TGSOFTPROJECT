<!-- require trong header để sử dụng -->
<style type="text/css">
	.dropdown-toggle::after{
		content: unset;
	}
	.dropdown-menu {
		min-width: 10rem !important;
	}
	.hover_user:hover, focus, active{
		color: #164B60 !important;
	}
	.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1055;
    display: none;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    outline: 0;
    background-image: url(https://cdn.registerdisney.go.com/v4/asset/bundler/MARVEL/v4/images/v1/marvel-background-web.webp);
		background-size: cover;
		background-position: center;
	}
	.modal-content {
    position: relative;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 1.5vw;
    outline: 0;
	}
</style>
<?php 
			if(@!$_COOKIE['hoivien']){ 

		?>
		  <div class="dropdown">
	       <span id="tableButton" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
	        <span class="">
	           <i class="bi bi-person-circle"></i>&ensp;<span class="cursor" data-bs-toggle="modal" data-bs-target="#login">LOG IN</span> | <span class="cursor" onclick="window.location.href='hoivien/kiemtratt/dangky'">SIGN UP</span>
	        </span>
	        
	      </span>
	   
	      
	      <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="tableMenu">
	        	<li class="col-md-auto col-xxl-auto col-12  fs-14  menu-item1 p-1  cursor" onclick="window.location.href='hoivien/kiemtratt/dangky'" >
						<i class="bi bi-person-fill-add"></i>
						 Đăng ký
					</li>
	       	<li class="col-md-auto col-xxl-auto col-12  fs-14  menu-item1 p-1  cursor" data-bs-toggle="modal" data-bs-target="#login">
						<i class="bi bi-person-fill"></i>
						 Đăng nhập
					</li>
	      </ul> -->
    	</div>
		<?php 
		} else { 
				$mang_u=explode('|',$_COOKIE['hoivien']);
		?>
			<div class="dropdown">
       <span id="tableButton" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="">
           <i class="bi bi-person " style="font-size: 25px"></i>
        </span>
        
      </span>
   
      
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="tableMenu">
      		<li class="col-md-auto col-xxl-auto col-12   fs-14 text-dark menu-item1 p-1 " >
					 Xin chào! <span class="fw-bold"></span><?php echo $mang_u[1]; ?>
					</li>
        	<li class="col-md-auto col-xxl-auto col-12   fs-14 text-dark  menu-item1 p-1 cursor" onclick="window.location.href='hoivien/quantri'" >
					
					 Cập nhật thông tin
				</li>
       	<li class="col-md-auto col-xxl-auto col-12   fs-14 text-dark menu-item1 p-1 cursor" onclick="window.location.href='hoivien/kiemtratt/lichsumuahang'">
					 Lịch sử mua hàng
				</li>
				<li class="col-md-auto col-xxl-auto col-12   fs-14 text-dark menu-item1 p-1 cursor" onclick="window.location.href='hoivien/logout'">
					 Đăng xuất
				</li>
      </ul>
    	</div>

					<!-- <div class="">
						<i class="bi bi-person"></i>
					</div> 
					<div class="dropdown">
						<div class="d-flex align-items-center">
							<div class="border border-1 d-flex flex-wrap align-items-center justify-content-center ps-2">
								<div class="col-6 text-center text-truncate text-white">
									<?php echo $mang_u[1]; ?>
								</div>
								<div class="col-6">
									<ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
									    <li class="p-3">
									    	<p class="mb-0 text-secondary pe-2 mochu noidung1"><?php echo $mang_u[2]; ?></p>
									    </li>
									    <li class="p-3">
									    	<a class=" text-truncate text-decoration-none d-block" href="hoivien/quantri">
												<div class="chumautim">
													<i class="bi bi-people pe-2"></i>Quản trị
												</div>
											</a>
									    </li>
									    <li class="p-3">
									    	<div>
												<a class=" d-flex flex-nowrap text-decoration-none align-items-center justify-content-start chumautim" href="hoivien/logout">
													<i class="bi bi-door-closed pe-2"></i>Đăng xuất
												</a>
											</div>
									    </li>
									</ul>
								</div>
							</div>
							<div class="col-lg-auto col-auto ps-md-2 ps-0 my-lg-0 my-md-2">
								<span class="tien"><span class="load_tien"><?php echo number_format($mang_u[3]); ?></span><i class="bi bi-gem tien fs-6 px-2"></i> </span>
								&ensp;
							</div>
						</div>
					</div> -->

		<?php } ?>





<!-- modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header px-md-4 px-2">
        <h5 class="modal-title text-black" id="exampleModalLabel">Đăng nhập</h5>
        <button type="button" class="btn-close text-danger fs-14" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
      	<form method="post" action="hoivien/login">
      		<h3>Enter your email to continue</h3>
					<div class="input-group my-3 px-md-4 px-2">
					  <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
					  <input type="email" name="email_dn" class="form-control" placeholder="Email" required="required">
					</div>
					<div class="input-group my-3 px-md-4 px-2">
					  <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
					  <input type="password" name="matkhau_dn" class="form-control" placeholder="Mật khẩu" required="required">
					</div>
					<!-- <div class="input-group mb-3 px-md-4 px-0">
					  <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
					  <input type="password" name="matkhau_dn" class="form-control" placeholder="Mật khẩu" required="required">
					</div> -->
					<div class="col-12 px-md-4 px-2 border-top" style="margin-top:10px; padding-top:6px; font-size:85%">
	      		<div class="d-flex" >
			        Bạn chưa có tài khoản!vnjgmgjkgjgjk
			        <div class="text-danger fw-bold px-2 cursor"  onclick="window.location.href='hoivien/kiemtratt/dangky'" >
			            Đăng ký
			        </div>
			        -
			        <div class="text-danger fw-bold px-2 cursor"  onclick="window.location.href='hoivien/kiemtratt/quenmatkhau'" >
			            Quên mật khẩu ?
			        </div>
		       	</div>
	      	</div>
	        <div class="col-12 my-3 px-md-4 px-2">
	        	<input class="btn btn-success" type="submit" value="Đăng nhập" name="login">
	        </div>

      	</form>
      </div>
      
    </div>
  </div>
</div>