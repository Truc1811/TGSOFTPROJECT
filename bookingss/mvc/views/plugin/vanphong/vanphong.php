<!-- require vào nơi muốm sử dụng -->
<script type="text/javascript">
	$(document).ready(function(){
		//van  phong
		$('.vanphong').click(function(){
			var id=$(this).data('id');
			var map=$(this).data('map');
			$('.loadbando').attr('src',map);
			$('.vanphong').removeClass('text-primary');
			$(this).addClass('text-primary');
			$.post(
						'vanphong/loadvanphong', // URL 
						{'id': id},  // Data
						function(kqlvp){ // Successvp
							$('.loadvp').html(kqlvp);
						}, 
						'text' // dataTyppe
		   		);
		});
	});
</script>

<div class="col-xxl-6 col-md-7 col-12">
		<iframe class="loadbando" src="<?php echo $cauhinh[0]->google_map; ?>" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
<div class="col-xxl-6 col-md-5 col-12">
	<div class="loadvp">
		<div class="text-dark fw-bold mb-1 fs-5 text-uppercase">
			Trụ sở công ty
		</div>
		<div class="mb-1">
			<i class="bi bi-geo-alt-fill text-danger"></i> Địa chỉ: <?php echo $cauhinh[0]->address; ?>
		</div>
		<div class="mb-1">
			<i class="bi bi-telephone-fill text-danger"></i> Hotline: <?php echo $cauhinh[0]->hotline; ?>
		</div>
		
		
	</div>
	<div class="mb-1">
			<i class="bi bi-envelope-fill text-danger"></i> Email: <?php echo $cauhinh[0]->email; ?>
	</div>

	<div class="my-3">
		<div class="text-dark fw-bold mb-1 fs-5 text-uppercase">
			Danh sách văn phòng đại diện
		</div>
		<div class="mp-1 vanphong text-primary"style="cursor:pointer ;" onclick="window.location.href='lien-he'">
			<i class="bi bi-pin-map-fill text-danger"></i>&ensp;Trụ sở chính
				
		</div>
		<?php  
			$vanphong=json_decode($data['vanphong']);
			foreach ($vanphong as $key => $value) {
		?>
			<div class="mp-1 vanphong" data-map="<?php echo $value->bando; ?>" data-id="<?php echo $value->id; ?>"
				style="cursor:pointer ;"
			>
				<i class="bi bi-geo-alt-fill text-danger"></i>&ensp;<?php echo $value->name; ?>
					
			</div>
		<?php
			}
		?>	
	</div>
	
</div>