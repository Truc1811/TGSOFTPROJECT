<style>
    /*mobile*/

    .badge-custom {
        font-size: 0.65rem;
        padding: 2px 6px;
        position: absolute;
        top: 0;
        right: 0;
        transform: translate(50%, -50%);
    }

    /* .tab-scroll {
        overflow-x: auto;
        white-space: nowrap;
    } */

    .tab-scroll::-webkit-scrollbar {
        display: none;
        /* Ẩn thanh cuộn trên iOS/Android */
    }

    .card-equal {
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        padding: 12px;
        background-color: #ffffff;
    }

    .card-blue {
        background-color: #f1f7fe;
        border-color: #d0e3fb;
    }

    .truncate {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .icon-box {
        width: 36px;
        height: 36px;
        background-color: #d0e3fb;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
    }

    .ticket-icon {
        color: #e83e8c;
        font-size: 20px;
    }

    .card-box {
        border-radius: 12px;
        border: 1px solid #e0e0e0;
        background-color: #fff;
        padding: 16px;
    }

    .divider {
        border-left: 1px solid #e0e0e0;
        height: 100%;
    }

    .icon-circle1 {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: #ffcc00;
        color: white;
        font-weight: bold;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        margin-right: 6px;
    }

    .icon-circle2 {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 8px;

    }

    .icon-circle2 i {
        font-size: 20px;
    }

    .icon-ticket {
        color: #e83e8c;
        font-size: 20px;
        margin-right: 6px;
    }

    .small-text {
        font-size: 13px;
        color: #6c757d;
    }

    .botron {
        margin: auto;
        border-radius: 15px;
    }

    .menu-section {
        background-color: #ffffff;
        border-radius: 12px;
        padding: 16px 12px;
        margin-bottom: 16px;
    }

    .menu-item {
        text-align: center;
        position: relative;
    }

    .icon-circle {
        background-color: #f1f3f5;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 8px;
    }

    .icon-circle i {
        font-size: 20px;
        color: #1a53ff;
    }

    .menu-text {
        font-size: 13px;
        color: #212529;
        line-height: 1.3;
    }

    .badge-small {
        position: absolute;
        top: -5px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #dc3545;
        color: white;
        font-size: 10px;
        padding: 2px 5px;
        border-radius: 8px;
        font-weight: 600;
    }

    .partner-box {
        padding: 16px;
        display: flex;
        align-items: center;
        justify-content: space-between;

    }

    .partner-text {
        max-width: 55%;
    }

    .partner-text p {
        margin-bottom: 10px;
        font-weight: 500;
        font-size: 15px;
        color: #2c2c2c;
    }

    .partner-img img {
        max-width: 100px;
        height: auto;
    }

    .bottom-nav {
        position: fixed;
        bottom: 0px;
        left: 0;
        width: 100%;
        background: #fff;
        border-top: 1px solid #ddd;
        display: flex;
        justify-content: space-around;
        padding: 6px 0;

    }

    .bottom-nav a {
        color: #888;
        font-size: 12px;
        text-align: center;
        text-decoration: none;
    }

    .bottom-nav a.active {
        color: #007bff;
    }
</style>
<?php
$mang_mba = [
    ['<i class="bi bi-cash-stack"></i>', 'Tiền nạp ví </br> 100.000₫'],
];

$mang_mbb = [
    ['<i class="bi bi-calendar-event"></i>', 'Tài Chính', 'w11', 'offcanvastaichinh', 'Báo cáo tài chính'],
    ['<i class="bi bi-gear-fill text-info fs-4"></i>', 'Lịch sử giao dịch', 'r991', 'offcanvaslichsugiaodich', 'Lịch sử giao dịch', ''],
    ['<i class="bi bi-person-gear text-info fs-4"></i>', 'Tài khoản', 'i881', 'offcanvastaikhoan', 'Tài khoản', ''],
];

?>
<!-- Header -->
<div class="d-flex align-items-center mb-3">
    <div class="me-3">
        <div class="bg-warning rounded-circle" style="width: 40px; height: 40px;"></div>
    </div>
    <div class="flex-grow-1">
        <strong>Xin chào Thành viên Trip.com</strong><br>
        <small class="text-muted">Quản lý Tài khoản của tôi <i class="bi bi-chevron-right"></i></small>
    </div>
    <div class="pe-3">
        <a href="customer/logout"><i class="bi bi-box-arrow-left" style="font-size: 25px;color:blue"></i></a>
    </div>
</div>

<div class="row tab-scroll" style="overflow-x: auto;white-space: nowrap;">
    <div class="col-12 d-flex mt-3 ">
        <div class="col-8">
            <div class="card-equal card-blue w-100 d-flex h-100">
                <div class="icon-box">
                    <i class="bi bi-shield-fill text-primary"></i>
                </div>
                <div>
                    <div class="fw-bold text-primary">Bạc</div>
                    <p class="text-muted " style="white-space:normal">Ưu đãi dành riêng cho người dùng mới của bạn
                    </p>
                </div>
            </div>
        </div>
        <?php foreach ($mang_mba as $key => $valma) { ?>
            <div class="col-4 ms-2">
                <div class="card-equal w-100 h-100">
                    <div class="ticket-icon mb-2">
                        <?php echo $valma[0]; ?>
                    </div>
                    <p class="" style="white-space:normal"><?php echo $valma[1]; ?></p>
                </div>
            </div>
        <?php  } ?>
    </div>
</div>

<div class="menu-section mt-3">
    <!-- Left: Trip Coins -->
    <div class="row">
        <div class="col-8">
            <div class="d-flex align-items-center p-2" style="border-right:1px solid #6c757d">
                <div class="me-2">
                    <span class="text-warning fw-bold fs-5 icon-circle">T</span>
                </div>
                <div>
                    <div class="small-text">Số tiền đã sử dụng</div>
                    <div><strong>10 triệu</strong></div>
                </div>
            </div>
        </div>

        <!-- Right: Mã khuyến mãi -->
        <div class="col-4">
            <div class="p-2 mt-2">
                <div class="d-flex justify-content-start align-items-center mb-1">
                    <i class="bi bi-ticket-fill icon-ticket"></i>
                    <span class="">4</span>
                </div>
                <div class="small text-muted">Mã Khuyến Mãi</div>
            </div>
        </div>
    </div>

</div>

<!-- Khối 1 -->
<div class="menu-section mt-3">
    <div class="row text-center">
        <?php foreach ($mang_mbb as $key => $valmb) { ?>
            <div class="col-4 menu-item" data-bs-toggle="offcanvas" href="#offcanvas<?php echo $valmb[2]; ?>" role="button" aria-controls="offcanvas<?php echo $valmb[2]; ?>">
                <div class="icon-circle">
                    <?php echo $valmb[0]; ?>
                </div>
                <div class="menu-text">
                    <?php echo $valmb[1]; ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<div class="mb-5">
    <h4 class="text-center">Dịch vụ mà bạn có thể tin cậy</h4>
    <div class="d-flex justify-content-evenly mt-3">
        <p class="">Hỗ trợ toàn cầu trong 30s</p>
        <p class="">Vô tư du lịch</p>
    </div>
</div>

<div class=" bg-light p-0">

    <!-- Thanh menu dưới -->
    <?php require("mvc/views/theme/mau/boloc/boloc.php") ?>

</div>


<?php foreach ($mang_mbb as $key => $valmb) { ?>
    <div class="offcanvas offcanvas-start w-100 " tabindex="-1" id="offcanvas<?php echo $valmb[2]; ?>" aria-labelledby="offcanvas<?php echo $valmb[2]; ?>Label">
        <div class="offcanvas-header bg-primary mb-3">
            <h5 class="offcanvas-title fw-bold text-white" id="offcanvas<?php echo $valmb[2]; ?>Label"><?php echo $valmb[4]; ?></h5>
            <div class="text-reset pe-3" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-arrow-left text-white" style="font-size: 25px;"></i></div>
        </div>

        <?php require "mvc/views/theme/mau/taikhoan/khachthue/taikhoanmobile/offcanvas/$valmb[3].php" ?>

    </div>
<?php } ?>

<!-- end mobile -->