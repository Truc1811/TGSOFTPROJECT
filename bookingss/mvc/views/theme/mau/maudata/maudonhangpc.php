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
    }

    .showchitietdonhangpc {
        opacity: 1;
        visibility: visible;
        transform: translate(-50%, -50%) scale(1);
    }
</style>

<?php
$mang_listdonhang2 = json_decode($data['order']);
$trang_thai_loc = isset($trang_thai_loc) ? $trang_thai_loc : -1;
?>

<!-- Ô tìm kiếm -->
<div class="input-group p-3">
    <input type="text" class="form-control" placeholder="Nhập tên, số điện thoại, mã">
    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-upc-scan"></i></button>
</div>

<!-- Danh sách đơn -->
<div class="container-fluid">
    <div class="row">
        <?php foreach ($mang_listdonhang2 as $valldh2):
            if ($trang_thai_loc !== -1 && $valldh2->order_status != $trang_thai_loc) continue;

            switch ($valldh2->order_status) {
                case 1: $statusText = 'Đơn hàng mới'; $statusClass = 'bg-warning text-dark'; break;
                case 2: $statusText = 'Xác nhận'; $statusClass = 'bg-primary text-white'; break;
                case 3: $statusText = 'Chờ chuyển cọc'; $statusClass = 'bg-info text-white'; break;
                case 4: $statusText = 'Xác nhận chuyển cọc'; $statusClass = 'bg-success text-white'; break;
                case 5: $statusText = 'Đã đặt'; $statusClass = 'bg-secondary text-white'; break;
                default: $statusText = 'Đã hủy'; $statusClass = 'bg-danger text-white'; break;
            }
        ?>
        <div class="col-md-3 mb-3">
            <div class="order-card bg-light rounded-2 mb-3 donhangpc h-100 shadow-sm">
                <div class="d-flex justify-content-between align-items-center p-2 m-2">
                    <h5 class="fw-bold text-primary"><?php echo $valldh2->order_id ?></h5>
                    <span id="badge_<?php echo $valldh2->order_id ?>"
                        class="order-badge status-badge <?php echo $statusClass ?>">
                        <?php echo $statusText ?>
                    </span>
                </div>

                <div class="m-2 cursor">
                    <h5 class="text-danger mt-2"><?php echo number_format($valldh2->oddt_price, 0, ',', ',') ?></h5>
                    <p class="mb-1 fw-bold"><i class="bi bi-person"></i> <?php echo $valldh2->cus_name ?> -
                        <?php echo $valldh2->cus_phone ?></p>
                    <p class="mb-1 text-black-50">Địa chỉ: <?php echo $valldh2->cus_address ?></p>
                    <p class="mb-1 text-black-50">Khách sạn: <?php echo $valldh2->sv_name ?></p>
                </div>
            </div>

            <!-- Popup chi tiết -->
            <div class="container-fluid chitietdonhangpc show_don_hang bg-light">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="d-flex justify-content-between bg-primary text-white p-3">
                                <h5 class="mb-0">Đơn đặt phòng</h5>
                                <div class="dong" title="Quay lại" style="cursor: pointer;"><i
                                        class="bi bi-arrow-left fs-5"></i></div>
                            </div>
                            <div class="card-body text-black-50">
                                <h6 class="mb-3">🏨 Thông tin đặt phòng khách sạn</h6>
                                <ul class="list-group list-group-flush mb-4">
                                    <li class="list-group-item">Khách sạn: <?php echo $valldh2->sv_name ?></li>
                                    <li class="list-group-item">Loại phòng: <?php echo $valldh2->svdt_name ?></li>
                                    <li class="list-group-item text-danger">Giá phòng:
                                        <?php echo number_format($valldh2->oddt_price, 0, ',', ',') ?></li>
                                </ul>
                                <h6 class="mb-3">👤 Thông tin khách hàng</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Họ và tên: <?php echo $valldh2->cus_name ?></li>
                                    <li class="list-group-item">Số điện thoại: <?php echo $valldh2->cus_phone ?></li>
                                    <li class="list-group-item">Email: <?php echo $valldh2->cus_email ?></li>
                                    <li class="list-group-item">Ghi chú: Yêu cầu phòng tầng cao, không hút thuốc</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-3 d-flex justify-content-between">
                            <select class="form-select status-select mt-2" data-id="<?= $valldh2->order_id ?>">
                                <option value="1" <?= $valldh2->order_status == 1 ? 'selected' : '' ?>>Đơn hàng mới
                                </option>
                                <option value="2" <?= $valldh2->order_status == 2 ? 'selected' : '' ?>>Xác nhận</option>
                                <option value="3" <?= $valldh2->order_status == 3 ? 'selected' : '' ?>>Chờ chuyển cọc
                                </option>
                                <option value="4" <?= $valldh2->order_status == 4 ? 'selected' : '' ?>>Xác nhận chuyển
                                    cọc</option>
                                <option value="5" <?= $valldh2->order_status == 5 ? 'selected' : '' ?>>Đã đặt</option>
                                <option value="0" disabled <?= $valldh2->order_status == 0 ? 'selected' : '' ?>>Đã hủy
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="overlay"></div>

<!-- JS mở popup -->
<script>
    $(document).ready(function () {
        $('.donhangpc').click(function () {
            $(this).next().addClass('showchitietdonhangpc');
            $('.overlay').show();
        });

        $('.dong').click(function () {
            $('.chitietdonhangpc').removeClass('showchitietdonhangpc');
            $('.overlay').hide();
        });
    });
</script>

<!-- JS cập nhật trạng thái -->
<script>
    $(document).ready(function () {
        $('.status-select').off('change').on('change', function () {
            const orderId = $(this).data('id');
            const newStatus = $(this).val();

            $.ajax({
                url: 'customer/capnhatstatusorder',
                type: 'POST',
                data: {
                    id: orderId,
                    status: newStatus
                },
                success: function () {
                    const badgeMap = {
                        "1": {
                            text: "Đơn hàng mới",
                            class: "bg-warning text-dark"
                        },
                        "2": {
                            text: "Xác nhận",
                            class: "bg-primary text-white"
                        },
                        "3": {
                            text: "Chờ chuyển cọc",
                            class: "bg-info text-white"
                        },
                        "4": {
                            text: "Xác nhận chuyển cọc",
                            class: "bg-success text-white"
                        },
                        "5": {
                            text: "Đã đặt",
                            class: "bg-secondary text-white"
                        },
                        "0": {
                            text: "Đã hủy",
                            class: "bg-danger text-white"
                        }
                    };

                    const badge = badgeMap[newStatus] || badgeMap["0"];
                    const $badge = $(`#badge_${orderId}`);
                    $badge.attr('class', `order-badge status-badge ${badge.class}`).text(
                        badge.text);

                    alert("✔ Trạng thái đã được cập nhật thành công!");
                },
                error: function (xhr) {
                    console.log("❌ Lỗi cập nhật:", xhr.responseText);
                }
            });
        });
    });
</script>
