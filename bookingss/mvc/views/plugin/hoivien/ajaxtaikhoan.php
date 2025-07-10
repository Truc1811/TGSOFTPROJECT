<!-- reqiure trong header để sử dụng-->









<?php 
if(@$_COOKIE['hoivien']){
		$mang_u=explode(',',$_COOKIE['hoivien']);
?>

	<script type="text/javascript">
		
	$(document).ready(function(){
		var idhv="<?php echo $mang_u['0']; ?>";
		setInterval(function(){
				$.post(
		    		'hoivien/loadtaikhoan',//URL
		    		{'idhv':idhv},//DATA
		    		function(kqtload){//SUSCESS
		    				if(kqtload.search('true') != -1){
		    						location.reload();
		    				}
		    		},
		    		'text'//DATA
		    );
		}, 9000);
	});
	</script>

<?php
}
?><?php 
if(@$_COOKIE['hoivien']){
		$mang_u=explode(',',$_COOKIE['hoivien']);
?>

	<script type="text/javascript">
		
	$(document).ready(function(){
		var idhv="<?php echo $mang_u['0']; ?>";
		setInterval(function(){
				$.post(
		    		'hoivien/loadtaikhoan',//URL
		    		{'idhv':idhv},//DATA
		    		function(kqtload){//SUSCESS
		    				if(kqtload.search('true') != -1){
		    						location.reload();
		    				}
		    		},
		    		'text'//DATA
		    );
		}, 9000);
	});
	</script>

<?php
}
?>