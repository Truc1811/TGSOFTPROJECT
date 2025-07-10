<style type="text/css">
	.bangchat2 {
		width: 100% !important;
	   
	    bottom: 0;
	    right: 0;
	    z-index: 10000;
	    
	    padding: 10px;
		font-size: 12px;
	}
	.frame-icon{
		display: flex;
		align-items: center;
		background-color: #fff;
		margin-bottom: 10px;
		padding: 5px 10px;
		border-radius: 10px;
		box-shadow: 0 0 10px 0 rgba(0,0,0,.08);
		font-size: 12px;
	}
	.frame-sp{
		background-color: #fff;
		margin-bottom: 10px;
		padding: 10px 10px;
		border-radius: 10px;
		box-shadow: 0 0 10px 0 rgba(0,0,0,.08);
		font-size: 12px;
	}
	.info{
		padding-left: 10px;
		display: flex;
		flex-direction: column;
		display: none;
	}
	.icon-box{
		width: 35px;
		display: block;
    text-align: center;
	}
	.icon-box1{
		width: 30px;
		display: block;
    text-align: center;
	}
	.icon-box > img{
		width: 100%;
	}
	.icon-box1 > img{
		width: 100%;
	}
	a {
    color: #000000;
    text-decoration: none;
	}
	.btnTop{
		display: flex;
	    justify-content: center;
	    align-items: center;
	    width: 45px;
	    height: 45px;
	    border-radius: 50%;
	    border:1px solid #B20000;
	}
	.framemxh{
			display: flex;
	    justify-content: center;
	    align-items: center;
	    width: 55px;
	    height: 55px;
	    border-radius: 50%;
	    border:1px solid #fff;
	    background-color: #f5f5f5;
	}
	.icon-top{
		color: #B20000;
	}


	/*-----------------------------Ipad dọc(768 x 1024)----------------------------------*/
	@media(min-width: 1024px) {  
		.bangchat {
	   position: fixed;
	    bottom: 54px;
	    right: 10px;
	    z-index: 10000;
	    background-color: white;
	    border-top-left-radius: 3.5vw;
	    border-top-right-radius: 3.5vw;
	    border-bottom-left-radius: 3.5vw;
	    border-bottom-right-radius: 3.5vw;
	    padding: 0.4vw;
	}
	.frame-icon{
		/*display: flex;*/
		align-items: center;
		/*background-color: #fff;*/
		margin-bottom: 10px;
		text-align: center;
		padding: 5px 10px;
		border-radius: 10px;
		/*box-shadow: 0 0 10px 0 rgba(0,0,0,.08);*/
		font-size: 12px;
	}
	
	.icon-box img{
		width: 35px;
		text-align: center;
	}
	
	a {
    color: #000000;
    text-decoration: none;
	}
	.btnTop{
		display: flex;
	    justify-content: center;
	    align-items: center;
	    width: 45px;
	    height: 45px;
	    border-radius: 50%;
	    border:1px solid var(--mauxam);
	}
	.icon-top{
		color: #B20000;
	}
	#myBtn {
		right: 10px;
	  position: fixed;
	  z-index: 99;
	  border: none;
	  outline: none;
	  border: 1px solid var(--mauxam);
	  cursor: pointer;
	}
	}

	/*--------------------Di động-----------------------------------------------------*/
	@media(min-width: 768px) {
		.bangchat {
		   position: fixed;
		    bottom: 54px;
		    right: 10px;
		    z-index: 10000;
		    background-color: white;
		    border-top-left-radius: 3.5vw;
		    border-top-right-radius: 3.5vw;
		    border-bottom-left-radius: 3.5vw;
		    border-bottom-right-radius: 3.5vw;
		    padding: 0.4vw;
		}
		.frame-icon{
			/*display: flex;*/
			align-items: center;
			/*background-color: #fff;*/
			margin-bottom: 10px;
			text-align: center;
			padding: 5px 10px;
			border-radius: 10px;
			/*box-shadow: 0 0 10px 0 rgba(0,0,0,.08);*/
			font-size: 12px;
		}
		
		.icon-box img{
			width: 35px;
			text-align: center;
		}
		
		a {
	    color: #000000;
	    text-decoration: none;
		}
		.btnTop{
			display: flex;
		    justify-content: center;
		    align-items: center;
		    width: 45px;
		    height: 45px;
		    border-radius: 50%;
		    border:1px solid var(--mauxam);
		}
		.icon-top{
			color: #B20000;
		}
		#myBtn {
			right: 10px;
		  position: fixed;
		  z-index: 99;
		  border: none;
		  outline: none;
		  border: 1px solid var(--mauxam);
		  cursor: pointer;
		}
	}


