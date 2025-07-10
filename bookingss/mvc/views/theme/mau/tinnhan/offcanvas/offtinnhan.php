<style>
    .customer-card {
        background-color: #fff;
        border-radius: 10px;
        margin-bottom: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        transition: all 0.2s ease-in-out;
    }

    .customer-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
    }


    .badge-new {
        background-color: #dc3545;
        color: white;
        font-size: 0.75rem;
        padding: 2px 6px;
        border-radius: 8px;
        margin-left: 5px;
    }

    .chat-box {
        background-color: white;
    }

    .message {
        display: flex;
        align-items: flex-start;
        margin-bottom: 10px;
    }

    .message.user {
        flex-direction: row-reverse;
    }

    .avatar {
        font-size: 20px;
        margin: 0 8px;
    }

    .text {
        padding: 8px 12px;
        border-radius: 12px;
        border: 1px solid #ddd;
        max-width: 75%;
    }

    .user .text {
        text-align: right;
    }

    .chitiettinnhan {
        position: fixed;
        width: 100%;
        z-index: 1055;
        transition-duration: 0.4s;
        top: 0;
        left: 100%;
        height: 100%;
        visibility: hidden;

    }

    .showchitiettinnhan {
        position: fixed;
        width: 100%;
        z-index: 1099;
        transition-duration: 0.4s;
        top: 0;
        left: 0%;
        height: 100%;
        visibility: visible;
    }

    .hide-scrollbar {
        overflow: auto;
        scrollbar-width: none;
        /* Firefox */
        -ms-overflow-style: none;
        /* IE 10+ */
    }

    .hide-scrollbar::-webkit-scrollbar {
        display: none;
        /* Chrome, Safari */
    }
</style>
<?php
$mang_tinnhan2 = [
    ['Nguyễn Văn Nam', 'Xác nhận đặt phòng tại Khách sạn Gánh ngày 12/07', 'a112', 'Khách yêu cầu xác nhận lại thông tin phòng đơn đã đặt.', '25p trước'],
    ['Nguyễn Ngô Mỹ Nữ', 'Thay đổi thời gian nhận phòng sang 15h', 'b114', 'Khách muốn lùi thời gian check-in do đến trễ chuyến bay.', ''],
    ['Nguyễn Công Phi', 'Thêm người vào đặt phòng ngày 20/07', 'c118', 'Khách bổ sung 1 người lớn, cần nâng cấp lên phòng đôi.', '25p trước'],
    ['Lê Thị Thu Trang', 'Yêu cầu hủy đặt phòng tại TTC Hotel ngày 25/7', 'd121', 'Khách cần hỗ trợ hủy đặt phòng vì lý do cá nhân. Đề nghị liên hệ sớm.', '25p trước'],
    ['Phạm Quốc Hưng', 'Cần hóa đơn VAT cho đơn đặt phòng ngày 10/07', 'e145', 'Khách yêu cầu xuất hóa đơn công ty cho khoản thanh toán.', ''],
    ['Trần Mỹ Duyên', 'Yêu cầu phòng không hút thuốc', 'f168', 'Khách nhấn mạnh phòng cần không có mùi thuốc và có cửa sổ.', '30p trước'],
    ['Vũ Ngọc Khánh', 'Đổi loại phòng từ tiêu chuẩn sang cao cấp', 'g194', 'Khách muốn nâng hạng phòng đã đặt, chấp nhận chi phí phát sinh.', ''],
    ['Đặng Hoàng Long', 'Hỏi về dịch vụ ăn sáng kèm theo phòng', 'h110', 'Khách muốn xác nhận lại có bao gồm buffet sáng không.', '25p trước'],
    ['Hoàng Minh Thư', 'Xác nhận đặt 2 phòng đơn cạnh nhau', 'i143', 'Khách đặt 2 phòng cho gia đình, yêu cầu gần nhau cùng tầng.', ''],
    ['Nguyễn Thành Tâm', 'Thanh toán thất bại, cần hỗ trợ lại', 'j177', 'Khách báo lỗi khi chuyển khoản, muốn được hướng dẫn lại.', ''],
    ['Lâm Thanh Mai', 'Đổi lịch đặt phòng sang tuần sau', 'k102', 'Khách cần chuyển thời gian lưu trú do công việc đột xuất.', '25p trước'],
    ['Phan Văn Toàn', 'Cần phòng có bếp mini', 'l188', 'Khách muốn tự nấu ăn, hỏi khách sạn có phòng bếp không.', ''],
    ['Ngô Quỳnh Như', 'Góp ý về trải nghiệm đặt phòng online', 'm133', 'Khách hài lòng nhưng muốn giao diện dễ nhìn hơn trên điện thoại.', '']
];

