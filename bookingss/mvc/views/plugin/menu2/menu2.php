<?php
  $menu2=json_decode($data['menu2']);
?>
<select class="form-select tinhthanh" aria-label="Default select example">
  <option value="0" <?php if(@$_SESSION['menu2']==0){ echo 'selected';} ?>>Tất cả</option>
  <?php 
    foreach ($menu2 as $key => $value) {
  ?>
    <option onclick="window.location.href='san-pham/<?php echo $value->khongdau; ?>'" value="<?php echo $value->id; ?>" <?php if(@$_SESSION['menu2']==$value->id){ echo 'selected';} ?>>
      <?php echo $value->name; ?>
        
    </option>
  <?php
    }
   ?>
</select>

<script>
  $(document).ready(function(){
    $('.menu2').change(function(){
        var idmn2=$(this).val();
        $.post(
          'ajax/menu2', // URL 
          {'idmn2' : idmn2},  // Data
          function(kqt){ // Success
            // $('.ketquatrung').html(kqt);
            location.reload();
          }, 
          'text' // dataTyppe
        );
    });
  });
</script>