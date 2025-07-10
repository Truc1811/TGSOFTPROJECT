
<div class="d-flex justify-content-center">
    <a class="btn btn-primary me-2 khoa_hoivien<?php echo $value->id; ?> trangthaiaa" data-trangthai="1" data-id="<?php echo $value->id; ?>" style="<?php if($value->hide==2){ echo 'display: none'; } ?>" title="Khóa tài khoản">
          <i class="bi bi-lock-fill"></i> Hoạt động
    </a>
    <a class="btn btn-secondary mo_hoivien<?php echo $value->id; ?> trangthaiaa" data-trangthai="2" data-id="<?php echo $value->id; ?>" style="<?php if($value->hide==1){ echo 'display: none'; } ?>" title="Mở khóa tài khoản">
          <i class="bi bi-unlock-fill"></i> Bị khóa
    </a>
       
    
</div>