</style>

<div class="bangchat d-md-block d-none">
	<?php 
	$phone=$cauhinh[0]->hotline;
	$phone=str_replace('.', '',$phone); 
	$phone=str_replace(' ', '',$phone); 
	$phone=str_replace('-', '',$phone); 
	$phone=str_replace('_', '',$phone); 
	$phone=substr($phone,0,10); 
	?>
	<!-- <a target="_blank" class="frame-icon" href="tel:<?php echo $phone; ?>">
		<div class="icon-box">
			<img  class="img" src="public/upload/lienhe/ho.png">
		</div>	

		<div class="info">
			<b><?php echo $phone; ?></b>
			<span>(8h-24h)</span>
		</div>
	</a> -->
	<div class="shadow bangchat py-3 mb-3">
		
		<a target="_blank" class="frame-icon" href="">
			<div class="icon-box">
				<img  class="img" src="public/upload/lienhe/ho.png">
			</div>	

			<div class="info fs-12">
				Zalo
				
			</div>
		</a>
		<a target="_blank" class="frame-icon" href="https://zalo.me/<?php echo $cauhinh[0]->zalo; ?>">
			<div class="icon-box">
				<img  class="img" src="public/upload/lienhe/zalo.png">
			</div>	

			<div class="info fs-12">
				Zalo
				
			</div>
		</a>
		<?php 
				$mangfa=explode('/', $cauhinh[0]->facebook);
		?>
		<a target="_blank" class="frame-icon" href="https://www.messenger.com/t/<?php echo array_pop($mangfa); ?>">
			<div class="icon-box">
				<img  class="img" src="public/upload/lienhe/messenger.png">
			</div>	

			<div class="info fs-12">
				Facebook
				
			</div>
		</a>
		
	</div>
	
	
	<!-- <button onclick="topFunction()" class="d-flex justify-content-end myBtn">
		<a  class="backTop">
			<i class="bi bi-caret-up icon-top"></i>
		</a>
	</button> -->
	<button onclick="topFunction()" id="myBtn" title="Go to top" class="btnTop ">
		<i class="bi bi-caret-up icon-top"></i>
	</button>

</div>


<!-- hien thi dien thoai -->
<!-- <div class="bangchat2 d-md-none d-block bg-primary">
	<?php 
	$phone=$cauhinh[0]->hotline;
	$phone=str_replace('.', '',$phone); 
	$phone=str_replace(' ', '',$phone); 
	$phone=str_replace('-', '',$phone); 
	$phone=str_replace('_', '',$phone); 
	$phone=substr($phone,0,10); 
	?>
	<div class="d-flex justify-content-between align-items-center">
		<div class="col-auto framemxh">
			<a target="_blank" class="" href="tel:<?php echo $phone; ?>">
				<div class="icon-box1">
					<img  class="img" src="public/upload/lienhe/ho.png">
				</div>	

				<div class="info">
					<b><?php echo $phone; ?></b>
					<span>(8h-24h)</span>
				</div>
			</a>
		</div>
		<div class="col-auto framemxh"> 
			<a target="_blank" class="" href="https://zalo.me/<?php echo $cauhinh[0]->zalo; ?>">
				<div class="icon-box1">
					<img  class="img" src="public/upload/lienhe/za.png">
				</div>	

				<div class="info">
					<b>Chat Zalo</b>
					<span>(8h-24h)</span>
				</div>
			</a>
		</div>
			<?php 
				$mangfa=explode('/', $cauhinh[0]->facebook);
		?>
		<div class="col-auto framemxh">
				<a target="_blank" class="" href="https://www.messenger.com/t/<?php echo array_pop($mangfa); ?>">
					<div class="icon-box1">
						<img  class="img" src="public/upload/lienhe/me.png">
					</div>	

					<div class="info">
						<b>Chat Facebook</b>
						<span>(8h-24h)</span>
					</div>
				</a>
		</div>
		
		<div class="col-auto">
			<button onclick="topFunction()" id="myBtn2" title="Go to top" class="framemxh ">
				<i class="bi bi-box-arrow-in-up" style="font-size: 25px"></i>
			</button>
		</div>
	</div>
</div> -->



<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>