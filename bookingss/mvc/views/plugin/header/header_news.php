
<?php 
$header_newa=array(
	array('https://cdn.marvel.com/content/1x/ironhearttrailer2.jpg',"Ryan Coogler Breaks Down the ‘Ironheart’ Trailer",'Comics'),
	array('https://cdn.marvel.com/content/1x/thunderboltsbob2.jpg',"‘Thunderbolts*’ Star Lewis Pullman Breaks His Silence on Playing Sentry",'Comics'),
	array('https://cdn.marvel.com/content/1x/marvel-snap-new-x-men-season-article-card.jpg',"Class Is Now in Session with the New X-Men in 'MARVEL SNAP'",'Games'),
	array('https://cdn.marvel.com/content/1x/gsxmen2025001_card.jpg',"May 28's New Marvel Comics: The Full List",'Comics'),
);
?>



<div class="menu_2 shadow toadob<?php echo $value->id; ?>">
	<div class="container-lg">
		<div class="row justify-content-center">
			<div class="col-12 text-center d-flex justify-content-center pb-3">
				<div class="theten cursor">LASTEST NEWS</div>&emsp;
				<div class="theten cursor">ALL NEWS</div>
				
			</div>
			<div class="col-12 text-center mb-4 chu-cbold">
				<h1>TRENDING NEWS</h1>
			</div>
			<div class="col-12 col-md-10 col-xxl-10 d-flex flex-wrap row-cols-md-4 row-cols-2 align-items-center">
				<?php 
					foreach ($header_newa as $key => $value) {
						
				?>
					<!-- aa1 -->
					<div class="col p-2 theten cursor">
						<a class="text-decoration-none text-black chu-cbold" href="news/chitiet/45">
							<div class="card border-0 hu_header">
								<div class="mb-3">
									<img class="w-100 shadow-lg" src="<?php echo $value[0]; ?>">
								</div>
								<div class="card-body p-0">
									<h6 class="text-black-50 chu-cbold"><?php echo $value[2]; ?></h6>
								</div>
								<div class="card-body p-0">
									<h6 class=" chu-cbold"><?php echo $value[1]; ?></h6>
								</div>
							</div>
						</a>
					</div>
					
					<!-- aa1 end -->
				<?php
					}
				?>
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