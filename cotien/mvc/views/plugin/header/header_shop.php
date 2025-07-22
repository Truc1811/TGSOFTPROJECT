<div class="menu_2 shadow toadob<?php echo $value->id; ?>">
	<div class="container-lg">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-xxl-8 d-flex flex-wrap row-cols-md-5 row-cols-2 align-items-center">
				<!-- aa1 -->
					<div class="col p-2 theten cursor">
						<a class="text-decoration-none text-black chu-cbold" href="">
							<div class="card border-0 hu_header">
								<div class="mb-3">
									<img class="w-100 shadow-lg" src="public/demo/portrait_uncanny.jpg">
								</div>
								<div class="card-body p-0">
									<h6 class="fw-bold">FREE COMIC BOOK DAY 2025: AMAZING SPIDER-MAN/ULTIMATE UNIVERSE (2025) #1</h6>
								</div>
							</div>
						</a>
					</div>
					
					<!-- aa1 end -->
			</div>
			<div class="col-12 d-flex justify-content-center">
					<?php foreach ($m2 as $key => $va2) {
						// code...
					 ?>
					
						<a class="cursor text-decoration-none p-2 d-inline-block text-black chu-cbold hover_chu_primary" href="<?php echo $value->link; ?>/<?php echo $va2->khongdau; ?>">
							<?php echo $va2->name; ?>
						</a>	
					
					<?php } ?>
			</div>
		</div>
	</div>
		
</div>