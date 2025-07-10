<?php
$loaidata='tintuc';
$tintuchot=json_decode($data['tintuchot']);
?>
<style type="text/css">
.chayrecord:hover{
	cursor: pointer;
	color: rgb(34, 188, 238);
}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){
			$('.chayrecord').fadeOut(200,'swing',function(){
				var chay='<?php echo $loaidata; ?>';
				$.post(
					'chayrecord/chao', // URL 
					{'chay':chay},  // Data
					function(bh){ // Success
						$('.chayrecord').html(bh);
					}, 
					'text' // dataTyppe
				);
				$('.chayrecord').fadeIn(200,'swing',function(){
						
					
				});	
				
			});
		},6000);
	});
</script>
<div class="chayrecord">
	<div class="text-white" onclick="window.location.href='tin-tuc/detail/<?php echo $tintuchot[0]->khongdau; ?>'">
		>>Tin hot:&nbsp;
		<?php echo $tintuchot[0]->name; ?>
	</div>
</div>