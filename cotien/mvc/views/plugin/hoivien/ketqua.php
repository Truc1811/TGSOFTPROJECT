<style type="text/css">
	.header-top{
		background-color: #00A86E;
	}
	@media(min-width: 768px){
		.header-top{
			background-color: #00A86E;
		}
	}
	@media(min-width: 1400px){
		.header-top{
			background-color: #00A86E;
		}
	}
</style>
<div class="row justify-content-center">
	<div class="col-6 my-4">
		<div class="bg-white p-3 shadow text-center">
			<?php 
			$tr=json_decode($data['tr']);
			if($tr=='Đăng ký thành công'){
			 ?>
			
				<img class="w-25 mb-4" src="public/demo/smile.png" alt="">
			<?php } else { ?>
				<img class="w-25 mb-4" src="public/demo/oops.png" alt="">
			<?php } ?>
			<h6>
				<?php 
					echo $tr;
				 ?>
			</h6>
			<?php 
			if($tr=='Đăng ký thành công'){
			?>
			<div class="text-center my-3">
				<button class="btn header-top text-white "  data-bs-toggle="modal" data-bs-target="#exampleModal">
					Đăng nhập <i class="bi bi-box-arrow-in-up-right"></i>
				</button>
			</div>
			<?php 
			} else {
			?>

			<div class="text-center my-3">
				<a class="btn header-top text-white " href="hoivien/kiemtratt/dangky">
					Đăng ký lại
				</a>
			</div>

			<?php 
			}
			?>
		</div>
	</div>
</div>