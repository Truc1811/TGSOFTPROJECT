<div class="menu_2 shadow toadob<?php echo $value->id; ?>">
	<div class="container-lg">
		<div class="row justify-content-center">
			<div class="col-12 d-flex justify-content-center">
					<?php foreach ($m2 as $key => $va2) {
						// code...
					 ?>
						<a class="text-decoration-none d-inline-block" href="<?php echo $value->link; ?>/<?php echo $va2->khongdau; ?>">
							<h4 class="text-black chu-cbold p-4 hover_chu_primary">
								<?php echo $va2->name; ?>
							</h4>
						</a>	
					
					<?php } ?>
			</div>
			<div class="col-12 py-3 d-flex justify-content-center">
				<div class="col-auto">
					<img class="" src="public/upload/<?php echo $cauhinh[0]->image_th; ?>" alt="" style="height: 60px;">
				</div>
				<div class="col-auto d-flex flex-wrap justify-content-center align-content-center ps-4">
					<div class="chu-cbold col-12">
						<?php echo $cauhinh[0]->text_tht; ?>
					</div>
					<div class="chu-cbold col-12 text-black-50">
						<?php echo $cauhinh[0]->text_thc; ?>
					</div>
				</div>
			</div>
			<div class="col-12 py-3 d-flex justify-content-center">
				
				<a class="mx-3 chu-cbold text-uppercase text-black-50 d-inline-block p-2 text-decoration-none hover_chu_primary" href="">
					<i class="fs-4 bi bi-facebook"></i>
				</a>
				<a class="mx-3 chu-cbold text-uppercase text-black-50 d-inline-block p-2 text-decoration-none hover_chu_primary" href="">
					<i class="fs-4 bi bi-youtube"></i>
				</a>
				<a class="mx-3 chu-cbold text-uppercase text-black-50 d-inline-block p-2 text-decoration-none hover_chu_primary" href="">
					<i class="fs-4 bi bi-tiktok"></i>
				</a>
				<a class="mx-3 chu-cbold text-uppercase text-black-50 d-inline-block p-2 text-decoration-none hover_chu_primary" href="">
					<i class="fs-4 bi bi-instagram"></i>
				</a>
			</div>
			<div class="col-12 col-md-10 col-xxl-8 d-flex flex-wrap row-cols-md-5 row-cols-2 align-items-center">
				<!-- aa1 -->
					
					
					<!-- aa1 end -->
			</div>
		</div>
	</div>
		
</div>