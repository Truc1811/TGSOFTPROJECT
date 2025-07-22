<?php 
	$header_comic=array(
		array('https://cdn.marvel.com/u/prod/marvel/i/mg/a/30/6825fbaf976b6/portrait_uncanny.jpg',"GIANT-SIZE X-MEN (2025) #1",'2025'),
		array('https://cdn.marvel.com/u/prod/marvel/i/mg/f/a0/6825fbae3ed4f/portrait_uncanny.jpg',"Ultimate Spider-Man (2024) #17",'2025'),
		array('https://cdn.marvel.com/u/prod/marvel/i/mg/c/30/6825fbeaa6a61/portrait_uncanny.jpg',"Avengers (2023) #26",'2025'),
		array('https://cdn.marvel.com/u/prod/marvel/i/mg/9/90/6825fbeac5481/portrait_uncanny.jpg',"Doom's Division (2025) #3",'2025'),
		array('https://cdn.marvel.com/u/prod/marvel/i/mg/1/00/6825fb9630547/portrait_uncanny.jpg',"Uncanny X-Men (2024) #15",'2025'),
		array('https://cdn.marvel.com/u/prod/marvel/i/mg/9/e0/6825fbae4b587/portrait_uncanny.jpg',"MARVEL DISNEY (2025) #1",'2025'),
	);
?>
<style>
	.theten:hover{
		color: red;
	}
</style>
<div class="menu_2 shadow toadob<?php echo $value->id; ?>">
	<div class="container-lg">
		<div class="row justify-content-center">
			<div class="col-12 d-flex row-cols-md-6 justify-content-center pb-3 px-5">
				<div class="theten cursor">RELEASE CALENDAR</div>
				<div class="theten cursor">MARVEL UNLIMITED</div>
				<div class="theten cursor">STORMBREAKERS</div>
				<div class="theten cursor">READING GUIDES</div>
				<div class="theten cursor">PRINT SUBCRIPTIONS</div>
				<div class="theten cursor">ALL COMICS</div>
			</div>
			<div class="col-12 text-center mb-4">
				<h1>LASTEST COMICS</h1>
			</div>
			<div class="col-12 col-md-10 col-xxl-8 d-flex flex-wrap row-cols-md-6 row-cols-2 align-items-center">
				<!-- aa1 -->
				<?php 
					foreach ($header_comic as $key => $value) {
				?>
				<div class="col p-2 theten cursor">
					<a class="text-decoration-none text-black chu-cbold" href="">
						<div class="card border-0 hu_header">
							<div class="mb-3">
								<img class="w-100 shadow-lg" src="<?php echo $value[0]; ?>">
							</div>
							<div class="card-body p-0">
								<h6 class="fw-bold"><?php echo $value[1]; ?></h6>
								<div>
									<?php echo $value[2]; ?>
								</div>
							</div>
						</div>
					</a>
				</div>
				<?php 
					}
				?>
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