?>
<div class="offcanvas-body bg-white hide-scrollbar">

    <div class="">
        <h4 class="mt-2 mb-3">Tất cả tin nhắn</h4>
        <?php
        foreach ($mang_tinnhan2 as $key => $valtinnhan2) {
        ?>
            <!-- Khách hàng -->
            <div class="customer-card d-flex align-items-start mb-3 tinnhan ">
                <!-- Cột trái: icon + nội dung -->
                <div class="d-flex p-2 flex-grow-1">
                    <!-- Icon người dùng -->
                    <div class="me-3">
                        <i class="bi bi-person-circle fs-2 text-primary"></i>
                    </div>

                    <!-- Nội dung thông báo -->
                    <div class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#<?php echo $valtinnhan2[2]; ?>Modal">
                        <h6 class="mb-1 fw-bold"><?php echo $valtinnhan2[0]; ?></h6>
                        <p class="mb-1 text-black-50"><?php echo $valtinnhan2[1]; ?></p>
                    </div>
                </div>

                <!-- Cột phải: thời gian (badge) -->
                <?php if (!empty($valtinnhan2[4])): ?>
                    <div class="p-2">
                        <span class="badge bg-danger text-white" style="font-size: 0.75rem;">
                            <?php echo $valtinnhan2[4]; ?>
                        </span>
                    </div>
                <?php endif; ?>
            </div>

            <div class="chitiettinnhan show_don_hang bg-white ">
                <div class="d-flex justify-content-between bg-primary text-white p-3">
                    <!-- Tiêu đề -->
                    <h5 class="mb-0">
                        <?php echo $valtinnhan2[0]; ?>
                    </h5>
                    <!-- Nút quay lại -->
                    <div class="dong pe-3" title="Quay lại">
                        <i class="bi bi-arrow-left" style="font-size: 25px;"></i>
                    </div>

                </div>
                <div class="chat-box mt-2 text-black-50">
                    <div class="message user">
                        <div class="avatar">👤</div>
                        <div class="text">Chào bạn, mình muốn đặt phòng khách sạn vào cuối tuần này.</div>
                    </div>
                    <div class="message agent">
                        <div class="avatar">🧑‍💼</div>
                        <div class="text">Chào bạn! Bạn muốn đặt phòng cho bao nhiêu người và ngày nhận/trả phòng là khi nào ạ?</div>
                    </div>
                    <div class="message user">
                        <div class="avatar">👤</div>
                        <div class="text">Mình cần 1 phòng đôi cho 2 người, nhận phòng thứ 6 và trả vào Chủ Nhật.</div>
                    </div>
                    <div class="message agent">
                        <div class="avatar">🧑‍💼</div>
                        <div class="text">Dạ bên mình còn phòng đôi Deluxe phù hợp. Giá là 1.200.000đ/đêm, đã bao gồm ăn sáng.</div>
                    </div>
                    <div class="message user">
                        <div class="avatar">👤</div>
                        <div class="text">Tuyệt! Có thể đặt trước và thanh toán khi đến nơi không?</div>
                    </div>
                    <div class="message agent">
                        <div class="avatar">🧑‍💼</div>
                        <div class="text">Dạ được ạ. Bạn vui lòng cung cấp họ tên và số điện thoại để bên mình giữ phòng nhé.</div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center p-2">
                    <input
                        type="search"
                        class="form-control form-control-sm border-primary shadow-sm rounded me-2">
                    <button type=" button" class="btn btn-primary btn-sm">Gửi</button>
                </div>


            </div>
        <?php } ?>

    </div>
</div>
<script>
    $(document).ready(function() {
        $('.tinnhan').click(function() {
            $(this).next().addClass('showchitiettinnhan');
        });

        $('.dong').click(function() {
            $('.chitiettinnhan').removeClass('showchitiettinnhan');
        });
    });
</script>