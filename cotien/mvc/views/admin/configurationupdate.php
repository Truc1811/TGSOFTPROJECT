<style>
    /* Bắt đầu phàn nội dung số 1 */
    .card-icon {
        width: 36px;
        height: 36px;
        border-radius: 8px;
    }

    .icon-purple {
        background-color: #7c3aed;
    }

    .xanh_la {
        background-color: #16a34a;
    }

    .text-success-small {
        color: #16a34a;
    }

    .card-custom {
        border-radius: 16px;
    }

    /* Kết thúc phàn nội dung số 1 */
</style>
<form class="" method="post" enctype="multipart/form-data" action="admin/update/<?php echo str_replace('model', '', $model); ?>">

    <div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light" style="height:86vh">
        <!---- khung trai-->
        <div class="col-12 col-md-12 d-flex flex-wrap">

            <div class="container py-5">
                <h3 class="dashboard-title mb-1 fw-bold">📊 Khoản đầu tư của tôi</h3>
                <p class="text-muted-sm mb-4">Theo dõi và quản lý các khoản đầu tư của bạn trên nền tảng Cotien</p>

                <div class="row g-4">
                    <!-- Tổng đầu tư -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-custom p-4 shadow-sm">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-uppercase small text-muted text-secondary">Tổng đầu tư</span>
                                <div class="card-icon icon-purple me-2 d-flex justify-content-center align-items-center text-white">
                                    <i class="fas fa-coins"></i>
                                </div>

                            </div>
                            <h4 class="fw-bold mb-1">85,500,000₫</h4>
                            <div class="text-success-small fs-6">↑ +12.5% với tháng trước</div>
                        </div>
                    </div>

                    <!-- Lợi nhuận -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-custom p-4 shadow-sm">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-uppercase small text-muted">Lợi nhuận</span>
                                <div class="card-icon xanh_la me-2 d-flex justify-content-center align-items-center text-white">
                                    <i class="fas fa-chart-line"></i>
                                </div>

                            </div>
                            <h4 class="fw-bold mb-1 ">8,720,000₫</h4>
                            <div class="text-success-small">↑ +8.2% ROI</div>
                        </div>
                    </div>

                    <!-- Dự án đang đầu tư -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-custom p-4 shadow-sm">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-uppercase small text-muted">Dự án đang đầu tư</span>
                                <div class="card-icon bg-primary me-2 d-flex justify-content-center align-items-center text-white">
                                    <i class="fas fa-share-alt"></i>
                                </div>

                            </div>
                            <h4 class="fw-bold mb-1">7</h4>
                            <div class="text-success-small">↑ +2 dự án mới</div>
                        </div>
                    </div>

                    <!-- Tỷ suất sinh lời TB -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-custom p-4 shadow-sm">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-uppercase small text-muted">Tỷ suất sinh lời TB</span>
                                <div class="card-icon bg-warning me-2 d-flex justify-content-center align-items-center text-white">
                                    <i class="fas fa-percent"></i>
                                </div>

                            </div>
                            <h4 class="fw-bold mb-1">12.8%</h4>
                            <div class="text-success-small">↑ +1.2% so với Q3</div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .status-badge {
                    font-size: 10px;
                    background-color: #d1fae5;
                    color: #059669;
                    border-radius: 999px;
                }

                .project-card {
                    border-radius: 16px;
                }

                .progress-bar {
                    height: 6px;
                    border-radius: 10px;
                }

                /* Gradient cho thanh tiến trình */
                .progress-bar.gradient {
                background-image: linear-gradient(90deg,
                    #7740f7 0%,      /* tím */
                    #2a71d6 35%,     /* xanh dương */
                    #00b977 75%);    /* xanh lá */
                border-radius: 4px;          /* giữ bo khi nhỏ hơn 100 % */
                }

                .text-sm {
                    font-size: 0.875rem;
                }

                .text-xs {
                    font-size: 0.75rem;
                }

                .tab-btn {
                    border: none;
                    background-color: #f3f4f6;
                    padding: 6px 16px;
                    border-radius: 8px;
                    font-weight: 500;
                }

                .tab-btn.active {
                    background-color: #7c3aed;
                    color: white;
                }

            </style>
            <div class="container py-2">
                <!-- Project 1 -->
                <div class="project-card mb-4 bg-white p-4">
                    <div class="d-md-flex justify-content-md-between align-items-md-center">
                        <div>
                            <h5 class="fw-bold mb-3">Danh sách đầu tư</h5>
                        </div>
                        <div>
                            <!-- Tabs -->
                            <div class="d-flex gap-2 mb-4">
                                <button class="tab-btn active">Tất cả</button>
                                <button class="tab-btn">Đang hoạt động</button>
                                <button class="tab-btn">Hoàn thành</button>
                                <button class="tab-btn">Chờ xử lý</button>
                            </div>
                        </div>
                    </div>
                    <?php
$items = [
    [
        'title' => 'AI Platform cho Doanh nghiệp',
        'category' => 'Công nghệ • Cổ phần',
        'price' => '25,000,000₫',
        'date' => '15/11/2024',
        'status' => 'ĐANG HOẠT ĐỘNG',
        'progress' => 68,
        'tyle' => '2.5%',
        'loinhuan' => '+3,200,000₫',
        'roi' => '+12.8%',
        'thoihan' => '36 tháng',
    ],
    [
        'title' => 'Blockchain Start-up',
        'category' => 'Tài chính • Startup',
        'price' => '10,000,000₫',
        'date' => '01/12/2024',
        'status' => 'ĐANG HOẠT ĐỘNG',
        'progress' => 45,
        'tyle' => '1.2%',
        'loinhuan' => '+900,000₫',
        'roi' => '+9%',
        'thoihan' => '24 tháng',
    ],
    // Thêm bao nhiêu mục cũng được
     [
        'title' => 'AI Platform cho Doanh nghiệp',
        'category' => 'Công nghệ • Cổ phần',
        'price' => '25,000,000₫',
        'date' => '15/11/2024',
        'status' => 'ĐANG HOẠT ĐỘNG',
        'progress' => 68,
        'tyle' => '2.5%',
        'loinhuan' => '+3,200,000₫',
        'roi' => '+12.8%',
        'thoihan' => '36 tháng',
    ],
    [
        'title' => 'Blockchain Start-up',
        'category' => 'Tài chính • Startup',
        'price' => '10,000,000₫',
        'date' => '01/12/2024',
        'status' => 'ĐANG HOẠT ĐỘNG',
        'progress' => 45,
        'tyle' => '1.2%',
        'loinhuan' => '+900,000₫',
        'roi' => '+9%',
        'thoihan' => '24 tháng',
    ],
];
?>

                    <?php foreach ($items as $item): ?>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-between align-items-start mt-4 mb-2">
                                <div>
                                    <h6 class="fw-bold mb-1"><?= $item['title'] ?></h6>
                                    <div class="text-muted text-sm"><?= $item['category'] ?></div>
                                </div>
                                <div class="text-end">
                                    <div class="fw-bold"><?= $item['price'] ?></div>
                                    <div class="text-muted text-sm"><?= $item['date'] ?></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <small class="status-badge small d-inline-block px-3 py-2 "><?= $item['status'] ?></small>
                            </div>
                            <div class="progress mb-3" style="height: 6px;">
                                <div  class="progress-bar gradient"
                                    role="progressbar"
                                    style="width: <?= $item['progress'] ?>%;"
                                    aria-valuenow="<?= $item['progress'] ?>" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <hr>
                            <div class="row text-sm text-center text-muted">
                                <div class="col">
                                    <div class="text-dark fw-semibold"><?= $item['tyle'] ?></div>
                                    Tỷ lệ sở hữu
                                </div>
                                <div class="col">
                                    <div class="text-dark fw-semibold"><?= $item['loinhuan'] ?></div>
                                    Lợi nhuận hiện tại
                                </div>
                                <div class="col">
                                    <div class="text-dark fw-semibold"><?= $item['roi'] ?></div>
                                    ROI
                                </div>
                                <div class="col">
                                    <div class="text-dark fw-semibold"><?= $item['thoihan'] ?></div>
                                    Thời hạn
                                </div>
                            </div>
                            <div class="mt-4 d-flex gap-2">
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-eye-fill"></i> Xem chi tiết
                                </button>
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-download"></i> Báo cáo
                                </button>
                            </div>
                        </div>
                        
                    <?php endforeach; ?>

                    
                </div>

                <!-- Project 2 -->
                
            </div>

        </div>
        <!-- end khung trai  -->



    </div>

</form>