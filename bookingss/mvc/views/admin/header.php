<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$thoi_gian=getdate();
$ngay=$thoi_gian['mday'];
$thang=$thoi_gian['mon'];
$nam=$thoi_gian['year'];
?>
<div class="row d-none d-md-flex justify-content-between align-items-center p-6 text-white" style="height:8vh; background: rgb(12, 107, 77);">
    <div class="col-auto p-2">
        <img style="height:50px" src="public/upload/<?php echo $cauhinh[0]->logo; ?>"/>
    </div>
    <!-- <div class="col-auto p-2" style="cursor: pointer;" onclick="window.location.href='kiotviet/capnhat/810767/mgstore2605'">
        <i class="fas fa-users-cog text-danger"></i>
        &nbsp; Update Kiot
    </div> -->
    <div class="col-auto p-2">
        <i class="fas fa-calendar-alt text-danger"></i>
        &nbsp; <?php echo date('M d, Y',time())  ?>
    </div>
    <div class="col-auto p-2">
    </div>
    <div class="col-auto p-2">
        <i class="bi bi-person-circle"></i>
         &nbsp; <?php echo @$tai_khoan?:'Admin'; ?>
        <a class="btn btn-danger ms-3" href="admin/logout">
            <i class="bi bi-box-arrow-right"></i>
        </a>
    </div>

</div>

<!-- di dong -->
<div class="row d-flex d-md-none align-items-center justify-content-between" style="background: rgb(12, 107, 77);">
    <div class="col-auto p-2">
        <img style="height:50px" src="public/upload/<?php echo $cauhinh[0]->logo; ?>"/>
    </div>
    <div class="col-auto p-2">
        <button class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" >
            <i class="bi bi-list"></i>

        </button>
    </div>
</div>


