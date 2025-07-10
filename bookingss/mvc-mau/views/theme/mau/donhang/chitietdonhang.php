<style>
    .bg-tn {
        background-color: #f1f3fc;
        min-height: 100vh;

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

    .notification-card {
        background-color: #fff;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .small-dot {
        height: 8px;
        width: 8px;
        background-color: orange;
        border-radius: 50%;
        display: inline-block;
    }

    .tab-scroll {
        overflow-x: auto;
        white-space: nowrap;
    }



    .tab-scroll::-webkit-scrollbar {
        display: none;
        /* Ẩn thanh cuộn trên iOS/Android */
    }

    .bo-tron {
        width: 60px;
        height: 60px;
        background-color: #e0f7fa;
    }
</style>

<div class="container-fluid py-3 bg-tn">
 <div class="d-flex mb-3">
        <a href="donhang/listdonhang"><i class="bi bi-arrow-left mt-1"></i></a>
        <h5 class="ms-4"><strong>CHI TIẾT ĐƠN HÀNG</strong> </h5>
    </div>
<!-- Tabs scrollable -->
  <div class="bg-white rounded p-2 tab-scroll mb-3 ">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="col-4">
                    <div class="tab-item icon-tab">
                        <div class="text-center">
                            <a href="donhang/tatca" class="text-decoration-none text-black">
                                <div
                                    class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-1 bo-tron">
                                    <i class="bi bi-chat-dots-fill text-info fs-4"></i>
                                </div>
                                <p class="text-nowrap">Tất cả</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tab-item icon-tab">
                        <div class="text-center">
                            <a href="donhang/choxacnhan" class="text-decoration-none text-black">
                                <div
                                    class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-1 bo-tron">
                                    <i class="bi bi-chat-dots-fill text-info fs-4"></i>
                                </div>
                                <p class="text-nowrap">Chờ xác nhận</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tab-item icon-tab">
                        <div class="text-center">
                            <a href="donhang/daxacnhan" class="text-decoration-none text-black">
                                <div
                                    class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-1 bo-tron">
                                    <i class="bi bi-calendar-event-fill text-primary fs-4"></i>
                                </div>
                                <p class="text-nowrap">Đã xác nhận</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tab-item icon-tab">
                        <div class="text-center">
                            <a href="donhang/choxacnhan" class="text-decoration-none text-black">
                                <div
                                    class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-1 bo-tron">
                                    <i class="bi bi-gift-fill text-danger fs-4"></i>
                                </div>
                                <p class="text-nowrap">Đã thanh toán</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tab-item icon-tab">
                        <div class="text-center">
                            <a href="donhang/choxacnhan" class="text-decoration-none text-black">
                                <div
                                    class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-1 bo-tron">
                                    <i class="bi bi-gift-fill text-danger fs-4"></i>
                                </div>
                                <p class="text-nowrap">Đã hoàn thành</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tab-item icon-tab d-flex flex-column">
                        <div class="text-center">
                            <a href="donhang/choxacnhan" class="text-decoration-none text-black">
                                <div
                                    class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-1 bo-tron">
                                    <i class="bi bi-clock-history fs-4"></i>
                                </div>
                                <p class="text-nowrap">Đã hủy</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<div class="card mt-3">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">🧾 Đơn Đặt Tour Du Lịch</h5>
    </div>
    <div class="card-body">

        <h6 class="mb-3">🗺️ Thông tin tour</h6>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item"><strong>Điểm đến:</strong> Hà Nội</li>
            <li class="list-group-item"><strong>Thời gian:</strong> 5 ngày 4 đêm</li>
            <li class="list-group-item"><strong>Ngày khởi hành:</strong> 20/07/2025</li>
            <li class="list-group-item"><strong>Phương tiện:</strong> Máy bay khứ hồi</li>
            <li class="list-group-item"><strong>Khách sạn:</strong> 4 sao</li>
            <li class="list-group-item"><strong>Giá tour:</strong> 6.500.000đ/người</li>
        </ul>

        <h6 class="mb-3">👤 Thông tin khách hàng</h6>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Họ và tên:</strong> Nguyễn Văn A</li>
            <li class="list-group-item"><strong>Số điện thoại:</strong> 0903 456 789</li>
            <li class="list-group-item"><strong>Email:</strong> nguyenvana@gmail.com</li>
            <li class="list-group-item"><strong>Số lượng người:</strong> 2 người lớn, 1 trẻ em</li>
            <li class="list-group-item"><strong>Ghi chú:</strong> Yêu cầu phòng có ban công, ăn chay
            cho 1 người.</li>
        </ul>

    </div>
    <div class="card-footer text-end">
        <button class="btn btn-success">Xác nhận đơn</button>
        <button class="btn btn-outline-secondary">Hủy</button>
    </div>
</div>


</div>


