<style>
    .status-badge {
        font-size: 0.8rem;
        padding: 4px 8px;
        border-radius: 12px;
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: black;
        opacity: 0.4;
        z-index: 999;
        display: none;
    }

    .chitietdonhangpc {
        position: fixed;
        width: 100%;
        max-width: 600px;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) scale(0.95);
        opacity: 0;
        visibility: hidden;
        background-color: transparent;
        box-shadow: none;
        z-index: 1050;
        transition: all 0.4s ease;
        max-height: 90vh;
        overflow-y: auto;
        overflow-x: hidden;
        padding: 0;
        margin-top: 0;
    }

    .showchitietdonhangpc {
        opacity: 1;
        visibility: visible;
        transform: translate(-50%, -50%) scale(1);
    }
</style>

<?php
// Nhận id_tab từ file cha
$id_tab = isset($id_tab) ? $id_tab : 'tatca';

// Dữ liệu đơn hàng mẫu
$mang_listdonhang2 = [
    ['SON35519', '<div class="status-badge bg-primary text-white">Đã xác nhận</div>', '3,800,000', 'Trần Thị Bích Ngọc - 0909345678', 'Địa chỉ: 45 Nguyễn Huệ, Quận 1, TP.HCM', 'Đà Nẵng 3N2Đ (12/07 - 14/07)', 'Golden Bay Hotel - Đà Nẵng, 1 phòng đôi', '2 người lớn', 'Yêu cầu xe đưa đón sân bay', 'n001'],
    ['SON35520', '<div class="status-badge bg-info text-white">Chờ xác nhận</div>', '6,500,000', 'Lê Văn Cường - 0911222333', 'Địa chỉ: 88 Trần Phú, Nha Trang', 'Hội An 4N3Đ (20/07 - 23/07)', 'Almanity Wellness Resort - Hội An, 2 phòng gia đình', '4 người lớn, 2 trẻ em', 'Yêu cầu ăn chay và tầng thấp', 'n002'],
    ['SON35521', '<div class="status-badge bg-success text-white">Đã thanh toán</div>', '4,950,000', 'Nguyễn Thị Minh Hằng - 0988776655', 'Địa chỉ: 12 Lý Thường Kiệt, Hà Nội', 'Vũng Tàu 3N2Đ (05/08 - 07/08)', 'Pullman Vũng Tàu Hotel, 1 phòng suite hướng biển', '2 người lớn', 'Yêu cầu giường king size và ăn sáng', 'n003'],
    ['SON35522', '<div class="status-badge bg-danger text-white">Đã hủy</div>', '0', 'Phạm Quốc Huy - 0977112233', 'Địa chỉ: 67 Pasteur, Quận 3, TP.HCM', 'Huế 2N1Đ (10/07 - 11/07)', 'Indochine Palace Huế, 1 phòng đơn', '1 người lớn', 'Không có yêu cầu đặc biệt', 'n004'],
    ['SON35523', '<div class="status-badge bg-success text-white">Đã thanh toán</div>', '7,200,000', 'Đặng Thùy Trang - 0966234567', 'Địa chỉ: 33 Trần Hưng Đạo, Nam Định', 'Sapa 4N3Đ (02/08 - 05/08)', 'Hotel de la Coupole MGallery Sapa, 2 phòng deluxe', '3 người lớn, 2 trẻ em', 'Yêu cầu phòng gần nhau, có ban công', 'n005'],
    ['SON35524', '<div class="status-badge bg-primary text-white">Đã xác nhận</div>', '5,600,000', 'Vũ Đức Thiện - 0944123456', 'Địa chỉ: 21 Hai Bà Trưng, Đà Nẵng', 'Phú Quốc 3N2Đ (15/07 - 17/07)', 'Vinpearl Resort & Spa Phú Quốc, 1 villa 3 phòng ngủ', '5 người lớn', 'Yêu cầu xe đưa đón sân bay và bữa tối BBQ', 'n006']
];

// Lọc đơn hàng theo tab
$ds_donhang_loc = [];

