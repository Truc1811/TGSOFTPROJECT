<script type="text/javascript">
	$(document).ready(function(){
	    $('.kiemtra_email').change(function(){
				var email=$(this).val();
				$.post(
						'hoivien/kiemtraemail', // URL 
						{'email' : email},  // Data
						function(kqt){ // Success
							$('.kq_email').html(kqt);
						}, 
						'text' // dataTyppe
		   		);
			});


	});
</script>







