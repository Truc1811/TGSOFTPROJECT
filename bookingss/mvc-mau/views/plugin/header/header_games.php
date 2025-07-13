<?php 
	$header_game=array(
		array('https://cdn.marvel.com/content/1x/marvelrivals_lob_crd_01.jpg',"Marvel Rivals",'2024'),
		array('https://cdn.marvel.com/content/1x/marvelcosmicinvasion_lob_crd_01.jpg',"MARVEL Cosmic Invasion",'2025'),
		array('https://cdn.marvel.com/content/1x/marvel1943riseofhydra_lob_crd_01.jpg',"Marvel 1943: Rise of Hydra",'2026'),
		array('https://cdn.marvel.com/content/1x/marvelmysticmayhem_lob_crd_01.jpg',"MARVEL Mystic Mayhem",''),
		array('https://cdn.marvel.com/content/1x/marvelvscapcom_lob_crd_01.jpg',"MARVEL vs. CAPCOM Fighting Collection: Arcade Classics",'2024'),
		array('https://cdn.marvel.com/content/1x/marvelsspiderman2_lob_crd_02.jpg',"Marvel's Spider-Man 2",'2023'),
	);
?>
<div class="menu_2 shadow toadob<?php echo $value->id; ?>">
	<div class="container-lg">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-xxl-8 d-flex flex-wrap row-cols-md-6 row-cols-2 align-items-center">
				<!-- aa1 -->
				<?php 
					foreach ($header_game as $key => $value) {
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