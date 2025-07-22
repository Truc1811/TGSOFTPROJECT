<style type="text/css">
		.mt_qt{
			margin-top: 50px;
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
<div class="row px-gt my-3">
	<?php 
	if(@$_COOKIE['hoivien']){
		$mang_u=explode(',',$_COOKIE['hoivien']);
	 ?>
		<nav class="mt_qt">
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
		    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Bảng tin đã đăng</button>
		    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Đăng tin</button>
		    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Tài khoản</button>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
		  	<?php require "mvc/views/plugin/client/action/bangtin.php" ?> hello
		  </div>
		  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		  	<?php require "mvc/views/plugin/client/action/dangtin.php" ?>
		  </div>
		  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
	  		<div class="row">
				<div class="col-lg-9 col-md-12 col-12 ">
					<div class="bg-white border rounded-2 mb-4 shadow-sm">
					<form method="post" action="hoivien/capnhathoivien" enctype="multipart/form-data">
						<div class="p-3">
							<div class="d-flex flex-wrap hienthi p-lg-4 p-md-3 p-0">
						        <?php if(strlen($mang_u[6])>9){?>
						        <img class="pe-2 pb-2 phongto cursor" style="height:8vh" src="public/upload/<?php echo $mang_u[6]; ?>"/>
						        <?php } ?>
						    </div>
						    <label for="image" class="fs-12 px-md-4 px-0">Logo công ty</label>
							<div class="input-group mb-3 px-md-4 px-0">
							  <span class="input-group-text" id="basic-addon1"><i class="bi bi-house"></i></span>
							  <input type="file" class="form-control get_h" id="image" name="image" >
							  <input type="hidden" name="image1" value="<?php echo $mang_u[6]; ?>">
							  <input type="hidden" name="id" value="<?php echo $mang_u[0]; ?>">
							</div>
							<label for="name" class="fs-12 px-md-4 px-0 mt-3">Tên công ty</label>
							<div class="input-group mb-3 px-md-4 px-0">
							  <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
							  <input type="text" class="form-control" name="name" id="name" value="<?php echo $mang_u[1]; ?>">
							</div>
							<label for="hotline" class="fs-12 px-md-4 px-0">Điện thoại</label>
							<div class="input-group mb-3 px-md-4 px-0">
							  <span class="input-group-text" id="basic-addon1"><i class="bi bi-phone-fill"></i></span>
							  <input type="text" class="form-control" name="hotline" id="hotline" value="<?php echo $mang_u[4]; ?>">
							</div>
							<label for="email" class="fs-12 px-md-4 px-0">Email</label>
							<div class="input-group mb-3 px-md-4 px-0">
							  <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
							  <input type="text" class="form-control" name="email" id="email" value="<?php echo $mang_u[2]; ?>">
							</div>
							<label for="address" class="fs-12 px-md-4 px-0">Địa chỉ công ty</label>
							<div class="input-group mb-3 px-md-4 px-0">
							  <span class="input-group-text" id="basic-addon1"><i class="bi bi-house"></i></span>
							  <input type="text" class="form-control" name="diachi" id="address" value="<?php echo $mang_u[5]; ?>">
							</div>
						    <div class="px-md-4 px-0 text-end">
						    		<input class="btn btn-primary" type="submit" value="Cập nhật thông tin" name="capnhatthongtin">
						    </div>
						</div>
					</form>
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