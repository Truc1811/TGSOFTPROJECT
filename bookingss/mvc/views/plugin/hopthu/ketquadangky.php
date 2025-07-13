<?php
$slider = json_decode($data['slider']);
	$tintucall = json_decode($data['tintucall']);
	$qc = json_decode($data['qc']);
	$qct = json_decode($data['qct']);
	$qcb = json_decode($data['qcb']);
	$qcr = json_decode($data['qcr']);
	$qcl = json_decode($data['qcl']);
	$dv=json_decode($data['dv']);


?>







<div class="row ">
	<div class="col-md-2 col-12 my-3">
		<div class="d-md-none d-flex flex-wrap ">

				<?php foreach ($qcr as $key => $value) {
					# code...
				?>
					<div class="col-2">
						<img class="w_img my-3" src="public/upload/<?php echo $value->image; ?>" alt="">
					</div>
				<?php } ?>
		</div>
		<div class="d-md-block d-none">
			<?php foreach ($qcr as $key => $value) {
			# code...
			?>
				<img class="w-100 my-3" src="public/upload/<?php echo $value->image; ?>" alt="">
			<?php } ?>
		</div>
	</div>
	<div class="col-12 col-md-8 py-4">
		<div>
			<?php 
				if(json_decode($data['kq'])=='true'){
					echo 'Bạn đã đăng ký thành công. Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.';
				} else {
					echo 'Quá trình gửi thông tin bị lỗi';
				}
			?>

		  <br/>
		<a href="trang-chu">
			Back
		</a>
		</div>
	</div>

	


	<div class="col-md-2 col-12 my-3">
		<div class="d-md-none d-flex flex-wrap ">

				<?php foreach ($qcr as $key => $value) {
					# code...
				?>
					<div class="col-2">
						<img class="w_img my-3" src="public/upload/<?php echo $value->image; ?>" alt="">
					</div>
				<?php } ?>
		</div>
		<div class="d-md-block d-none">
			<?php foreach ($qcr as $key => $value) {
			# code...
			?>
				<img class="w-100 my-3" src="public/upload/<?php echo $value->image; ?>" alt="">
			<?php } ?>
		</div>
	</div>
</div>





