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

    .order-card {
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .status-badge {
        font-size: 0.8rem;
        padding: 4px 8px;
        border-radius: 12px;
    }

    .badge-dang {
        background-color: #ff9f43;
        color: white;
    }

    .badge-hoanthanh {
        background-color: #5f6caf;
        color: white;
    }

    
</style>

<div class="container-fluid py-3 bg-tn">
    <div class="d-flex mb-3">
        <a href="donhang/listdonhang"><i class="bi bi-arrow-left mt-1"></i></a>
        <h5 class="ms-4"><strong>ĐƠN HÀNG CHỜ XÁC NHẬN</strong> </h5>
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

    <!-- Notification -->

    <!-- Search Bar -->
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nhập tên, số điện thoại, mã">
        <button class="btn btn-outline-secondary" type="button"><i class="bi bi-upc-scan"></i></button>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
            <a class="nav-link active" href="#">500 Đơn hàng</a>
        </li>
    </ul>

    <!-- Order Card 1 -->
    <!-- Order Card: Tour + Khách sạn -->
    <div class="order-card bg-white">
        <div class="d-flex justify-content-between align-items-center">
            <div><strong>SON35518</strong></div>
            <div class="status-badge badge-dang">Chờ xác nhận</div>
        </div>
        <h5 class="text-primary mt-2">5,200,000</h5>
        <p class="mb-1"><i class="bi bi-person"></i><a href="donhang/ctdh/54" class="text-decoration-none text-black fw-bold">
                Nguyễn Văn A - 0909123456</a></p>
        <p class="mb-1">Địa chỉ: 123 Lê Lợi, Quận 1, TP.HCM</p>
        <p class="mb-1"><strong>Tour:</strong> Đà Lạt 3N2Đ (14/07 - 16/07)</p>
        <p class="mb-1"><strong>Khách sạn:</strong> TTC Hotel Premium - Đà Lạt, 2 phòng đôi</p>
        <p class="mb-1"><strong>Số người:</strong> 4 người lớn, 1 trẻ em</p>
        <p class="mb-1"><strong>Ghi chú:</strong> Yêu cầu xe đưa đón sân bay</p>
        <div class="d-flex justify-content-between mt-3">
            <button class="btn btn-outline-secondary btn-sm">🖨 In đơn hàng</button>
            <a class="btn btn-outline-primary btn-sm" href="donhang/ctdh/54">📦 Xác nhận đặt chỗ</a>
        </div>
    </div>


    <!-- Order Card 2 -->
    <!-- Order Card: Tour + Khách sạn -->
    <div class="order-card bg-white">
        <div class="d-flex justify-content-between align-items-center">
            <div><strong>SON35518</strong></div>
            <div class="status-badge badge-dang">Đang giao dịch</div>
        </div>
        <h5 class="text-primary mt-2">5,200,000</h5>
        <p class="mb-1"><i class="bi bi-person"></i> <a href="donhang/ctdh/54" class="text-decoration-none text-black fw-bold">
                Nguyễn Văn B - 0909123456</a></p>
        <p class="mb-1">Địa chỉ: 123 Lê Lợi, Quận 1, TP.HCM</p>
        <p class="mb-1"><strong>Tour:</strong> Đà Lạt 3N2Đ (14/07 - 16/07)</p>
        <p class="mb-1"><strong>Khách sạn:</strong> TTC Hotel Premium - Đà Lạt, 2 phòng đôi</p>
        <p class="mb-1"><strong>Số người:</strong> 4 người lớn, 1 trẻ em</p>
        <p class="mb-1"><strong>Ghi chú:</strong> Yêu cầu xe đưa đón sân bay</p>
        <div class="d-flex justify-content-between mt-3">
            <button class="btn btn-outline-secondary btn-sm">🖨 In đơn hàng</button>
            <a class="btn btn-outline-primary btn-sm" href="donhang/ctdh/54">📦 Xác nhận đặt chỗ</a>
        </div>
    </div>

</div>

