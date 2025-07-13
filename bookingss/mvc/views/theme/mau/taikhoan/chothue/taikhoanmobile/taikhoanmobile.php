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
        padding: 6px 6px;
        margin-bottom: 5px;
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

    .dangtaisan {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: white;
        z-index: 1050;

        transform: translateX(100%);
        opacity: 0;
        visibility: hidden;

        transition: transform 0.4s ease-in-out, opacity 0.4s ease-in-out, visibility 0.4s ease-in-out;

        overflow-y: auto;
        scrollbar-width: none;
        /* Firefox */
    }

    /* Chrome, Safari, Edge */
    .dangtaisan::-webkit-scrollbar {
        display: none;
    }

    .showdangtaisan {
        transform: translateX(0%);
        opacity: 1;
        visibility: visible;
    }
</style>
<?php
$mang_mba = [
    ['<i class="bi bi-cash-stack fs-5"></i>', 'Tiền Nạp Ví </br> 100k'],
];

$mang_mbb = [
    ['<i class="bi bi-calendar-check"></i>', 'Tất cả Đơn hàng', 'q1', 'offcanvasdonhang', 'Đơn hàng'],
    ['<i class="bi bi-calendar-event"></i>', 'Doanh thu', 'w1', 'offcanvasdoanhthu', 'Báo cáo tổng quan'],
    ['<i class="bi bi-clock-history"></i>', 'Cấu hình', 't1', 'offcanvascauhinh', 'Cấu hình'],
];

$mang_mbc = [
    ['<span class="text-warning fw-bold fs-5">T</span>', 'Tài sản', 'p88', 'offcanvastaisan', 'Tài sản', '<i class="bi bi-plus-circle-fill fs-5 text-white dangtaisanmb "></i>'],
    ['<i class="bi bi-person-gear text-info fs-4"></i>', 'Tài khoản', 'i88', 'offcanvastaikhoan', 'Tài khoản', ''],
    ['<i class="bi bi-gear-fill text-info fs-4"></i>', 'Giao dịch', 'r99', 'offcanvasgiaodich', 'Giao dịch', ''],
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

<!-- Khối 2 -->
<div class="menu-section mt-3">
    <div class="row text-center g-3">
        <?php foreach ($mang_mbc as $key => $valmc) { ?>
            <div class="col-4 menu-item" data-bs-toggle="offcanvas" href="#offcanvas<?php echo $valmc[2]; ?>" role="button" aria-controls="offcanvas<?php echo $valmc[2]; ?>">
                <div class="icon-circle2">
                    <?php echo $valmc[0]; ?>
                </div>
                <div class="menu-text"><?php echo $valmc[1]; ?></div>
            </div>
        <?php } ?>
    </div>
</div>


<!-- Phần giới thiệu dịch vụ -->
<div class="menu-section mt-3">
    <h4 class="text-center fw-bold">Dịch vụ mà bạn có thể tin cậy</h4>
    <div class="d-flex justify-content-evenly mt-3 text-center">
        <p class="mb-2 mb-md-0">Hỗ trợ toàn cầu trong 30s</p>
        <p class="mb-0">Vô tư du lịch</p>
    </div>
</div>

<!-- Khoảng trống tránh che nội dung -->
<div style="height: 120px;"></div>

<!-- Thanh menu dưới -->
<div class="bg-light p-2 border-top shadow-sm fixed-bottom">
    <?php require("mvc/views/theme/mau/boloc/boloc.php") ?>
</div>



<?php foreach ($mang_mbb as $key => $valmb) { ?>
    <div class="offcanvas offcanvas-start w-100 " tabindex="-1" id="offcanvas<?php echo $valmb[2]; ?>" aria-labelledby="offcanvas<?php echo $valmb[2]; ?>Label">
        <div class="offcanvas-header bg-primary mb-3">
            <h5 class="offcanvas-title fw-bold text-white" id="offcanvas<?php echo $valmb[2]; ?>Label"><?php echo $valmb[4]; ?></h5>
            <div class="text-reset pe-3" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-arrow-left text-white " style="font-size: 25px;"></i></div>
        </div>

        <?php require "mvc/views/theme/mau/taikhoan/chothue/taikhoanmobile/offcanvas/$valmb[3].php" ?>

    </div>
<?php } ?>

<?php foreach ($mang_mbc as $key => $valmc) { ?>
    <div class="offcanvas offcanvas-start w-100" tabindex="-1" id="offcanvas<?php echo $valmc[2]; ?>" aria-labelledby="offcanvas<?php echo $valmc[2]; ?>Label">
        <div class="offcanvas-header bg-primary mb-3">
            <h5 class="offcanvas-title fw-bold text-white" id="offcanvas<?php echo $valmc[2]; ?>Label"><?php echo $valmc[4]; ?></h5>
            <div class=""><?php echo $valmc[5]; ?></div>
            <div class="text-reset pe-3" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-arrow-left text-white " style="font-size: 25px;"></i></div>
        </div>

        <?php require "mvc/views/theme/mau/taikhoan/chothue/taikhoanmobile/offcanvas/$valmc[3].php" ?>
        <div class=" dangtaisan show_don_hang bg-white scroll-dangtaisan">
            <?php require "mvc/views/theme/mau/taikhoan/chothue/taikhoanmobile/dangtaisan.php" ?>
        </div>
    </div>

<?php } ?>
<!-- end mobile -->

<script>
    $(document).ready(function() {
        $('.dangtaisanmb').click(function() {
            $('.dangtaisan').addClass('showdangtaisan');
        });

        $('.dongdts').click(function() {
            $('.dangtaisan').removeClass('showdangtaisan');
        });
    });
</script>