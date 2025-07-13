<?php 
	$header_character=array(
		array('https://cdn.marvel.com/content/1x/433ybv_com_crd_01.jpg',"Black Widow ","Yelena Belova"),
		array('https://cdn.marvel.com/content/1x/435rgd_com_crd_01_1.png',"Red Guardian ",'Alexei Andreovitch Shostakov'),
		array('https://cdn.marvel.com/content/1x/015wsb_com_crd_01.jpg',"Winter Soldier",'Bucky Barnes'),
		array('https://cdn.marvel.com/content/1x/434usa_com_crd_01.jpg',"U.S.Agent",'John F. Walker'),
		array('https://cdn.marvel.com/content/1x/169ghs_com_crd_01.png',"Ghost",''),
		array('https://cdn.marvel.com/content/1x/346snt_com_crd_01.png',"Sentry ",'Robert “Bob”/”Robby” Reynolds'),
	);
?>
<style>
	.character{
		height: 8vw;
	}
</style>
<div class="menu_2 shadow toadob<?php echo $value->id; ?>">
	<div class="container-lg">
		<div class="row justify-content-center">
			<div class="col-12 d-flex row-cols-md-6 justify-content-center pb-3 px-5">
				<div class="theten cursor">ALL CHARACTERS</div>
				<div class="theten cursor">TEAMS & GROUPS</div>
				<div class="theten cursor">EXPLORE ALL</div>
			</div>
			<div class="col-12 text-center mb-4">
				<h1>TRENDING IN THE UNIVERSE</h1>
			</div>
			<div class="col-12 col-md-10 col-xxl-8 d-flex flex-wrap row-cols-md-6 row-cols-2 align-items-center">
				<!-- aa1 -->
				<?php 
					foreach ($header_character as $key => $value) {
				?>
				<div class="col p-1 theten cursor">
					<a class="text-decoration-none text-black chu-cbold" href="">
						<div class="card border-0 hu_header">
							<div class="">
								<img class="w-100 character" src="<?php echo $value[0]; ?>">
							</div>
							<div class="card-body p-2 bg-black text-white">
								<h6 class="fw-bold pb-4"><?php echo $value[1]; ?></h6>
								<h6 class="fs-14">
									<?php echo $value[2]; ?>
								</h6>
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