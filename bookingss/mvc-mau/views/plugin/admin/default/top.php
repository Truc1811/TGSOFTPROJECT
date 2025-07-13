<div class="fs-5 fw-bold px-2">
    <?php echo $title_name; ?>
</div>
<div class="d-flex px-2">
    <input class="btn btn-danger me-3" type="submit" value="Xóa" name="bn" />
    <input class="btn btn-primary" type="button" value="Thêm" 
    onclick="window.location.href='admin/add/<?php echo $db; ?>'" 
    />
</div>