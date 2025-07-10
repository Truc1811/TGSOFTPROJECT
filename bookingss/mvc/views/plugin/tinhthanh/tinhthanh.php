<?php
  $tinhthanh=json_decode($data['tinhthanh']);
?>
<select class="form-select tinhthanh" aria-label="Default select example">
  <option value="0" <?php if(@$_SESSION['tinhthanh']==0){ echo 'selected';} ?>>Tất cả</option>
  <?php 
    foreach ($tinhthanh as $key => $value) {
  ?>
    <option value="<?php echo $value->id; ?>" <?php if(@$_SESSION['tinhthanh']==$value->id){ echo 'selected';} ?>>
      <?php echo $value->name; ?>
        
    </option>
  <?php
    }
   ?>
</select>

<script>
  $(document).ready(function(){
    $('.tinhthanh').change(function(){
        var idth=$(this).val();
        $.post(
          'ajax/idtinhthanh', // URL 
          {'idth' : idth},  // Data
          function(kqt){ // Success
            // $('.ketquatrung').html(kqt);
            location.reload();
          }, 
          'text' // dataTyppe
        );
    });
  });
</script>