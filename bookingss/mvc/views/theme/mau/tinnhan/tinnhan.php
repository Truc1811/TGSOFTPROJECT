<style>
    .bg-tn {
        background-color: #f1f3fc;
        min-height: 90vh;

    }

    .icon-tab {
        text-align: center;
        font-size: 14px;
        color: #333;
    }

    .icon-tab i {
        font-size: 22px;
        display: block;
        margin-bottom: 5px;
    }

    .tab-item {
        padding: 5px 0 0 0;
    }

    .small-dot {
        height: 8px;
        width: 8px;
        background-color: orange;
        border-radius: 50%;
        display: inline-block;
    }



    .bo-tron {
        width: 60px;
        height: 60px;
        background-color: #e0f7fa;
    }

</style>
<?php
$mang_ttin = [
    ['tinnhan/hethong', '<i class="bi bi-chat-dots-fill text-info fs-4"></i>', 'Tin nhắn hệ thống', 'tinhethong', 'offtinhethong'],
    ['tinnhan/mess', '<i class="bi bi-chat-dots-fill text-info fs-4"></i>', 'Tin nhắn', 'tinnhan', 'offtinnhan'],
]

?>

<div class="container-fluid py-3 bg-tn d-block d-md-none">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0"><strong>Tin Nhắn</strong> <span class="small-dot"></span></h5>
        <div>
            <a class="btn btn-link text-dark p-1"><i class="bi bi-gear-fill fs-5"></i></a>
            <a class="btn btn-link text-dark p-1"><i class="bi bi-headset fs-5"></i></a>
        </div>
    </div>

    <!-- Tabs scrollable -->
    <div class="bg-white rounded p-2  mb-3 ">
        <div class="row">
            <div class="col-12 d-flex">
                <?php foreach ($mang_ttin as $key => $valtn2) { ?>
                    <div class="col-4">
                        <div class="tab-item icon-tab ">
                            <div class="text-center" data-bs-toggle="offcanvas" href="#offcanvas<?php echo $valtn2[3] ?>" aria-controls="offcanvas<?php echo $valtn2[3] ?>">
                                <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-1 bo-tron">
                                    <?php echo $valtn2[1]; ?>
                                </div>
                                <p class="text-nowrap fw-bold"> <?php echo $valtn2[2]; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Notification -->
    <h6 class="text-secondary">Thông báo </h6>
    <div class="notify-container">
        <div class="notify-wrapper shadow-sm bg-white rounded-2 p-2">
            <div class="notify-content">
                <div class="fw-bold  ">
                    Không có thông báo mới
                </div>
            </div>
        </div>
    </div>
</div>

<div class="p-0">
    <!-- Thanh menu dưới -->
    <?php require("mvc/views/theme/mau/boloc/boloc.php") ?>
</div>

<?php foreach ($mang_ttin as $key => $valtn2) { ?>
    <div class="offcanvas offcanvas-start w-100" tabindex="-1" id="offcanvas<?php echo $valtn2[3]; ?>" aria-labelledby="offcanvas<?php echo $valtn2[3]; ?>Label">
        <div class="offcanvas-header bg-primary">
            <h5 class="offcanvas-title text-white fs-5" id="offcanvas<?php echo $valtn2[3]; ?>Label"><?php echo $valtn2[2]; ?></h5>
            <div class="text-reset pe-3" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-arrow-left text-white" style="font-size: 25px;"></i></div>
        </div>
        <?php require "mvc/views/theme/mau/tinnhan/offcanvas/$valtn2[4].php" ?>
    </div>
<?php } ?>