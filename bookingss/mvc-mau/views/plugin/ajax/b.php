<style>
	.loadanh{
		height: 35vw;
		width: 100vw !important;
	}
	
</style>
<script>
	$(document).ready(function(){
		$('.loada').click(function(){
			
			$.post(
					'loadhinh/loada', // URL 
					{'id_mn2' : 2},  // Data
					function(kqa){ // Success
						$('.loadanh').html(kqa);
					}, 
					'text' // dataTyppe
	   		);

		});
		$('.loadb').click(function(){
			
			$.post(
					'loadhinh/loadb', // URL 
					{'id_mn2' : 2},  // Data
					function(kqb){ // Success
						$('.loadanh').html(kqb);
					}, 
					'text' // dataTyppe
	   		);

		});
	});
</script>
<div class="row">
	<div class="loadanh" style="background-image:url(public/demo/gt.jpg); background-size:cover; background-repeat: no-repeat;">

		<div class="d-flex noidungtai justify-content-around text-white">
			<div class="loada">
				<span class="btn-light text-black rounded-pill px-3 py-2 cursor">
					Phòng khách
				</span>
				
			</div>
			<div class="loadb">
				<span class="btn-light text-black rounded-pill px-3 py-2 cursor">
					Phòng ngủ
				</span>
			</div>
		</div>
		
	</div>
</div>
