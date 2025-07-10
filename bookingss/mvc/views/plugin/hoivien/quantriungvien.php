<style type="text/css">
		.mt_qt{
			margin-top: 50px;
		}
	.accordion-button:not(.collapsed) {
    color: #0c63e4; 
    background-color: none !important; 
    box-shadow: none; 
}
	@media (min-width: 768px){
		.mt_qt{
			margin-top: 60px;
		}
	}
	@media (min-width: 1400px){
		.mt_qt{
			margin-top: 70px;
		}
	}
</style>
<script>
    $(document).ready(function(){
        // up ảnh
        $('.get_h').on('change', function() {
              var tmppath = URL.createObjectURL(event.target.files[0]);
              console.log(tmppath);
              // var fileName = file.name;
              // var fileSize = file.size;
              var hinh='<img class="pe-2 pb-2 phongto cursor" style="height:8vh" src="' + tmppath + '" />';
              $('.hienthi').html(hinh);
        });
				// up ảnh
        $('.get_h1').on('change', function() {
              var tmppath = URL.createObjectURL(event.target.files[0]);
              console.log(tmppath);
              // var fileName = file.name;
              // var fileSize = file.size;
              var hinh='<img class="pe-2 pb-2 phongto cursor" style="height:8vh" src="' + tmppath + '" />';
              $('.hienthi1').html(hinh);
        });

        $('.get_hm').on('change', function() {
            $('.hienthim').html('');
            for (var i = 0; i <15; i++) {
              var tmp = URL.createObjectURL(event.target.files[i]);
              if(tmp.length>6){
                  chuoi='<img class="pe-2 pb-2 phongto cursor" style="height:8vh" src="' + tmp + '" />';
                  $('.hienthim').append(chuoi);

              }
            }
        });
            

    });
</script>
<div class="row p-7">
	<?php 
	if(@$_COOKIE['hoivien']){
		$mang_u=explode('|',$_COOKIE['hoivien']);
	 ?>
	<!--  <div class="bg-white my-2">
		<div class="p-3 text-center border border-1">
			<div class="d-flex justify-content-center py-3 align-items-center">
				<div class="col-8 fs-3 text-dark fw-bold">
					Cập nhật tài khoản
				</div>
			</div>
			<div class="px-md-3 px-xxl-5 px-0 py-3 d-flex justify-content-center align-items-center">
				<div class="col-xxl-8 col-md-8 col-12">
						 	<form method="post" action="hoivien/capnhathoivien" enctype="multipart/form-data">
							<div class="p-3">
								<div class="text-start">Họ & tên</div>
								<div class="input-group mb-3 px-0">
								  <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
								  <input type="text" class="form-control" name="name" id="name" value="<?php echo $mang_u[1]; ?>">
								  <input type="hidden" class="form-control" name="id" value="<?php echo $mang_u[0]; ?>">
								</div>
								<div class="text-start">Số điện thoại</div>
								<div class="input-group mb-3  px-0">
								  <span class="input-group-text" id="basic-addon1"><i class="bi bi-phone-fill"></i></span>
								  <input type="text" class="form-control" name="hotline" id="hotline" value="<?php echo $mang_u[3]; ?>">
								</div>
								<div class="text-start">Email</div>
								<div class="input-group mb-3  px-0">
								  <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
								  <input type="text" class="form-control" name="email" id="email" value="<?php echo $mang_u[2]; ?>">
								</div>
								<div class="text-start">Địa chỉ</div>
								<div class="input-group mb-3 px-0">
								  <span class="input-group-text" id="basic-addon1"><i class="bi bi-house"></i></span>
								  <input type="text" class="form-control" name="diachi" id="address" value="<?php echo $mang_u[4]; ?>">
								</div>
	

							    <div class="px-0 text-end">
							    		<input class="btn btn-success" type="submit" value="Cập nhật thông tin" name="capnhatthongtin">
							    </div>
							</div>
						</form>
				</div>

			</div>

		</div>
	</div> -->

	<div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xxl-12 col-md-12">
        <div class="" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="d-flex flex-wrap justify-content-center">
              <div class="col-xxl-6 col-md-6 col-12 order-2 order-lg-1">

                <p class="text-center h3 fw-bold mb-3 ">Cập nhật tài khoản</p>

                <form method="post" action="hoivien/capnhathoivien" enctype="multipart/form-data" class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="name" id="name" class="form-control" value="<?php echo $mang_u[1]; ?>"/>
                      <input type="hidden" class="form-control" name="id" value="<?php echo $mang_u[0]; ?>">
                      <label class="form-label" for="name">Họ tên</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" id="email"  class="form-control" value="<?php echo $mang_u[2]; ?>" />
                      <label class="form-label" for="email">Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" name="hotline" id="hotline" class="form-control" value="<?php echo $mang_u[3]; ?>" />
                      <label class="form-label" for="hotline">Số điện thoại</label>
                    </div>
                  </div>


                   <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-location-dot fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="diachi" id="diachi" class="form-control" value="<?php echo $mang_u[4]; ?>"/>
                      <label class="form-label" for="diachi">Địa chỉ</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
  									<input class="btn btn-success" type="submit" value="Cập nhật thông tin" name="capnhatthongtin">
                  </div>

                </form>

              </div>
              <div class="col-xxl-6 col-md-6 col-12 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


	<?php
	} else {
	?>

	Đăng nhập thất bại. Xin vui lòng đăng nhập lại

	<?php
	}
	?>

</div>