switch ($id_tab) {
    case 'choxacnhan':
        foreach ($mang_listdonhang2 as $don) {
            if (stripos($don[1], 'Chờ xác nhận') !== false) $ds_donhang_loc[] = $don;
        }
        break;
    case 'daxacnhan':
        foreach ($mang_listdonhang2 as $don) {
            if (stripos($don[1], 'Đã xác nhận') !== false) $ds_donhang_loc[] = $don;
        }
        break;
    case 'dahoanthanh':
        foreach ($mang_listdonhang2 as $don) {
            if (stripos($don[1], 'Đã thanh toán') !== false) $ds_donhang_loc[] = $don;
        }
        break;
    case 'donhuy':
        foreach ($mang_listdonhang2 as $don) {
            if (stripos($don[1], 'Đã hủy') !== false) $ds_donhang_loc[] = $don;
        }
        break;
    default: // tatca
        $ds_donhang_loc = $mang_listdonhang2;
        break;
}
?>

<!-- Giao diện danh sách đơn -->
<div class="input-group p-3">
    <input type="text" class="form-control" placeholder="Nhập tên, số điện thoại, mã">
    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-upc-scan"></i></button>
</div>

<div class="row">
    <?php foreach ($ds_donhang_loc as $valldh2): ?>
        <div class="col-md-3 mb-3">
            <div class="order-card bg-light rounded-2 mb-3 donhangpc p-3 h-100 shadow-sm">
                <div class="d-flex justify-content-between align-items-center m-2">
                    <h5 class="fw-bold text-primary"><?php echo $valldh2[0] ?></h5>
                    <?php echo $valldh2[1] ?>
                </div>
                <div class="m-2 cursor">
                    <h5 class="text-danger mt-2"><?php echo $valldh2[2] ?></h5>
                    <p class="mb-1 fw-bold"><i class="bi bi-person"></i> <?php echo $valldh2[3] ?></p>
                    <p class="mb-1 text-black-50"><?php echo $valldh2[4] ?></p>
                    <p class="mb-1 text-black-50">Tour: <?php echo $valldh2[5] ?></p>
                    <p class="mb-1 text-black-50">Khách sạn: <?php echo $valldh2[6] ?></p>
                    <p class="mb-1 text-black-50">Số người: <?php echo $valldh2[7] ?></p>
                    <p class="mb-1 text-black-50">Ghi chú: <?php echo $valldh2[8] ?></p>
                </div>
            </div>

            <!-- Chi tiết đơn -->
            <div class="container-fluid chitietdonhangpc show_don_hang bg-light">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="d-flex justify-content-between bg-primary text-white p-3">
                                <h5 class="mb-0">Đơn đặt phòng</h5>
                                <div class="dong" title="Quay lại" style="cursor: pointer;">
                                    <i class="bi bi-arrow-left fs-5"></i>
                                </div>
                            </div>
                            <div class="card-body text-black-50">
                                <h6 class="mb-3">🏨 Thông tin đặt phòng khách sạn</h6>
                                <ul class="list-group list-group-flush mb-4">
                                    <li class="list-group-item">Khách sạn: The Myst Đồng Khởi, Quận 1, TP.HCM</li>
                                    <li class="list-group-item">Loại phòng: Deluxe City View, 1 giường đôi</li>
                                    <li class="list-group-item">Số đêm lưu trú: 2 đêm (22/07 - 24/07/2025)</li>
                                    <li class="list-group-item">Số lượng khách: 2 người lớn</li>
                                    <li class="list-group-item">Dịch vụ kèm theo: Ăn sáng miễn phí, hồ bơi, gym</li>
                                    <li class="list-group-item text-danger">Giá phòng: 3.200.000đ/đêm</li>
                                </ul>
                                <h6 class="mb-3">👤 Thông tin khách hàng</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Họ và tên: <?php echo $valldh2[3] ?></li>
                                    <li class="list-group-item">Số điện thoại: 0903 456 789</li>
                                    <li class="list-group-item">Email: nguyenvana@gmail.com</li>
                                    <li class="list-group-item">Ghi chú: Yêu cầu phòng tầng cao, không hút thuốc</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="d-flex justify-content-around align-items-center flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status1">
                                    <label class="form-check-label" for="status1">Đã đặt</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status2">
                                    <label class="form-check-label" for="status2">Đã xác nhận</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status3">
                                    <label class="form-check-label" for="status3">Đã hoàn thành</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status4">
                                    <label class="form-check-label" for="status4">Đã hủy</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="overlay"></div>

<script>
    $(document).ready(function() {
        $('.donhangpc').click(function() {
            $(this).next().addClass('showchitietdonhangpc');
            $('.overlay').show();
        });

        $('.dong').click(function() {
            $('.chitietdonhangpc').removeClass('showchitietdonhangpc');
            $('.overlay').hide();
        });
    });
</script>