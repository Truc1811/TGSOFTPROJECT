<?php
if ($setemail > 0) {
	$_SESSION['loiem']='true';
	?>
	Email bị trùng
	<script type="text/javascript">
		$(document).ready(function() {
			$('.nut_dang_ky').prop('disable',true);
		});
	</script>
<?php
} else { 
	echo 'Email hợp lệ';
	if(@$_SESSION['loidt']){
		if($_SESSION['loidt']=='fasle'){?>
			<script type="text/javascript">
				$(document).ready(function() {
						$('.nut_dang_ky').prop('disabled', false);
				});
			</script>
		<?php	
		}
	}

}
?>