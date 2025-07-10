<?php 
	foreach ($danhgia as $key => $value) {
		if (in_array("$id_sp",explode(',',$value->id_sp))) {
?>
<div class="d-flex align-items-center">
	
	<span>
		<img src="public/demo/user_img.jpg" class="rounded-circle hei_user">
	</span>
	<span>
		<?php echo $value->name; ?>
	</span>
</div>
<div class="ps-5">
	<?php echo $value->content; ?>
</div>
<?php 
	}}
?>