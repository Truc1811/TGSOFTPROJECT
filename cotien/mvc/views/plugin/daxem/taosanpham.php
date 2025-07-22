

<script>
$(document).ready(function(){
	
		var id_sp="<?php echo $id_sp; ?>";
        $.post(
          'daxem/taodaxem', // URL 
          {'id_sp':id_sp},  // Data
          function(loadxem){ // Success
             $('.loaddaxem').html(loadxem);
             
          }, 
          'text' // dataTyppe
        );
	
});
</script>