<style type="text/css">
	.bangchat {
	    position: fixed;
	    bottom: 40vh;
	    right: 1vw;
	    display: grid;
	    grid-template-columns: 100%;
	    width: 3vw;
	    grid-gap: 0.5vw 0;
	    z-index: 30;
	}

	/*-----------------------------Ipad dọc(768 x 1024)----------------------------------*/
	@media screen and (max-width: 1024px) {  

	}

	/*--------------------Di động-----------------------------------------------------*/
	@media screen and (max-width: 780px) {
	    .bangchat {
	        position: fixed;
	        bottom: 40vh;
	        right: 1vw;
	        display: grid;
	        grid-template-columns: 100%;
	        width: 13vw;
	        grid-gap: 1vw 0;
	        z-index: 30;
	    }

	}
</style>

<div class="bangchat">
	<div>
		<?php 
		$phone=$cauhinh[0]->hotline;
		$phone=str_replace('.', '',$phone); 
		$phone=str_replace(' ', '',$phone); 
		$phone=str_replace('-', '',$phone); 
		$phone=str_replace('_', '',$phone); 
		$phone=substr($phone,0,10); 
		?>
		<a href="tel:<?php echo $phone; ?>">
			<img style="width: 80%;" src="public/upload/lienhe/ho.png">
		</a>
	</div>
	<div>
		<a target="_blank" href="https://zalo.me/<?php echo $cauhinh[0]->zalo; ?>">
			<img style="width: 80%;" src="public/upload/lienhe/za.png">
		</a>
	</div>
	<div>
		<?php 
			$mangfa=explode('/', $cauhinh[0]->facebook);
		?>
		<a target="_blank" href="https://www.messenger.com/t/<?php echo array_pop($mangfa); ?>">
			<img style="width: 80%;" src="public/upload/lienhe/me.png">
		</a>
	</div>
	<div>
		<a target="_blank" href="<?php echo $cauhinh[0]->facebook; ?>">
			<img style="width: 80%;" src="public/upload/lienhe/fa.png">
		</a>
	</div>
	<!-- <div>
		<?php 
			$mangfa=explode('/', $cauhinh[0]->facebook);
		?>
		<a target="_blank" href="https://www.messenger.com/t/<?php echo array_pop($mangfa); ?>">
			<img style="width: 80%;" src="public/upload/lienhe/yo.png">
		</a>
	</div> -->
</div>