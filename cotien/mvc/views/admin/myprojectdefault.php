<style>
    /* Bắt đầu: Icon của phần vương miệng và kim cương  */
    .access-icon.vip {
        background-color: #eee8ff;
        color: #6f42c1;
    }

    /* Kết thúc: Icon của phần vương miệng và kim cương  */

    /* Bắt đầu: dự án hot */
    .project-card {
        overflow: hidden;
        transition: transform 0.2s;
        border-radius: .5rem;
    }

    .project-card:hover {
        transform: translateY(-5px);
    }

    .badge-float {
        top: .75rem;
        right: .75rem;
    }

    /* Kết thúc: dự án hot  */

    /* Phần xử lý cái thanh xử lý */
    .progress {
        height: 6px;
    }

    /*  Bắt đầu: nội dung đầu tự dự án vào đây */
    .avatar-circle {
        width: 40px;
        height: 40px;
        border-radius: 20%;
    }

    /* ----- CARD Phần đầu tiên  ----- */
    .metric-card {
        border-radius: 12px;
    }

    /* icon vuông màu */
    .metric-icon {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        /* không co icon */
    }
</style>
<form class="" method="post" enctype="multipart/form-data" action="admin/update/<?php echo str_replace('model', '', $model); ?>">

    <div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light" style="height:86vh">
        <!---- khung -->
        <div class="col-12 col-md-12 d-flex flex-wrap">

            <!-- DỰ ÁN MỚI  -->
            <div class="container py-4">
                <div class="d-flex justify-content-between align-items-center pb-3">
                    <div class="d-flex align-items-center">
                        <h3><strong>Dự án của tôi</strong></h3><span>Quản lý các dự án gọi vốn của bạn trên nền tảng Cotien</span>
                    </div>
                    <div>
                        <button class="btn px-2 py-1 text-white" style="background-color: #4338CA;">
                            <i class="bi bi-plus-lg me-1"></i>Tạo dự án mới
                        </button>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-4">
                    <!-- Card 1 -->
                    <div class="col mt-md-0 mt-2">
                        <div class="p-3 d-flex align-items-center metric-card h-100 bg-white shadow-sm">
                            <div class="metric-icon d-flex justify-content-center align-items-center flex-shrink-0 text-white" style="background:#7e46d9">
                                <i class="fa-solid fa-diagram-project"></i>
                            </div>
                            <div class="flex-grow-1 text-center">
                                <div class="fw-bold">2
                                </div>
                                <small class="text-muted d-block mt-1 text-secondary">Tổng số dự án</small>
                            </div>

                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col mt-md-0 mt-2">
                        <div class="p-3 d-flex align-items-center metric-card h-100 bg-white shadow-sm">
                            <div class="metric-icon d-flex justify-content-center align-items-center flex-shrink-0 text-white" style="background:#17c964;">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 text-center">
                                <div class="fw-bold">1
                                </div>
                                <small class="text-muted d-block mt-1 text-secondary">Dự án đang hoạt động</small>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-md-0 mt-2">
                        <div class="p-3 d-flex align-items-center metric-card h-100 bg-white shadow-sm">
                            <div class="metric-icon d-flex justify-content-center align-items-center flex-shrink-0 text-white" style="background:#ffa41b;">
                                <i class="fa-solid fa-hourglass-half"></i>
                            </div>
                            <div class="flex-grow-1 text-center">
                                <div class="fw-bold">1
                                </div>
                                <small class="text-muted d-block mt-1 text-secondary">Dự án đang duyệt</small>
                            </div>

                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col mt-md-0 mt-2">
                        <div class="p-3 d-flex align-items-center metric-card h-100 bg-white shadow-sm">
                            <div class="metric-icon d-flex justify-content-center align-items-center flex-shrink-0 text-white" style="background:#ffa41b;">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>
                            <div class="flex-grow-1 text-center">
                                <div class="fw-bold">500,000,000 VND
                                </div>
                                <small class="text-muted d-block mt-1 text-secondary">Tổng vốn huy động</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-12">
                        <div class="p-3 d-flex flex-wrap align-items-end metric-card bg-white shadow-sm">

                            <div class="col col-md me-md-3 mb-2">
                                <label class="form-label mb-1">Trạng thái</label>
                                <select class="form-select">
                                    <option selected>Tất cả</option>
                                    <option>Bản nháp</option>
                                    <option>Đang duyệt</option>
                                    <option>Đang gọi vốn</option>
                                    <option>Đạt mục tiêu</option>
                                    <option>Đã hoàn thành</option>
                                    <option>Bị từ chối</option>
                                </select>
                            </div>

                            <div class="col col-md me-md-3 mb-2">
                                <label class="form-label mb-1">Loại gọi vốn</label>
                                <select class="form-select">
                                    <option selected>Tất cả</option>
                                    <option>Cổ phần</option>
                                    <option>Vay vốn</option>
                                    <option>Phần tử</option>
                                </select>
                            </div>

                            <div class="col col-md me-md-3 mb-2">
                                <label class="form-label mb-1">Sắp xếp theo</label>
                                <select class="form-select">
                                    <option selected>Mới nhất</option>
                                    <option selected>Cũ nhất</option>
                                    <option selected>Vốn nhiều nhất</option>
                                    <option selected>Tiến độ cao nhất</option>
                                </select>
                            </div>

                            <div class="col col-md mb-2">
                                <label class="form-label mb-1 invisible">Tìm kiếm</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="🔍 Tìm kiếm dự án...">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <style>
                                .badge-purple {
                                    background-color: #ede9fe;
                                    color: #7c3aed;
                                }

                                .badge-green {
                                    background-color: #d1fae5;
                                    color: #059669;
                                }

                                .progress {
                                    height: 6px;
                                    border-radius: 10px;
                                }

                                .tab-link {
                                    background-color: transparent;
                                    border: none;
                                    color: #6b7280;
                                }

                                .tab-link.active {
                                    border-bottom: 2px solid #7c3aed;
                                    color: #7c3aed;
                                }

                                .share-bar {
                                    padding: 12px 20px;
                                    border-radius: 10px;
                                    background-color: #ffffff;
                                    margin-bottom: 10px;
                                }

                                .color-box {
                                    width: 12px;
                                    height: 12px;
                                    border-radius: 4px;
                                    margin-right: 8px;

                                }

                                .progress.gradient-progress {
                                    height: 8px;
                                    border-radius: 999px;
                                    background-color: #e5e7eb;
                                    /* xám nhạt */
                                    overflow: hidden;
                                }

                                .gradient-bar {
                                    height: 100%;
                                    border-radius: 999px;
                                    background-image: linear-gradient(to right, #7c3aed, #3b82f6, #10b981);
                                }
                            </style>
                            <?php
                                $projects = [
                                    [
                                        'short_name' => 'TI',
                                        'name' => 'Tech Innovation',
                                        'description' => 'Công nghệ blockchain',
                                        'badges' => ['Cổ phần', 'Đang gọi vốn'],
                                        'raised' => '700,000,000 VND',
                                        'target' => '1,000,000,000 VND',
                                        'percent' => '30%',
                                        'investors' => 35,
                                        'progress' => 70,
                                        'days_left' => 10,
                                        'valuation' => '3,333,333,333 VND',
                                        'share_price' => '33,333 VND',
                                        'shares_offered' => '30,000 cổ phần',
                                        'shares_sold' => '21,000 cổ phần',
                                    ],
                                    // Bạn có thể thêm nhiều phần tử nữa ở đây
                                    [
                                        'short_name' => 'TI',
                                        'name' => 'Tech Innovation',
                                        'description' => 'Công nghệ blockchain',
                                        'badges' => ['Cổ phần', 'Đang gọi vốn'],
                                        'raised' => '700,000,000 VND',
                                        'target' => '1,000,000,000 VND',
                                        'percent' => '30%',
                                        'investors' => 35,
                                        'progress' => 70,
                                        'days_left' => 10,
                                        'valuation' => '3,333,333,333 VND',
                                        'share_price' => '33,333 VND',
                                        'shares_offered' => '30,000 cổ phần',
                                        'shares_sold' => '21,000 cổ phần',
                                    ],
                                    [
                                        'short_name' => 'TI',
                                        'name' => 'Tech Innovation',
                                        'description' => 'Công nghệ blockchain',
                                        'badges' => ['Cổ phần', 'Đang gọi vốn'],
                                        'raised' => '700,000,000 VND',
                                        'target' => '1,000,000,000 VND',
                                        'percent' => '30%',
                                        'investors' => 35,
                                        'progress' => 70,
                                        'days_left' => 10,
                                        'valuation' => '3,333,333,333 VND',
                                        'share_price' => '33,333 VND',
                                        'shares_offered' => '30,000 cổ phần',
                                        'shares_sold' => '21,000 cổ phần',
                                    ],
                                ];
                                ?>
                <?php foreach ($projects as $project): ?>
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="d-flex flex-wrap align-items-end metric-card bg-white shadow-sm">

                            
                            <div class="container-fluid  py-5">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="text-white rounded-2 d-flex align-items-center justify-content-center" style="width:40px; height:40px; font-weight:bold;background-color: #10B981;">
                                                <?= htmlspecialchars($project['short_name']) ?>
                                            </div>
                                            <div class="ms-3">
                                                <h5 class="mb-0 fw-bold"><?= htmlspecialchars($project['name']) ?></h5>
                                                <small class="text-muted "><?= htmlspecialchars($project['description']) ?></small>
                                                <div class="ms-auto d-flex gap-2 mt-1">
                                                    <!-- <span class="badge badge-pill badge-purple rounded-pill fw-bold px-2 py-1 ">Cổ phần</span>
                                                    <span class="badge badge-pill badge-green rounded-pill fw-bold px-2 py-1 ">Đang gọi vốn</span> -->
                                                    <?php foreach ($project['badges'] as $index => $badge): ?>
                                                        <span class="badge badge-pill <?= $index == 0 ? 'badge-purple' : 'badge-green' ?> rounded-pill fw-bold px-2 py-1">
                                                            <?= htmlspecialchars($badge) ?>
                                                        </span>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mt-4 d-flex gap-2 justify-content-end">
                                            <button class="btn btn-outline-secondary btn-sm">
                                                <i class="bi bi-bar-chart-fill"></i>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-sm">
                                                <i class="bi bi-graph-up"></i>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-sm">
                                                <i class="bi bi-people-fill"></i>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-sm">
                                                <i class="bi bi-pencil-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header -->
                                <hr>
                                <!-- Metrics -->
                                <div class="row text-center mb-3">
                                    <div class="col">
                                        <h6 class="text-purple fw-bold" style="color: #7c3aed;"><?= $project['raised'] ?></h6>
                                        <small class="text-muted">Đã huy động</small>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-purple fw-bold" style="color: #7c3aed;"><?= $project['target'] ?></h6>
                                        <small class="text-muted">Mục tiêu</small>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-purple fw-bold" style="color: #7c3aed;"><?= $project['percent'] ?></h6>
                                        <small class="text-muted">Cổ phần chào bán</small>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-purple fw-bold" style="color: #7c3aed;"><?= $project['investors'] ?></h6>
                                        <small class="text-muted">Nhà đầu tư</small>
                                    </div>
                                </div>

                                <!-- Progress -->
                                <div class="mb-2">
                                    <div class="progress gradient-progress">
                                        <div class="progress-bar gradient-bar" style="width: <?= $project['progress'] ?>%"></div>
                                    </div>
                                    <div class="text-muted mt-1 small"><?= $project['progress'] ?>% hoàn thành (còn <?= $project['days_left'] ?> ngày)</div>
                                </div>
                                <!-- Tabs -->
                                <div class="d-flex border-bottom mb-3 mt-2">
                                    <button type="button" class="tab-link active px-3 py-3 me-2" data-target="tab-info">Thông tin cổ phần</button>
                                    <button type="button" class="tab-link px-3 py-3 me-2" data-target="tab-dividend">Lịch trả cổ tức</button>
                                    <button type="button" class="tab-link px-3 py-3 me-2" data-target="tab-benefit">Quyền lợi</button>
                                </div>

                                <!-- Tab 1: Thông tin cổ phần -->
                                <div id="tab-info" class="tab-section">
                                    <div style="background-color:#E2F2E9;" class="bg-opacity-10 p-4 rounded">
                                        <h6 class="fw-bold mb-3" style="color:#17c964;">Phân bổ cổ phần</h6>

                                        <!-- Founder -->
                                        <div class="share-bar">
                                            <div class="d-flex align-items-center text-warning">
                                                <div class="color-box bg-warning" style=""></div>
                                                <span style="color:#17c964;">Founder (70%)</span>
                                            </div>
                                            <div class="" style="color: #17c964;">70%</div>
                                        </div>

                                        <!-- Nhà đầu tư -->
                                        <div class="share-bar d-flex justify-content-between align-items-center fw-bold">
                                            <div class="d-flex align-items-center text-primary">
                                                <div class="color-box " style="background-color: #b417c9ff;color:#17c964;"></div>
                                                <span style="color:#17c964;">Nhà đầu tư (21%)</span>
                                            </div>
                                            <div class="" style="color: #17c964;">21%</div>
                                        </div>

                                        <!-- Còn lại -->
                                        <div class="share-bar">
                                            <div class="d-flex align-items-center text-success">
                                                <div class="color-box " style="background-color: #016345ff;color:#17c964;"></div>
                                                <span style="color:#17c964;">Còn lại (9%)</span>
                                            </div>
                                            <div class="" style="color: #17c964;">9%</div>
                                        </div>
                                        <h6 class="fw-bold mb-3 mt-4" style="color:#17c964;">Định giá & Giá cổ phần</h6>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="bg-white p-3 rounded shadow-sm">
                                                    <small class="text-muted" style="color: #17c964;">Định giá doanh nghiệp</small>
                                                    <h6 class="fw-bold text-dark mb-0">3,333,333,333 VND</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bg-white p-3 rounded shadow-sm">
                                                    <small class="text-muted">Giá mỗi cổ phần</small>
                                                    <h6 class="fw-bold text-dark mb-0">33,333 VND</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bg-white p-3 rounded shadow-sm">
                                                    <small class="text-muted">Số cổ phần chào bán</small>
                                                    <h6 class="fw-bold text-dark mb-0">30,000 cổ phần</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bg-white p-3 rounded shadow-sm">
                                                    <small class="text-muted">Đã bán</small>
                                                    <h6 class="fw-bold text-dark mb-0">21,000 cổ phần</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab 2: Lịch trả cổ tức -->
                                <div id="tab-dividend" class="tab-section d-none">
                                    <div class=" bg-opacity-10 p-4 rounded" style="background-color:#E2F2E9;">
                                        <h6 class="fw-bold mb-3" style="color:#17c964;">Lịch trả cổ tức dự kiến</h6>
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center align-middle bg-white">
                                                <thead class="table-light" style="background-color: #F8F9FA;">
                                                    <tr>
                                                        <th>Năm</th>
                                                        <th>Doanh thu dự kiến</th>
                                                        <th>Lợi nhuận dự kiến</th>
                                                        <th>% chia cổ tức</th>
                                                        <th>Cổ tức/cổ phần</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-success">
                                                    <tr>
                                                        <td style="color:#17c964;">2025</td>
                                                        <td style="color:#17c964;">2,000,000,000 VND</td>
                                                        <td style="color:#17c964;">400,000,000 VND</td>
                                                        <td style="color:#17c964;">20%</td>
                                                        <td style="color:#17c964;">800 VND</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#17c964;">2026</td>
                                                        <td style="color:#17c964;">3,500,000,000 VND</td>
                                                        <td style="color:#17c964;">800,000,000 VND</td>
                                                        <td style="color:#17c964;">25%</td>
                                                        <td style="color:#17c964;">2,000 VND</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#17c964;">2027</td>
                                                        <td style="color:#17c964;">5,000,000,000 VND</td>
                                                        <td style="color:#17c964;">1,200,000,000 VND</td>
                                                        <td style="color:#17c964;">30%</td>
                                                        <td style="color:#17c964;">3,600 VND</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="alert  small mt-3 mb-0" style="background-color: #F8F9FA;">
                                            <i class="bi bi-exclamation-circle-fill me-2 text-warning"></i>

                                            Lịch trả cổ tức có thể thay đổi tùy thuộc vào kết quả kinh doanh thực tế
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab 3: Quyền lợi -->
                                <div id="tab-benefit" class="tab-section d-none">
                                    <div class="bg-opacity-10 p-4 rounded" style="background-color: #F8F9FA;">
                                        <h6 class="fw-bold mb-3" style="color:#17c964;">Quyền lợi nhà đầu tư</h6>
                                        <div class="row g-3">
                                            <!-- Box 1 -->
                                            <style>
                                                .benefit-box {
                                                    background-color: #fff;
                                                    border-radius: 10px;

                                                }

                                                .benefit-icon {
                                                    font-size: 28px;
                                                    color: #a0aec0;
                                                    /* xám nhạt mờ */



                                                }

                                                .benefit-title {
                                                    font-weight: 600;
                                                    color: #18a76d;
                                                    /* xanh lá đậm */
                                                    margin-bottom: 4px;
                                                }

                                                .benefit-desc {
                                                    margin: 0;
                                                    font-size: 14px;
                                                    color: #555;
                                                }
                                            </style>
                                            <div class="col-md-6">
                                                <div class="benefit-box shadow-sm d-flex align-items-center">
                                                    <i class="fas fa-laptop benefit-icon flex-shrink-0 me-2 p-4 "></i>
                                                    <div>
                                                        <div class="benefit-title">Quyền biểu quyết</div>
                                                        <p class="benefit-desc">Tham gia bỏ phiếu các quyết định quan trọng của công ty</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Box 2 -->
                                            <div class="col-md-6">
                                                <div class="benefit-box shadow-sm d-flex align-items-center">
                                                    <i class="fas fa-chart-line benefit-icon flex-shrink-0 me-2 p-4"></i>
                                                    <div>
                                                        <div class="benefit-title">Báo cáo định kỳ</div>
                                                        <p class="benefit-desc">Nhận báo cáo tài chính và hoạt động hàng quý</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Box 3 -->
                                            <div class="col-md-6">
                                                <div class="benefit-box shadow-sm d-flex align-items-center">
                                                    <i class="fas fa-handshake benefit-icon flex-shrink-0 me-2 p-4"></i>
                                                    <div>
                                                        <div class="benefit-title">Quyền ưu tiên</div>
                                                        <p class="benefit-desc">Ưu tiên trong các đợt gọi vốn tiếp theo</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Box 4 -->
                                            <div class="col-md-6">
                                                <div class="benefit-box shadow-sm d-flex align-items-center">
                                                    <i class="fas fa-trophy benefit-icon flex-shrink-0 me-2 p-4"></i>
                                                    <div>
                                                        <div class="benefit-title">Phần thưởng đặc biệt</div>
                                                        <p class="benefit-desc">Discount 20% sản phẩm, mời tham gia sự kiện VIP</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab Switching Script -->
                                <script>
                                    const tabLinks = document.querySelectorAll(".tab-link");
                                    const tabSections = document.querySelectorAll(".tab-section");

                                    tabLinks.forEach(link => {
                                        link.addEventListener("click", () => {
                                            // Xóa active khỏi tất cả nút
                                            tabLinks.forEach(l => l.classList.remove("active"));
                                            link.classList.add("active");

                                            // Ẩn tất cả tab section
                                            tabSections.forEach(sec => sec.classList.add("d-none"));

                                            // Hiện tab được chọn
                                            const targetId = link.getAttribute("data-target");
                                            const targetSection = document.getElementById(targetId);
                                            if (targetSection) {
                                                targetSection.classList.remove("d-none");
                                            }
                                        });
                                    });
                                </script>



                                <div id="tab-dividend" class="tab-section d-none">
                                    <div class="bg-success bg-opacity-10 p-4 rounded">
                                        <h6 class="fw-bold mb-3">Lịch trả cổ tức dự kiến</h6>
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center align-middle bg-white">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Năm</th>
                                                        <th>Doanh thu dự kiến</th>
                                                        <th>Lợi nhuận dự kiến</th>
                                                        <th>% chia cổ tức</th>
                                                        <th>Cổ tức/cổ phần</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-success">
                                                    <tr>
                                                        <td>2025</td>
                                                        <td class="text-success">2,000,000,000 VND</td>
                                                        <td class="text-success">400,000,000 VND</td>
                                                        <td class="text-success">20%</td>
                                                        <td class="text-success">800 VND</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2026</td>
                                                        <td class="text-success">3,500,000,000 VND</td>
                                                        <td class="text-success">800,000,000 VND</td>
                                                        <td class="text-success">25%</td>
                                                        <td class="text-success">2,000 VND</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2027</td>
                                                        <td class="text-success">5,000,000,000 VND</td>
                                                        <td class="text-success">1,200,000,000 VND</td>
                                                        <td class="text-success">30%</td>
                                                        <td class="text-success">3,600 VND</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="alert alert-warning small mt-3 mb-0">
                                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                            Lịch trả cổ tức có thể thay đổi tùy thuộc vào kết quả kinh doanh thực tế
                                        </div>
                                    </div>
                                </div>

                                <!-- Quyền lợi -->
                                <div id="tab-benefit" class="tab-section d-none">
                                    <div class="bg-success bg-opacity-10 p-4 rounded">
                                        <h6 class="fw-bold mb-3">Quyền lợi nhà đầu tư</h6>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="p-3 bg-white rounded shadow-sm">
                                                    <h6 class="fw-bold text-success"><i class="bi bi-laptop me-2"></i>Quyền biểu quyết</h6>
                                                    <p class="mb-0 text-muted small">Tham gia bỏ phiếu các quyết định quan trọng của công ty</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="p-3 bg-white rounded shadow-sm">
                                                    <h6 class="fw-bold text-success"><i class="bi bi-bar-chart-line-fill me-2"></i>Báo cáo định kỳ</h6>
                                                    <p class="mb-0 text-muted small">Nhận báo cáo tài chính và hoạt động hàng quý</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="p-3 bg-white rounded shadow-sm">
                                                    <h6 class="fw-bold text-success"><i class="bi bi-hand-thumbs-up-fill me-2"></i>Quyền ưu tiên</h6>
                                                    <p class="mb-0 text-muted small">Ưu tiên trong các đợt gọi vốn tiếp theo</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="p-3 bg-white rounded shadow-sm">
                                                    <h6 class="fw-bold text-success"><i class="bi bi-gift-fill me-2"></i>Phần thưởng đặc biệt</h6>
                                                    <p class="mb-0 text-muted small">Discount 20% sản phẩm, mời tham gia sự kiện VIP</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>   

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <style>
                .create-project-box {
                    border: 1px dashed #d1d5db;
                    border-radius: 12px;
                }

                .create-icon {
                    width: 50px;
                    height: 50px;
                    background-color: #7c3aed;
                    border-radius: 50%;
                }

                .btn-purple {
                    background-color: #7c3aed;
                    border-radius: 8px;
                }

                .btn-purple:hover {
                    background-color: #6d28d9;
                }
            </style>
            <div class="container py-1">
                <div class="create-project-box text-center shadow-sm p-4 bg-white">
                    <div class="create-icon text-white d-inline-flex justify-content-center align-items-center fs-4 mb-3">
                        <i class="bi bi-plus-lg"></i> <!-- Font Awesome nếu có thể thay bằng fa-plus -->
                    </div>
                    <h5 class="fw-bold">Tạo dự án mới</h5>
                    <p class="text-muted mb-4">Bạn có thể tạo thêm dự án mới để huy động vốn</p>
                    <button class="btn btn-purple text-white fw-bold px-2 py-1">Tạo dự án ngay</button>
                </div>
            </div>




            <style>
                .timeline-wrapper {
                    border-radius: 8px;
                    padding: 24px;

                }

                .timeline {
                    border-left: 2px solid #e0e0e0;
                    padding-left: 30px;
                    position: relative;
                }

                .timeline-item {
                    position: relative;
                    margin-bottom: 30px;
                }

                .timeline-item:last-child {
                    margin-bottom: 0;
                }

                .timeline-icon {
                    position: absolute;
                    left: -44px;
                    top: 0;
                    width: 26px;
                    height: 26px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: 14px;
                }

                .purple {
                    background-color: #6f42c1;
                }

                .green {
                    background-color: #198754;
                }

                .orange {
                    background-color: #fd7e14;
                }

                .blue {
                    background-color: #0d6efd;
                }

                .yellow {
                    background-color: #ffc107;
                    color: #000;
                }

                .timeline-title {
                    font-weight: 600;
                }

                .timeline-date {
                    font-size: 0.875rem;
                    color: #6c757d;
                }
            </style>

            <div class="container my-5">
                <div class="timeline-wrapper bg-white shadow-sm">
                    <h5 class="fw-bold mb-4">Hoạt động gần đây</h5>
                    <div class="timeline">

                        <!-- Item 1 -->
                        <div class="timeline-item">
                            <div class="timeline-icon purple">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="timeline-title">Đầu tư vào Tech Innovation</div>
                            <div>Bạn đã đầu tư 10,000,000 VND vào dự án Tech Innovation</div>
                            <div class="timeline-date mt-1">15/05/2025 - 10:30</div>
                        </div>

                        <!-- Item 2 -->
                        <div class="timeline-item">
                            <div class="timeline-icon green">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <div class="timeline-title">Nạp tiền vào ví</div>
                            <div>Bạn đã nạp 20,000,000 VND vào ví Cotien</div>
                            <div class="timeline-date mt-1">10/05/2025 - 14:15</div>
                        </div>

                        <!-- Item 3 -->
                        <div class="timeline-item">
                            <div class="timeline-icon orange">
                                <i class="fas fa-lock-open"></i>
                            </div>
                            <div class="timeline-title">Mở khóa tài liệu</div>
                            <div>Bạn đã mở khóa tài liệu VIP của dự án Green Farm</div>
                            <div class="timeline-date mt-1">05/05/2025 - 09:45</div>
                        </div>

                        <!-- Item 4 -->
                        <div class="timeline-item">
                            <div class="timeline-icon blue">
                                <i class="fas fa-comments"></i>
                            </div>
                            <div class="timeline-title">Tư vấn với chuyên gia</div>
                            <div>Bạn đã đặt lịch tư vấn marketing với chuyên gia Nguyễn Hoàng Minh</div>
                            <div class="timeline-date mt-1">03/05/2025 - 14:30</div>
                        </div>

                        <!-- Item 5 -->
                        <div class="timeline-item">
                            <div class="timeline-icon yellow">
                                <i class="fas fa-coins"></i>
                            </div>
                            <div class="timeline-title">Nhận lợi nhuận</div>
                            <div>Bạn đã nhận 1,750,000 VND lợi nhuận từ dự án Coffee Shop</div>
                            <div class="timeline-date mt-1">01/05/2025 - 16:20</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end khung   -->
    </div>
</form>
<!-- ChartJS -->
<script>
    const ctx = document.getElementById('investmentBarChart').getContext('2d');
    const investmentBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Vay vốn', 'Cổ phần', 'Phần thưởng'],
            datasets: [{
                label: 'Giá trị đầu tư (VND)',
                data: [10000000, 8750000, 6250000],
                backgroundColor: ['#6f42c1', '#28a745', '#fd7e14'],
                borderRadius: 6,
                barThickness: 40
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: value => value.toLocaleString() + ' VND'
                    }
                }
            }
        }
    });
</script>