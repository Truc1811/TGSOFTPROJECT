<?php 
	$header_video=array(
		array('https://cdn.marvel.com/content/1x/poster_6366743464112_1902f84889b60e857b93e7cfc5113370_3.jpg',"The Fantastic Four Join Marvel Rivals!",""),
		array('https://cdn.marvel.com/content/1x/poster_6370246783112_30134a487c4a404d480e77abd26130ea_0.jpg',"One World Under Doom | Official Trailer | Marvel Comics",''),
		array('https://cdn.marvel.com/content/1x/poster_6369276853112_31b01e64cb052524705aa59e1f829784_1.jpg',"Avengers Try to Lift Mjolnir | Avengers: Age of Ultron | Official Clip",''),
		array('https://cdn.marvel.com/content/1x/poster_6368256164112_39900cc076170ef44fdfbbc53fd0a085_5.jpg',"Marvel’s Spider-Man 2 | PC Launch Trailer",''),
		
	);
?>
<div class="menu_2 shadow toadob<?php echo $value->id; ?>">
	<div class="container-lg">
		<div class="row justify-content-center">
			<div class="col-12 d-flex row-cols-md-6 justify-content-center pb-3 px-5">
				<div class="theten cursor">TRAILERS & EXTRAS</div>
				<div class="theten cursor">DIGITAL SERIES</div>
				<div class="theten cursor">ALL VIDEO</div>
			</div>
			<div class="col-12 text-center mb-4">
				<h1 class="chu">TRENDING VIDEO</h1>
			</div>
			<div class="col-12 col-md-10 col-xxl-8 d-flex flex-wrap row-cols-md-4 row-cols-2 align-items-center">
				<!-- aa1 -->
				<?php 
					foreach ($header_video as $key => $value) {
				?>
				<div class="col p-2 theten cursor">
					<a class="text-decoration-none text-black chu-cbold" href="">
						<div class="card border-0 hu_header">
							<div class="mb-3">
								<img class="w-100" src="<?php echo $value[0]; ?>">
							</div>
							<div class="card-body p-0">
								<h6 class="fw-bold">TRAILERS & EXTRAS</h6>
								<div>
									<?php echo $value[1]; ?>
								</div>
							</div>
						</div>
					</a>
				</div>
				<?php } ?>	
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