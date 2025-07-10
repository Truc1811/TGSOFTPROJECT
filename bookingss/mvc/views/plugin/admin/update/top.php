<div class="fs-5 fw-bold px-2">
Update <?php echo $title_name; ?>
</div>
<div class="d-flex px-2">
    
    <input class="btn btn-primary me-3" type="submit" value="Lưu" name="bn"  />
    <input class="btn btn-danger" type="button" value="Quay về" 
    onclick="window.location.href='admin/listr/<?php echo str_replace('model','',$model); ?>'"  
    />
    
</div>